<?php
	/*
	Template Name: Events
	*/
	get_header(); 
	$isLocal = true;
	$templateDirectory = get_bloginfo('template_directory'); 
	$tempSingleURL =  esc_url( get_permalink( get_page_by_title( 'Single Event Temporary Page' ) ) );
	if(!$isLocal){
		$factoryEvents = new FactoryEvents;
    $factoryEvents->setAllEvents();
		$currentYear = date('Y'); 
		$tempSingleURL =  esc_url( get_permalink( get_page_by_title( 'Temp Single Event Page' ) ) );
	}
?>
<nav id="secondary" class="slanted">
	<ul>
		<li><a href="#events" id="events-btn">Events</a></li>
		<li><a href="#tour-experience" id="experience-btn">The tour Experience</a></li>
		<li><a href="#faqs" id="faqs-btn">FAQs</a></li>
	</ul>
	<svg class="animated" id="secondary-nav-background" x="0px" y="0px" viewBox="0 0 427 75" enable-background="new 0 0 427 75" xml:space="preserve">
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#252120" d="M0,0l427,0l-35.1,74.9H0V0z" data-path-hover="M0,0l427,0v74.9H0V0z"/>
	</svg>
</nav>
<section id="hero" class="events">
	<div class="intro">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</section>
<section id="events">
	<aside role="complimentary">
		<div id="filters">
			<div id="tabs">
				<a id="event_ages_1" href="#">Pre-HS 12-14</a>
				<a id="event_ages_2" href="#" class="active">HS 14-18</a>
			</div>
			
			<select id="event_states">
				<option value="" selected>Select State</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>				

      <select id="event_types">
        <option value="999" selected>Select Event Type</option>
        <?php
          if(!$isLocal){
            foreach($factoryEvents->programTypes as $typeId => $programName){
              echo "<option value=".$typeId.">".$programName."</option>";
            }
          }
        ?>
      </select>

      <select id="event_months">
        <option value="999" selected>Select Month</option>
        <?php
    			if(!$isLocal){
    				foreach(array_keys($factoryEvents->eventsByMonth) as $month){
    					echo "<option value=".$month.">".date("F",strtotime("$currentYear-$month-01"))."</option>";
    				}
    			}
        ?>
			</select>						

		</div><!-- /filters -->
		<div id="callout">
			<h2>The proof is in the <strong>numbers.</strong></h2>
			<ul>
				<li>
					<img src="<?php  echo $templateDirectory;  ?>/assets/images/stencil-number-350.svg" alt="350+" />
					<p>Mlb Players</p>
				</li>
				<li>
					<img src="<?php  echo $templateDirectory;  ?>/assets/images/stencil-number-50k.svg"  alt="50K" />
					<p>College Players</p>
				</li>
				<li>
					<img src="<?php  echo $templateDirectory;  ?>/assets/images/stencil-number-3500.svg" alt="3500+" />
					<p>Players Drafted</p>
				</li>
			</ul>
			<span id="open-btn">Get started with our PVP Tryout</span>
			<div id="more">
				<h3>Why start with the <strong>premium video package?</strong></h3>
				
				<h4>Your gold glove season starts here.</h4>
				
				<p>With our Premium Video Program, you receive a professionally edited video of your tryout, a personal player page, and will be seen by thousands of college coaches in our online recruiting database.</p>
				
				<a href="#">Back to the schedule</a>
			</div>
		</div>
			
	</aside>
	<?php if(!$isLocal){ ?>
	<article role="main">
		<nav id="calendar">
			<ul>
				<li id="prev-month"><a id="prev_month_trigger" href="#"></a></li>
				<li id="curr-month"><h2 id="curr_month_label"></h2></li>
				<li id="next-month"><a id="next_month_trigger" href="#"></a></li>	
			</ul>
		</nav>
	  <span id="events_message"></span> 
	<?php foreach ($factoryEvents->eventsByMonth as $eventMonthGroupingKey => $eventMonthGroupingValue) { ?>  

    <div id="month_<?php echo $eventMonthGroupingKey?>">

	  <?php foreach ($eventMonthGroupingValue as $eventDayGroupingKey => $eventDayGroupingValue) { ?>

  	  <div class="events_by_day" id="<?php echo $eventDayGroupingKey?>">
  	    <h3><?php echo $eventDayGroupingKey; ?></h3>
  	    <table>
  	    	<th>Location</th><th>Session</th><th>Event Type</th><th>Time</th><th></th>
    			<?php foreach ($eventDayGroupingValue as $event) { ?>  
    	        <tr class="event_rows event_month_<?php echo $eventMonthGroupingKey?> event_state_<?php echo $event->{EVENTLOCATIONSTATE}?> event_ages_<?php echo $event->{EVENTAGESID}?> event_type_<?php echo $event->{EVENTPROGRAMTYPEID}?>">  
    	          <td>
    	            <?php echo $event->{EVENTLOCATIONCITY}.", ".$event->{EVENTLOCATIONSTATE}; ?> </br>
    	            <?php echo $event->{EVENTLOACTIONNAME} ?>
    	          </td>  
    	          <td>
    	            <?php echo "Session ".$event->{EVENTSESSIONID}." ".$event->{EVENTAGESDESC}; ?> </br>
    	            <?php echo $event->{EVENTEVENTNAME}; ?>
    	          </td>  
    	          <td>
    	            <?php echo $event->{EVENTPROGRAMTYPENAME}; ?>
    	          </td>
    	          <td>
    	            <?php echo $event->{EVENTSTARTTIME}; ?>
    	          </td>
    	          <td>
    	            <a href="<?php echo $tempSingleURL."?".EID."=".$event->{EVENTEVENTID}; ?>" class="more-info-btn"><?php echo "More Info"; ?></a>
    	          </td>
    	        </tr>
          <?php } ?>
  	    </table> 
      </div>
      
    <?php } ?>

    </div>
      
	<?php } ?>
	</article>
	<?php } else { ?>
    <article role="main">
        <nav id="calendar">
            <ul>
                <li id="prev-month">
                    <a href="#">Sept</a>
                </li>

                <li id="curr-month">
                    <h2>October</h2>
                </li>

                <li id="next-month">
                    <a href="#">Nov</a>
                </li>
            </ul>
        </nav>

        <h3>10/01, Wednesday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Peoria, AZ<br>
                    Peoria Sports Complex</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Arizona Freshman/Sophomore Fall Classic</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="<?php echo $tempSingleURL ?>">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/04, Saturday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Columbia, MD<br>
                    Factory Athletics Training Facility</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Factory Development Institute National Select Weekend</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/05, Sunday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Abilene, TX<br>
                    McMurry University</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Abilene, TX</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Abilene, TX<br>
                    McMurry University</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Abilene, TX</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Trenton, NJ<br>
                    ARM &amp; HAMMER Park</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Trenton, NJ</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>12 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Trenton, NJ<br>
                    ARM &amp; HAMMER Park</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Trenton, NJ</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>8 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Trenton, NJ<br>
                    ARM &amp; HAMMER Park</td>

                    <td>Session 2 (Ages 12-14)<br>
                    National Tryout &amp; Interactive Video Program</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>3 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Parker, CO<br>
                    Double Angel Ball Park</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Parker (Denver), CO</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>12 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Parker, CO<br>
                    Double Angel Ball Park</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Parker (Denver), CO</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>8 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Parker, CO<br>
                    Double Angel Ball Park</td>

                    <td>Session 2 (Ages 12-14)<br>
                    National Tryout &amp; Interactive Video Program</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>3 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Spokane, WA<br>
                    Gonzaga Prep High School</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Spokane, WA</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Spokane, WA<br>
                    Gonzaga Prep High School</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Spokane, WA</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Sauget, IL<br>
                    GCS Ballpark</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Sauget (St. Louis, MO), IL</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Sauget, IL<br>
                    GCS Ballpark</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Sauget (St. Louis, MO), IL</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/08, Wednesday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Peoria, AZ<br>
                    Peoria Sports Complex</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Arizona Senior Fall Classic</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/12, Sunday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Hoover, AL<br>
                    Spain Park High School</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Hoover (Birmingham), AL</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Hoover, AL<br>
                    Spain Park High School</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Hoover (Birmingham), AL</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/15, Wednesday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Peoria, AZ<br>
                    Peoria Sports Complex</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Arizona Junior Fall Classic</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/19, Sunday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>El Paso, TX<br>
                    El Paso Community College</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - El Paso, TX</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>El Paso, TX<br>
                    El Paso Community College</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - El Paso, TX</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/22, Wednesday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Walnut, CA<br>
                    Mt. San Antonio College</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Under Armour SoCal Classic, powered by Baseball Factory's
                    Team One</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h3>10/26, Sunday</h3>

        <table>
            <tbody>
                <tr>
                    <th>Location</th>

                    <th>Session</th>

                    <th>Event Type</th>

                    <th>Time</th>

                    <th></th>
                </tr>

                <tr>
                    <td>Peachtree City, GA<br>
                    The Chuck at Homeplate</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Peachtree City (Atlanta), GA</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Peachtree City, GA<br>
                    The Chuck at Homeplate</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Peachtree City (Atlanta), GA</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Corpus Christi, TX<br>
                    Whataburger Field</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Corpus Christi, TX</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Corpus Christi, TX<br>
                    Whataburger Field</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Corpus Christi, TX</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Stillwater, MN<br>
                    St. Croix Valley Recreation Center</td>

                    <td>Session 1 (Ages 14-18)<br>
                    Premium Video Program - Stillwater (Minneapolis), MN</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>9 AM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>

                <tr>
                    <td>Stillwater, MN<br>
                    St. Croix Valley Recreation Center</td>

                    <td>Session 1 (Ages 14-18)<br>
                    National Tryout - Stillwater (Minneapolis), MN</td>

                    <td>National Team<br>
                    Invite Only Event</td>

                    <td>1 PM</td>

                    <td>
                        <a class="more-info-btn" href="#">More Info</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </article>	
	<?php } ?>
</section><!-- /events -->

<section id="tour-experience">
	<article id="experience-gateway">
		<h1>The tour experience.</h1>
		<p><strong>At your Under Armour Baseball Factory tryout</strong>, you’ll be evaluated by our professional coaches, get tips to improve your game, and meet other players from your area.</p>
		<a href="#" class="cta arrow dark-grey">Experience a tryout</a>
	</article>
	<article id="mosaic">
		<div class="col left">
			<div class="col left" id="banner">
				<a href="#">
					<span>12U? <small>Get More info on our youth baseball programs</small></span>
				</a>
			</div>
			<div class="col right" id="slideshow"></div>
			<div class="double" id="pullquote">
				<blockquote>
					“I feel so much more experienced and knowledgeable about the game because of the coaching at Pirate City.”
				</blockquote>
			</div>
		</div>
		<div class="col right" id="featured-event">
			<a href="#">
				<span>Pirate City<small>PITTSBURGH, PA<br />DEC 20–23</small><i id="chevron"></i></span>
			</a>
			<h2>Featured<br />Event</h2>
		</div>
	</article>
	<?php include('includes/register.php'); ?>
</section>
<section id="faqs">
	<h1>FAQs</h1>
	<ul>
		<li>
			<h2>How do I get started?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus non risus eu scelerisque. Sed congue ligula non sagittis interdum. Donec dui lacus, suscipit eu tincidunt at, maximus et dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</li>
		<li>
			<h2>How do I get started?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus non risus eu scelerisque. Sed congue ligula non sagittis interdum. Donec dui lacus, suscipit eu tincidunt at, maximus et dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</li>
		<li>
			<h2>How do I get started?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus non risus eu scelerisque. Sed congue ligula non sagittis interdum. Donec dui lacus, suscipit eu tincidunt at, maximus et dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</li>
		<li>
			<h2>How do I get started?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus non risus eu scelerisque. Sed congue ligula non sagittis interdum. Donec dui lacus, suscipit eu tincidunt at, maximus et dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</li>				
		
	</ul>
</section>
  
<?php get_footer(); ?>