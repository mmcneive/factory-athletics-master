<?php
get_header();
$templateDirectory = get_bloginfo('template_directory'); 
 ?>

		<section id="video">
			<h1 id="banner-01"><img src="<?php  echo $templateDirectory;  ?>/assets/images/headline-home-banner-01.svg" alt="Build your way to GREATNESS." /></h1>
			<h1 id="banner-02"><img src="<?php  echo $templateDirectory;  ?>/assets/images/headline-home-banner-02.svg" alt="Build your way to GREATNESS." /></h1>
			<h1 id="banner-03"><img src="<?php  echo $templateDirectory;  ?>/assets/images/headline-home-banner-03.svg" alt="Build your way to GREATNESS." /></h1>
			<h1 id="banner-04"><img src="<?php  echo $templateDirectory;  ?>/assets/images/headline-home-banner-04.svg" alt="Build your way to GREATNESS." /></h1>
			<a class="get-started slanted" href="#">
				<span id="powered-by">Powered by</span>
				<div id="logo" style="background-image: url(<?php  echo $templateDirectory;  ?>/assets/images/ua-logo.svg)" ></div>
				<div id="text-block">
					<span><small>Find an event to</small>Get Started</span>
					<i class="icon"></i>
				</div>
				<svg id="get-started-background" class="animated" viewBox="0 0 424 107">
					<path d="M424,107H1L28.6,0H424V107z" data-path-hover="M424,107H1V0h423V107z"/>
				</svg>
			</a>
			<a href="#intro" class="scroll"><span>Scroll</span></a>
			<canvas id="vfx"></canvas>
			<canvas id="bg"></canvas>
			<div id="hero-video">
				<video id="main-layer" src="<?php  echo $templateDirectory;  ?>/assets/videos/home-fpo-02.mp4" autoplay loop></video>
			</div>
		</section>
		
		<section id="intro">
			<article role="main">
				<div>
					<h2>We are baseball factory</h2>
					<p>With professional coaches that provide personalized, world-class instruction, Baseball Factory is here to help every player take his game <strong>to the next level.</strong></p>
				</div>
			</article>
			<aside role="complimentary">
				<div class="col">
					<h2>The Tour</h2>
					<p><strong>The Under Armour Baseball Factory Tryout Tour</strong> is rolling through all 50 states. Don’t miss your opportunity to be discovered.</p> 
					<p><a href="#" class="cta arrow white">Find an Event</a></p>
				</div>
				<div class="col right">
					<img src="<?php  echo $templateDirectory;  ?>/assets/images/logo-ua-tryouts.png" />
				</div>
			</aside>
		</section>
		
		<section id="nominate">
			<p><span>Coach or know a player who should be part of our team?</span> <a href="#">Nominate a Player</a></p>
		</section>
		
		<section id="event-gateway">
			<div class="diamond"><h2>Find an Event</h2></div>
			<a class="pre-hs" href="#">Pre-HS</a>
			<a class="hs" href="#">HS</a>
		</section>
		
		<section id="latest">
			<article role="main">
				<div>
					<p>2001 Alumni</p>
					<h3>David Wright was discovered here.</h3>
					<p><a href="#">Read his story</a></p>
				</div>
			</article>
			<aside role="complimentary">
				<div class="social">
					<div class="twitter">
						<div>
							<h2>@BASEBALL FACTORY</h2>
							<p>Catchers work on blocking during position-specific training at    #BFHitsDodgertown pic.twitter.com/a12uobfg083</p>
						</div>
						<a href="https://twitter.com/BaseballFactory">Twitter</a>

					</div>
					<div id="instafeed">
						<a href="http://instagram.com/baseballfactory">Instagram</a>
					</div>
				</div>
				<div class="headlines">
					<div>
						<h2>Factory Wire</h2>
						<ul>
							<li><a href="#">Off-season conditioning tips</a></li>
							<li><a href="#">Little League World Series Recap</a></li>
							<li><a href="#">14 Baseball Factory Alumni Earn All-Star Recognition </a></li>
						</ul>
						<p><a href="#">View All News</a></p>
					</div>
				</div>
			</aside>
		</section>
		
		<section id="factory-fans">
			<div class="diamond"><h2>Factory Fans</h2></div>
			<article>
				<h3>Life Changing.</h3>
				<p>"Not only did you teach baseball but found time to throw in "life lessons", which we all know kids these days need."</p>
				<p><a href="#">More Life Changing Testimonials</a></p>
			</article>
			<article role="right">
				<h3>Confidence is Key.</h3>
				<p>"Not only did you teach baseball but found time to throw in "life lessons", which we all know kids these days need."</p>
				<p><a href="#">Read More</a></p>
			</article>
		</section>
		
		<section id="players">
			<article role="main">
				<div class="headline">
					<img src="<?php  echo $templateDirectory;  ?>/assets/images/stencil-number-50k-red.svg" alt="50k+" />
					<p>Alumni have signed with a college team.</p>
				</div>
				<div class="squareimg"><img src="<?php  echo $templateDirectory;  ?>/assets/images/square-fpo-01.jpg" /></div>
				<div class="squareimg right"><img src="<?php  echo $templateDirectory;  ?>/assets/images/square-fpo-02.jpg" /></div>
			</article>
			<aside role="complimentary">
				<div>
					<img class="headline" src="<?php  echo $templateDirectory;  ?>/assets/images/stencil-heading-top-100.svg" alt="The Top 100 Players" />
				</div>
				<span>Powered by</span>
				<img class="logo" src="<?php  echo $templateDirectory;  ?>/assets/images/ua-logo.svg" alt="Powered by Under Armour" />

			</aside>
		</section>
		
		<section id="bftv">
			<article role="main">
				<p>Baseball Factory TV</p>
				<div class="video">	
					<a href="#" class="play-btn"><span>Play Video</span></a>
					<img src="<?php  echo $templateDirectory;  ?>/assets/images/video-fpo.jpg" />
				</div>
			</article>
			<aside role="complimentary">
				<div class="summary">
					<h2>Watch Video</h2>
					<p>Watch Baseball Factory players perform, including current prospects, Under Armour All-Americans, and MLB All-Stars.</p>
				</div>
				<nav>
					<ul>
						<li><a class="active" href="#">Pirate City '14</a></li>
						<li><a href="#">2013 Baseball Factory HR Derby</a></li>
						<li><a href="#">Josh Donaldson '04</a></li>
						<li><a href="#">Tyson Ross '05</a></li>
					</ul>
				</nav>
			</aside>
		</section>
		
		<section id="partners">
			<p><span>Partners</span></p>
			<img src="<?php  echo $templateDirectory;  ?>/assets/images/partners-fpo.jpg" />
		</section>
		
<?php get_footer(); ?>