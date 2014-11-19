var currentAgeClass = 'event_ages_2';
var currentStateClass = '';
var currentTypeClass = '';
var currentMonthClass = '';
var monthsArray = [];
var monthIndexes = [];
var currentMonthIndex,previousMonthIndex,nextMonthIndex;

$(document).ready(function(){

  currentMonthIndex = 0;
  $('#event_months > option').each(function(){
    if($(this).val() != "999"){
      monthsArray[$(this).val()] = $(this).text();
      monthIndexes.push( $(this).val() );
    }
  });
  currentMonthClass = 'event_month_'+monthIndexes[currentMonthIndex]; 

  setMonthControls();
    
  $('#event_ages_1').click(function(){
    $(this).addClass('active');
    $('#event_ages_2').removeClass('active');
    currentAgeClass = 'event_ages_1'; 
    setEventClasses();
    return false;
  });

  $('#event_ages_2').click(function(){
    $(this).addClass('active');
    $('#event_ages_1').removeClass('active');
    currentAgeClass = 'event_ages_2'; 
    setEventClasses();
    return false;
  });

  $('#event_states').change(function(){
    currentStateClass = 'event_state_'+$(this).val();
    setEventClasses();
    return false;
  });

  $('#event_types').change(function(){
    currentTypeClass = 'event_type_'+$(this).val();
    setEventClasses();
    return false;
  });

  $('#event_months').change(function(){
    currentMonthIndex = monthIndexes.indexOf($(this).val());
    setMonthControls(); 
    return false;
  });

  $('#prev_month_trigger').click(function(){
    currentMonthIndex = currentMonthIndex-1 < 0 ? monthIndexes.length-1 : currentMonthIndex-1;
    setMonthControls();
    return false;
  });

  $('#next_month_trigger').click(function(){
    currentMonthIndex = currentMonthIndex+1 >= currentMonthIndex.length ? 0 : currentMonthIndex+1;
    setMonthControls();
    return false;
  });
  
}); //end doc ready

function setMonthControls(){
  if (currentMonthIndex == 0){
    $('#prev_month_trigger').hide();
  } else {
    $('#prev_month_trigger').show();    
  }
  if (currentMonthIndex == monthIndexes.length-1){
    $('#next_month_trigger').hide();    
  } else {
    $('#next_month_trigger').show();        
  }

  previousMonthIndex = currentMonthIndex-1 < 0 ? monthIndexes.length-1 : currentMonthIndex-1;
  nextMonthIndex = currentMonthIndex+1 >= monthIndexes.length ? 0 : currentMonthIndex+1;       

  $('#prev_month_trigger').text(monthsArray[monthIndexes[previousMonthIndex]]);
  $('#curr_month_label').text(monthsArray[monthIndexes[currentMonthIndex]]);
  $('#next_month_trigger').text(monthsArray[monthIndexes[nextMonthIndex]]);
  $('#event_months').val(monthIndexes[currentMonthIndex]);
  
  currentMonthClass = 'event_month_'+monthIndexes[currentMonthIndex];
  setEventClasses();
  //console.log('previousMonthIndex='+previousMonthIndex+' currentMonthIndex='+currentMonthIndex+' nextMonthIndex='+nextMonthIndex) ;
}

function setEventClasses(){
  $('.event_rows').hide().removeClass('show_this_event');
  $('.event_rows').each(function(){
    if ( $(this).hasClass(currentAgeClass) ){
      $(this).addClass('show_this_event');  
    }
    if (currentStateClass != '' && !$(this).hasClass(currentStateClass) ){
      $(this).removeClass('show_this_event');  
    }
    if (currentTypeClass != '' && !$(this).hasClass(currentTypeClass) ){
      $(this).removeClass('show_this_event');  
    }
    if (currentMonthClass != '' && !$(this).hasClass(currentMonthClass) ){
      $(this).removeClass('show_this_event');  
    }
  });
  displayFilteredEvents();
  //console.log('age: '+ currentAgeClass); console.log('state: '+ currentStateClass); console.log('type: '+ currentTypeClass); console.log('month: '+ currentMonthClass);
}

function displayFilteredEvents(){
  $('#events_message').html('');
  $('.show_this_event').show();
  $('.events_by_day').show();
  $('.events_by_day').each(function(index ) {
    if ($(this).find('tr:visible').length < 2){
      $(this).hide();
    }
  });
  if ($('.events_by_day:visible').length == 0){
    $('#events_message').html("'no events returned' user friendly message goes here");
  }    
}