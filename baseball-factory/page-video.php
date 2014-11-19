<?php 
	/*
	Template Name: Video
	*/
	get_header();
	$templateDirectory = get_bloginfo('template_directory'); 
?>

<section id="hero">
	<!--<div class="bftv"></div>-->
	<div id="glitch">
		<div id="glitch-top" class="glitch-section">
			<div class="white"><?php include('assets/images/stencil-bftv.php'); ?></div>
			<div class="red"><?php include('assets/images/stencil-bftv.php'); ?></div>
			<div class="blue"><?php include('assets/images/stencil-bftv.php'); ?></div>
		</div>
		<div id="glitch-mid" class="glitch-section">
			<div class="white"><?php include('assets/images/stencil-bftv.php'); ?></div>
			<div class="red"><?php include('assets/images/stencil-bftv.php'); ?></div>
			<div class="blue"><?php include('assets/images/stencil-bftv.php'); ?></div>
		</div>
		<div id="glitch-bottom" class="glitch-section">
			<div class="white"><?php include('assets/images/stencil-bftv.php'); ?></div>
			<div class="red"><?php include('assets/images/stencil-bftv.php'); ?></div>
			<div class="blue"><?php include('assets/images/stencil-bftv.php'); ?></div>
		</div>
	</div>
</section>
<section id="watching">
	<article id="player">
		<h2>Currently Watching:</h2>
		<h3>The Importance of Player Development</h3>
		<!--<video class="video-js vjs-default-skin" controls
		 preload="auto" width="1000" height="506" poster="<?php echo $templateDirectory; ?>/assets/images/video-fpo.jpg"
		 data-setup='{}'>
		  <source src="<?php echo $templateDirectory; ?>/assets/videos/home-fpo-02.mp4" type='video/mp4'>
		  <source src="<?php echo $templateDirectory; ?>/assets/videos/home-fpo-02.webm" type='video/webm'>
		  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>-->
		<div id="video-player">
			<div id="poster">
				<a href="#" class="play-btn"><span>Play Video</span></a>
				<img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo.jpg" />
			</div>
			<div id="caption">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus non risus eu scelerisque. Sed congue ligula non sagittis interdum. Donec dui lacus, suscipit eu tincidunt at, maximus et dui.</p>
				<a href="#" class="cta filled red">Share</a>
			</div>
		</div>
	</article>
	<aside>
		<a href="#" id="playlist-picker"><span id="playlist-name">Featured</span> Playlist</a>
		<ul id="playlist-options">
			<li><a href="#latest-playlist" class="no-scroll">Latest</a></li>
			<li><a href="#alumni-playlist" class="no-scroll">Alumni</a></li>
			<li><a href="#all-american-playlist" class="no-scroll">UA All American</a></li>
			<li><a href="#featured-playlist" class="selected no-scroll">Featured</a></li>
		</ul>
		<div class="scroll-pane">
			
			<ul class="video-list shown" id="featured-playlist">
				<li>
					<a href="#" class="playing">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>Featured Playlist FPO Video / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
			</ul>
			
			<ul class="video-list" id="alumni-playlist">
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>Alumni Playlist FPO Video (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
			</ul>	

			<ul class="video-list" id="latest-playlist">
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>Latest Playlist FPO Video / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>				
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>																																				
			</ul>	
				
			<ul class="video-list" id="all-american-playlist">
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Alll American Playlist FPO Video / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
						<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>					
					</a>
				</li>																																				
			</ul>		
				
		</div>
	</aside>
</section>
<section id="lists">
	<article>
		<h4>From the past week <a href="#">View All</a></h4>
		<ul>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
		</ul>
	</article>
	<article>
		<h4>Alumni <a href="#">View All</a></h4>
		<ul>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
		</ul>
	</article>
	<article>
		<h4>Featured <a href="#">View All</a></h4>
		<ul>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
		</ul>
	</article>
	<article>
		<h4>Under Armour All-America <a href="#">View All</a></h4>
		<ul>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="thumb"><img src="<?php echo $templateDirectory; ?>/assets/images/video-fpo-thumb.jpg" /></div>
					<p>UA Tryout: Bowie, MD Prospect: Chase Ragsdale (/16) / 01:26</p>
				</a>
			</li>
		</ul>
	</article>		
</section>

<?php get_footer(); ?>