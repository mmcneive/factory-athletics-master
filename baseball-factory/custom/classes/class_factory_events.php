<?php
class FactoryEvents {
  public $factorydb;
  private $stmt; 
  public $eventsByMonth = array();
  public $programTypes = array();

  function __construct() {
    $this->factorydb = new FactoryDB;
  }  
 
  function setAllEvents() {
    $currentYear = date('Y');  
    $currentMonth = date('n');     
    $date = date_create("$currentYear-$currentMonth-01");
    date_add($date,date_interval_create_from_date_string("1 year"));
    date_sub($date,date_interval_create_from_date_string("1 day"));
    $nextYear = date_format($date, 'Y');
    $nextMonth = date_format($date, 'n');
    $nextDay = date_format($date, 'd'); 
      
    $alleventsquery = "SELECT ev.event_id, ev.event_name, ev.event_start_date, ev.event_start_time, loc.location_city, loc.location_state, loc.location_name, ". 
     "ei.session_id, ev.event_ages_desc, ev.event_ages_id, pro.event_program_id, pro.program_name_friendly ". 
     "FROM dbo.tbl_event ev ".
     "JOIN dbo.tbl_location loc ON (loc.pk_location = ev.fk_location) ".  
     "JOIN dbo.tbl_event_additional_info ei ON (ei.fk_event = ev.pk_event) ".
     "JOIN dbo.tbl_event_program pro ON (ev.fk_event_program = pro.event_program_id) ".
     "WHERE ev.event_start_date BETWEEN '$currentYear/$currentMonth/01' AND '$nextYear/$nextMonth/$nextDay' ".
     "AND ev.fk_program not in('0A262169-48B7-44D5-84ED-16C264ED65B8', '2402EBAF-94B1-47A9-9CE0-306B9B1B863B', 'A65E9DD3-0578-4A34-8609-85F97C305690') ".
     "AND ev.add2_public_schedule = 1 ".   
     "ORDER BY ev.event_start_date ASC";
    $events = mssql_query($alleventsquery);
    $currentDayKey = null;
    //echo "<!-- WATSON  ".$alleventsquery." -->";
    
    while ($event = mssql_fetch_object($events)){
      $eventMonth = date("n",strtotime($event->event_start_date));  
      $eventDay = date("m/d, l",strtotime($event->event_start_date));  
      if($currentDayKey !=  $eventDay){
        $currentDayKey = $eventDay;
      }
      $this->eventsByMonth[$eventMonth][$currentDayKey][] = $event;      
      $this->programTypes[$event->event_program_id] = $event->program_name_friendly;     
    }
    //return $eventsByMonth; 
  } 

  function getRelatedEvents($eventId) {
    $events = array();  
    $formattedevents = array(); 
    $eventquery = "SELECT ev.event_id, ev.event_name, ev.event_start_date, ev.event_start_time, ev.event_ages_id, ev.fk_location ".
                  "FROM dbo.tbl_event ev WHERE event_id = $eventId";
    $eventresult = mssql_query($eventquery);
    $event = mssql_fetch_object($eventresult);
    $events[] = $event;

    $eventheader = array("dayname"=> date("l",strtotime($event->event_start_date)), 
                         "fulldate"=> date("F",strtotime($event->event_start_date))." ".date("j",strtotime($event->event_start_date)).", ".date("Y",strtotime($event->event_start_date)) );
    $formattedevents['header'] = $eventheader;
        
    $relatedeventsquery = "SELECT ev.event_id, ev.event_name, ev.event_start_date, ev.event_start_time, ev.event_ages_id FROM dbo.tbl_event ev ".
      "WHERE ev.fk_location = '".mssql_guid_string($event->{EVENTLOCATION})."' ".  
      "AND ev.event_start_date = '".$event->{EVENTEVENTSTARTDATE}."' ".
      "AND ev.add2_public_schedule = 1 ".
      "AND ev.event_id != $eventId ".
      "AND ev.fk_program NOT IN ('0A262169-48B7-44D5-84ED-16C264ED65B8', '2402EBAF-94B1-47A9-9CE0-306B9B1B863B', 'A65E9DD3-0578-4A34-8609-85F97C305690') ";
      //echo "<!-- WATSON ". $relatedeventsquery ."-->";

    $relatedeventsresult = mssql_query($relatedeventsquery);
    while ($relatedevent = mssql_fetch_object($relatedeventsresult)){
      $events[] = $relatedevent;
    }

    foreach($events as $key => $event) {
      $spaceindex = strrpos ($event->{EVENTSTARTTIME}, ' ');
      $event->{EVENTSTARTTIMEHOUR} = substr($event->{EVENTSTARTTIME},0,$spaceindex);
      $event->{EVENTSTARTTIMEMERIDIEM} = substr($event->{EVENTSTARTTIME},$spaceindex+1,2);
      switch ($event->{EVENTAGESID}) {
        case 1:
          $event->{EVENTAGESDESC} = "Pre HS (12-14)"; break;
        case 2:
          $event->{EVENTAGESDESC} = "HS (14-18)"; break;        
        default:
          $event->{EVENTAGESDESC} = "Ages TBD"; break;
      }

      $formattedevents[$event->{EVENTSTARTTIMEMERIDIEM}.$event->{EVENTSTARTTIMEHOUR}] = $event;
    }    
    ksort($formattedevents);
    return $formattedevents; 
  } 
      
  function getEventsByMonth($month) {
    $monthlyeventsquery = "SELECT ev.event_id, ev.event_name, ev.event_start_date, ev.event_start_time, loc.location_city, loc.location_state, loc.location_name, ei.session_id, ev.event_ages_desc ". 
     "FROM dbo.tbl_event ev ".
     "JOIN dbo.tbl_location loc ON (loc.pk_location = ev.fk_location) ".  
     "JOIN dbo.tbl_event_additional_info ei ON (ei.fk_event = ev.pk_event) ".
     "WHERE ev.event_start_date BETWEEN '2014/10/01' AND '2014/10/31' ".
     "AND ev.fk_program not in('0A262169-48B7-44D5-84ED-16C264ED65B8', '2402EBAF-94B1-47A9-9CE0-306B9B1B863B', 'A65E9DD3-0578-4A34-8609-85F97C305690') ".
     "AND ev.add2_public_schedule = 1 ".   
     "ORDER BY ev.event_start_date ASC"; 
    $events = mssql_query($monthlyeventsquery);
    $eventsByDay = array();
    $currentDayKey = null;
    
    while ($event = mssql_fetch_object($events)){
      $eventDay = date("m/d, l",strtotime($event->event_start_date));  
      if($currentDayKey !=  $eventDay){
        $currentDayKey = $eventDay;
      }
      $eventsByDay[$currentDayKey][] = $event;
    }
    return $eventsByDay; 
  } 

  function getEventsByMonthProc($month) {
    $this->stmt = mssql_init('[dugout].[dbo].[sp_get_event_registration_schedule]');
    mssql_bind($this->stmt, '@month',  $month,  SQLINT1,  false,  false,  2);
    $events = mssql_execute($this->stmt);     
    $eventsByDay = array();
    $currentDayKey = null;
    
    while ($event = mssql_fetch_object($events)){
      $eventDay = date("m/d, l",strtotime($event->start_date));  
      if($currentDayKey !=  $eventDay){
        $currentDayKey = $eventDay;
      }
      $eventsByDay[$currentDayKey][] = $event;
    }
    return $eventsByDay; 
  }  

  function __destruct() {
    if ($this->stmt) mssql_free_statement($this->stmt);
  }  
          
} // end FactoryEvents class
?>