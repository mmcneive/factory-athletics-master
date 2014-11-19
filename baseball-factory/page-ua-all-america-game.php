<?php 
	/*
	Template Name: UA All America Game
	*/
	get_header();
	$templateDirectory = get_bloginfo('template_directory'); 
?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
<nav id="secondary" class="slanted">
	<ul>
		<li><a href="#" id="derby-btn">Home Run Derby</a></li>
		<li><a href="#" id="photos-btn">Game Photos</a></li>
		<li><a href="#" id="scouts-btn">Scout Attendance</a></li>
		<li><a href="#" id="score-btn">Box Score</a></li>
	</ul>
	<svg class="animated" id="secondary-nav-background" x="0px" y="0px" viewBox="0 0 427 75" enable-background="new 0 0 427 75" xml:space="preserve">
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#252120" d="M0,0l427,0l-35.1,74.9H0V0z" data-path-hover="M0,0l427,0v74.9H0V0z"/>
	</svg>
</nav>
<section id="hero" style="background-image: url(<?php echo $url ?>);">
	<div class="intro">
		<?php the_field('page_intro'); ?>
	</div>
</section>

<section id="date">
	<article>
		<div>
			<?php the_content(); ?>
		</div>
	</article>
	<aside>
		<header>
			<h2>Latest <a href="#">Tweets</a> / News</h2>
			<a href="https://twitter.com/baseballfactory" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @baseballfactory</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</header>
		<div id="tweets">
			<a class="twitter-timeline"  height="350" href="https://twitter.com/hashtag/uaallamerica" data-chrome="nofooter transparent noheader " data-widget-id="534774685200683008"></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</aside>
</section>

<section id="videos">
	<div id="video-player">
		<a href="#" class="play-btn"><span>Play Video</span></a>
		<img src="<?php  echo $templateDirectory;  ?>/assets/images/video-fpo.jpg" />
	</div>
	<nav>
		<ul>
			<li><a class="active" href="#">Pirate City '14</a></li>
			<li><a href="#">2013 Baseball Factory HR Derby</a></li>
			<li><a href="#">Josh Donaldson '04</a></li>
			<li><a href="#">Tyson Ross '05</a></li>
		</ul>
		<a href="#" id="view-all">View All Game Videos</a>
	</nav>
</section>

<section id="roster">
	<h1><span>Roster</span></h1>
	<!--<div id="tabs">
		<a id="national" href="#">National</a>
		<a id="american" href="#" class="active">American</a>
	</div>-->
	<ul>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>																			
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>
		<li class="national">
			<img src="http://fpoimg.com/246x315" />
			<p>Player Name - POS<br />
			<a href="#">Read Bio</a></p>
		</li>									
	</ul>
</section>

<section id="gallery">
	<article id="mosaic">
		<div class="col left">
			<div class="col left" style="background-image:url(<?php echo $templateDirectory ?>/assets/images/photo-all-american-mosaic-01.jpg)"></div>
			<div class="col right" style="background-image:url(<?php echo $templateDirectory ?>/assets/images/photo-all-american-mosaic-02.jpg)"></div>			
			<div class="clear col left" style="background-image:url(<?php echo $templateDirectory ?>/assets/images/photo-all-american-mosaic-03.jpg)"></div>
			<div class="col right" style="background-image:url(<?php echo $templateDirectory ?>/assets/images/photo-all-american-mosaic-04.jpg)"></div>	
		</div>
		<div class="col right" style="background-image:url(<?php echo $templateDirectory ?>/assets/images/photo-all-american-mosaic-05.jpg)">
			<a href="#" class="cta arrow white">Game Photo Gallery</a>
		</div>
	</article>
</section>

<section id="details">
	<aside>
		<img src="http://maps.googleapis.com/maps/api/staticmap?scale=false&size=650x448&maptype=roadmap&sensor=false&zoom=14&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xe76519%7Clabel:%7C1701+Wrigley+Field+Chicago" />
	</aside>
	<article>
		<h1>Event Info</h1>
		<h2>August 16, 2015</h2>
		<h3>Wrigley Field / Chicago, IL</h3>
		<p>Official Event Hotel<br />
		<a href="#">Best Wester Tuscon Inn & Suites</a>
		<ul id="resources">
			<li><a href="#">Player Itinerary</a></li>
			<li><a href="#">Complex Map</a></li>
			<li><a href="#">Team Rosters</a></li>
		</ul>
	</article>
</section>

<?php get_footer(); ?>