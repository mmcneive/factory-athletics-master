<?php
	/*
	Template Name: Event Story Single Page
	*/
	get_header(); 
	$templateDirectory = get_bloginfo('template_directory'); 
  $eventId = $_GET[EID];
  $factoryEvents = new FactoryEvents;
  $events = $factoryEvents->getRelatedEvents($eventId);
  
  //foreach($events as $event){
  //  echo $event->{EVENTEVENTNAME}."</br>";
  //} 
?>
<section id="hero" class="single-event">
	<article id="intro">

		<div id="messaging">
			<div id="wayfinder">
				<h1>Under Armour Baseball Factory National Tryout Tour</h1>
				<h2>Rolls into <em><?php echo get_the_title(); ?></em> on <em>XXXX</em>.</h2>
			</div>
			<h3>Your path to greatness <strong>starts here.</strong></h3>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<ul>
				<li><a href="#" class="cta red filled">Register Now</a></li>
				<li><a href="#" class="cta black filled">Learn More</a></li>
			</ul>
		</div>
		<img id="photo-diamond" src="<?php echo $templateDirectory; ?>/assets/images/ui-icon-diamond-red.svg" />
		<div id="photo">
			<img src="<?php the_field('player_img'); ?>" />
		</div>
		<div id="rings">
			<div id="ring-1"></div>
			<div id="ring-2"></div>
			<div id="ring-3"></div>
			<div id="ring-4"></div>
		</div>
	</article>
	<aside id="quote">
		<blockquote>
			<?php the_field('player_quote'); ?>
		</blockquote>
		<p><strong><?php the_field('player_name'); ?></strong> <?php the_field('player_year'); ?><br /><?php the_field('player_creds'); ?></p>
	</aside>
	<aside id="schedule">
    <ul>
      <li id="header"><label><?php echo $events['header']['dayname']; ?></label><p><?php echo $events['header']['fulldate']; ?></p></li>
      <?php
        unset($events['header']);
        foreach($events as $event){?>
          <li><label><img src="<?php echo $templateDirectory."/assets/images/stencil-digits-".$event->{EVENTSTARTTIMEHOUR}.".svg"; ?>" /><span><?php echo $event->{EVENTSTARTTIMEMERIDIEM}; ?></span></label><?php echo $event->{EVENTAGESDESC}."  ".$event->{EVENTEVENTNAME}; ?></p></li>
      <?php } ?>     
			<!-- li><label><img src="<?php echo $templateDirectory ?>/assets/images/stencil-digits-9.svg" /><span>am</span></label><p>HS (14-18) National Tryout + Premium Video Program</p></li -->
			<!-- li><label><img src="<?php echo $templateDirectory ?>/assets/images/stencil-digits-1.svg" /><span>pm</span></label><p>HS (14-18) National Tryout</p></li -->
			<!-- li><label><img src="<?php echo $templateDirectory ?>/assets/images/stencil-digits-4.svg" /><span>pm</span></label><p>Pre-HS (12-14) National Tryout + Interactive Video Program</p></li -->
		</ul>
	</aside>
</section>
<section id="video-callout">
	<p>See what you can expect from a Baseball Factory tryout.</p>
	<a href="#" class="play-btn"><span>Play Video</span></a>
</section>

<section id="triptych">
	<article>
		<div>
			<img src="<?php echo $templateDirectory; ?>/assets/images/ui-icon-chart-black.svg" />
			<h1>Get Evaluated.</h1>
			<p><?php the_field('get_evaluated'); ?></p>
		</div>
	</article>
	<article>
		<div>
			<img src="<?php echo $templateDirectory; ?>/assets/images/ui-icon-eye-black.svg" />
			<h1>Get Discovered.</h1>
			<p><?php the_field('get_discovered'); ?></p>
		</div>
		<div class="connectors" id="connector-1-white">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 292 472.2" enable-background="new 0 0 292 472.2" xml:space="preserve">
				<g>
					<g>
						<g>
							<path fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" d="M284.5,472.2c0-0.3,0-0.7,0-1"/>
							<path fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="2.007,2.007" d="M284.5,469.1
								C281.9,256,9.2,211.2,7.5,2"/>
							<path fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" d="M7.5,1c0-0.3,0-0.7,0-1"/>
						</g>
					</g>
				</g>
			</svg>
		</div>
	</article>
	<article>
		<div>
			<img src="<?php echo $templateDirectory; ?>/assets/images/ui-icon-trophy-black.svg" />
			<h1>Get Recruited.</h1>
			<p><?php the_field('get_recruited'); ?></p>
		</div>
	</article>	
	<div class="connectors" id="connector-1">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 292 472.2" enable-background="new 0 0 292 472.2" xml:space="preserve">
			<g>
				<g>
					<g>
						<path fill="none" stroke="#DB2C34" stroke-width="2" stroke-miterlimit="10" d="M284.5,472.2c0-0.3,0-0.7,0-1"/>
						<path fill="none" stroke="#DB2C34" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="2.007,2.007" d="M284.5,469.1
							C281.9,256,9.2,211.2,7.5,2"/>
						<path fill="none" stroke="#DB2C34" stroke-width="2" stroke-miterlimit="10" d="M7.5,1c0-0.3,0-0.7,0-1"/>
					</g>
				</g>
			</g>
		</svg>
	</div>

</section>
<section id="stats">
	<article>
		<div id="mosaic">
			<div class="top-left"></div>
			<div class="top-right"></div>
			<div class="bottom"></div>
		</div>
		<div id="panel">
			<div>
				<h1>See how you<br />stack up.</h1>
				<p>2014 Baseball Factory Stats</p>
				<ul>
					<li><h2><?php the_field('arm_speed'); ?></h2><span>arm<br />speed</span></li>
					<li><h2><?php the_field('bat_speed'); ?></h2><span>bat<br />speed</span></li>
					<li><h2><?php the_field('60_yard_dash'); ?></h2><span>60 yd<br />dash</span></li>
				
				</ul>
			</div>
		</div>
	</article>
</section>

<section id="alumni-callout">
	<article>
		<img id="golden-glove-trophy" src="<?php echo $templateDirectory; ?>/assets/images/bg-single-events-alumni-trophy.png" />
		<p><b>The best ballplayers start at The Factory.</b><br />
		<?php the_field('gold_glove'); ?><br />
		<a href="#">Check out our alumni</a></p>
	</article>
	<div class="connectors" id="connector-2">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 292 472.2" enable-background="new 0 0 292 472.2" xml:space="preserve">
		<g>
			<g>
				<g>
					<path fill="none" stroke="#DB2C34" stroke-width="2" stroke-miterlimit="10" d="M284.5,0c0,0.3,0,0.7,0,1"/>
					<path fill="none" stroke="#DB2C34" stroke-width="2" stroke-miterlimit="10" stroke-dasharray="2.007,2.007" d="M284.5,3
						C281.9,211.6,9.2,256.5,7.5,470.2"/>
					<path fill="none" stroke="#DB2C34" stroke-width="2" stroke-miterlimit="10" d="M7.5,471.2c0,0.3,0,0.7,0,1"/>
				</g>
			</g>
		</g>
		</svg>
	</div>
</section>

<section id="experience-callout">
	<article id="experience-gateway">
		<div>
			<h1>The tour experience.</h1>
			<p><strong>At your Under Armour Baseball Factory tryout</strong>, you’ll be evaluated by our professional coaches, get tips to improve your game, and meet other players from your area.</p>
			<a href="#" class="cta arrow dark-grey">Experience a tryout</a>
		</div>
	</article>
	<article id="mosaic">
		<div class="col left"></div>
		<div class="col right"></div>
		<div class="double"></div>
	</article><!-- /experience-gateway -->
	<?php include('includes/register.php'); ?>
</section>

<?php get_footer(); ?>