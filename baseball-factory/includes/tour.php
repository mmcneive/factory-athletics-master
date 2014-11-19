<?php
//$path = $_SERVER['DOCUMENT_ROOT'].'/wp';
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';
$templateDirectory = get_bloginfo('template_directory'); 
?>
<section id="tour-experience-overlay">
	<a href="#" id="tour-back-btn">Back to Events</a>
	<header role="intro">
		<div id="tour-intro-title">
			<img id="the-tour-logo" src="<?php echo $templateDirectory ?>/assets/images/logo-the-tour-red.png" alt="The Tour" />
			<img id="experience-stencil" src="<?php echo $templateDirectory ?>/assets/images/stencil-tour-experience.svg" alt="Experience" />
			<span>The premium video package</span>
		</div>
		<a href="#800" class="clock time time-800"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 8:00AM</span></a>
		<div id="tour-intro-photo"></div>
	</header>
	<article role="container">
		<div id="slide-800" class="time-slide text-left white-fill">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-800-bw.jpg">
				<h1><span class="stencil-number">8:00</span><span class="messaging">Greatness Starts Here.</span></h1>
			</div>
			<div class="details">
				<div>
					<h2>8 am</h2>
					<p><strong>Your path to greatness starts at an Under Armour Baseball Factory Tryout.</strong> The day starts at registration where you receive your Under Armour Baseball Factory shirt and hat and your personal schedule for the day.</p>
					<a href="#900" class="clock time time-900"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 9:00AM</span></a>
				</div>
			</div> 	
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-800.jpg"></div>	
		</div><!-- /8:00 -->
		<div id="slide-900" class="time-slide text-right white-fill">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-900-bw.jpg">
				<h1><span class="stencil-number">9:00</span><span class="messaging">Meet the Team.</span></h1>				
			</div>
			<div class="details">
				<div>
					<h2>9 am</h2>
					<p><strong>Meet other players and your coaches </strong>who explain what to expect throughout the day. </p>				
					<a href="#920" class="clock time time-920"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 9:20AM</span></a>
				</div>
			</div>			
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-900.jpg"></div>	
		</div><!-- /9:00 -->
		<div id="slide-920" class="time-slide text-right">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-920-bw.jpg">
				<h1><span class="stencil-number">9:20</span><span class="messaging">Give us your best shot.</span></h1>
			</div>
			<div class="details">
				<div>
					<h2>9:20 am</h2>
					<p>Pose for the headshot that will be seen on your player page by college coaches around the country.</p>				
					<a href="#930" class="clock time time-930"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 9:30AM</span></a>
				</div>
			</div>			
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-920.jpg"></div>	
		</div><!-- /9:20 -->
		<div id="slide-930" class="time-slide text-right white-fill">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-930-bw.jpg">
				<h1><span class="stencil-number">9:30</span><span class="messaging">Start Strong.</span></h1>							
			</div>
			<div class="details">
				<div>
					<h2>9:30 am</h2>
					<p><strong>Get warmed up</strong> by stretching, throwing, jogging, and getting ready for your first evaluation.</p>				
					<a href="#945" class="clock time time-945"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 9:45AM</span></a>
				</div>
			</div>		
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-930.jpg"></div>	
		</div><!-- /9:30 -->
		<div id="slide-945" class="time-slide text-right white-fill">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-945-bw.jpg">
				<h1><span class="stencil-number">9:45</span><span class="messaging">Go Full Speed.</span></h1>							
			</div>
			<div class="details">
				<div>
					<h2>9:45 am</h2>
					<p><strong>Run the 60-yard dash</strong> and see how you rank against other players at the tryout. </p>				
					<a href="#955" class="clock time time-955"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 9:55AM</span></a>
				</div>
			</div>		
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-945.jpg"></div>	
		</div><!-- /9:45 -->
		<div id="slide-955" class="time-slide text-right">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-955-bw.jpg">
				<h1><span class="stencil-number">9:55</span><span class="messaging">Unleash your arm.</span></h1>							
			</div>
			<div class="details">
				<div>
					<h2>9:55 am</h2>
					<p>Participate in a set of throwing drills from various positions that test your arm strength and accuracy. </p>				
					<a href="#1000" class="clock time time-1000"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 10:00AM</span></a>
				</div>
			</div>		
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-955.jpg"></div>	
		</div><!-- /9:55 -->
		<div id="slide-1000" class="time-slide text-left white-fill">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-1000-bw.jpg">
				<h1><span class="stencil-number">10:00</span><span class="messaging">Field Your Position.</span></h1>							
			</div>
			<div class="details">
				<div>
					<h2>10:00 am</h2>
					<p><strong>Get evaluated</strong> for your fielding skills from various positions. Pitchers receive an evaluation tailored to them. </p>				
					<a href="#1100" class="clock time time-1100"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 11:00AM</span></a>
				</div>
			</div>		
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-1000.jpg"></div>	
		</div><!-- /10:00 -->
		<div id="slide-1100" class="time-slide text-right white-fill">
			<div class="bumper stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-1100-bw.jpg">
				<h1><span class="stencil-number">11:00</span><span class="messaging">Showcase your swing.</span></h1>							
			</div>
			<div class="details">
				<div>
					<h2>11:00 am</h2>
					<p><strong>Swing for the fences</strong>, hit to all fields, and show off how you handle fastballs, breaking balls, and off-speed pitches. </p>				
					<a href="#" class="cta arrow red">Get Started Today</a>
					<a href="#800" class="clock time time-800"><span class="clock-face"><?php include('../assets/images/ui-tour-clock.svg'); ?></span><span class="clock-cta">Advance the hands to 8:00AM to start over</span></a>
				</div>
			</div>		
			<div class="background stretched" data-stretch="<?php echo $templateDirectory ?>/assets/images/bg-tour-photo-1100.jpg"></div>	
		</div><!-- /11:00 -->
	</article>
	<nav>
		<ul>
			<li class="thick-border"><a class="time time-800" href="#800">8:00AM</a></li>
			<li><a class="time time-900" href="#900">9:00AM</a></li>
			<li><a class="time time-920" href="#920">9:20AM</a></li>
			<li><a class="time time-930" href="#930">9:30AM</a></li>
			<li><a class="time time-945" href="#945">9:45AM</a></li>
			<li><a class="time time-955" href="#955">9:55AM</a></li>
			<li><a class="time time-1000" href="#1000">10:00AM</a></li>
			<li class="thick-border"><a class="time time-1100" href="#1100">11:00AM</a></li>
		</ul>
		<a href="#" class="cta arrow red">Get Started Today</a>
	</nav>
</section>