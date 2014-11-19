<?php $templateDirectory = get_bloginfo('template_directory'); ?>

		<section id="bottom" class="full-width">
			<form>	
				<p>See how you stack up.</p>
				<input type="text" placeholder="Enter your batting average." /><input type="submit" value="submit" />
			</form>
			<ul>
				<li id="twitter-btn"><a class="icon" href="http://twitter.com" target="_blank"><span>Twitter</span></a><p class="count">65K</p></li>
				<li id="facebook-btn"><a class="icon" href="http://facebook.com" target="_blank"><span>Facebook</span></a><p class="count">145K</p></li>
				<li id="youtube-btn"><a class="icon" href="http://youtube.com" target="_blank"><span>Youtube</span></a></li>
				<li id="instagram-btn"><a class="icon" href="http://instagram.com" target="_blank"><span>Instagram</span></a></li>
				<li id="google-btn"><a class="icon" href="http://google.com/+" target="_blank"><span>Google+</span></a></li>
				<li id="bbb-btn"><a class="icon" href="#"><span>BBB</span></a></li>
			</ul>
		</section>
		
		<footer>
			<nav>
				<div id="sitemap">
					<div class="col" id="col1">
						<ul>
							<?php wp_nav_menu( array('menu' => 'Footer - Column I', 'orderby' => 'menu_order', 'depth' => '3', 'container' => '', 'items_wrap' => '%3$s')); ?>
						</ul>
					</div>
					<div class="col" id="col2">
						<ul>
							<?php wp_nav_menu( array('menu' => 'Footer - Column II', 'orderby' => 'menu_order', 'depth' => '3', 'container' => '', 'items_wrap' => '%3$s')); ?>
						</ul>
					</div>
					<div class="col" id="col3">
						<ul>
							<?php wp_nav_menu( array('menu' => 'Footer - Column III', 'orderby' => 'menu_order', 'depth' => '3', 'container' => '', 'items_wrap' => '%3$s')); ?>
						</ul>
					</div>
					<div class="col" id="col4">
						<ul>
							<?php wp_nav_menu( array('menu' => 'Footer - Column IV', 'orderby' => 'menu_order', 'depth' => '3', 'container' => '', 'items_wrap' => '%3$s')); ?>
						</ul>
					</div>
					<div class="col" id="col5">
						<ul>
							<?php wp_nav_menu( array('menu' => 'Footer - Column V', 'orderby' => 'menu_order', 'depth' => '3', 'container' => '', 'items_wrap' => '%3$s')); ?>
						</ul>
					</div>
				</div>
				<ul id="more">
					<li class="header">More From Factory Athletics</li>
					<li><a href="#">UA Team One Baseball</a></li>
					<li><a href="#">Factory Foundation</a></li>
					<li><a href="#">Softball Factory</a></li>
					<li><a href="#">Volleyball Factory</a></li>
					<li><a href="#">Football Factory</a></li>
				</ul>
			</nav>
		</footer>
		
	</div><!-- #site-canvas -->
</div><!-- #site-wrapper> -->

<!-- JavaScript at the bottom for fast page loading -->
<script src="<?php  echo $templateDirectory;  ?>/assets/js/vendor/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$templateDirectory = '<?php echo $templateDirectory; ?>';
</script>
<script src="<?php  echo $templateDirectory; ?>/assets/js/plugins-global.js"></script>
<script src="<?php  echo $templateDirectory; ?>/assets/js/global.js"></script>
<script src="<?php  echo $templateDirectory;  ?>/assets/js/vendor/video.js"></script>
<?php if(is_front_page()){ ?>
<script src="<?php  echo $templateDirectory; ?>/assets/js/plugins-front-page.js"></script>
<script src="<?php  echo $templateDirectory; ?>/assets/js/front-page.js"></script>
<?php } else if(is_page('events')){?>
<script src="<?php echo $templateDirectory; ?>/assets/js/page-events.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/events-watson.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/plugins-tour.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/events-tour.js"></script>
<?php } else if(is_page_template( 'single-event-standard.php' ) || is_singular( 'event' )) {?>
<script src="<?php echo $templateDirectory; ?>/assets/js/plugins-single-event.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/single-event.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/plugins-tour.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/events-tour.js"></script>
<?php } else if(is_tree( 13 )) {?>
<script src="<?php echo $templateDirectory; ?>/assets/js/page-ua-baseball.js"></script>
<?php } else if(is_page_template( 'page-video.php' )) {?>
<script src="<?php echo $templateDirectory; ?>/assets/js/plugins-video.js"></script>
<script src="<?php echo $templateDirectory; ?>/assets/js/page-video.js"></script>
<?php } else if(is_page_template( 'page-registration-form.php' )) {?>
<script src="<?php echo $templateDirectory; ?>/assets/js/page-registration-form.js"></script>
<?php } ?>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php  echo $templateDirectory;  ?>/assets/js/vendor/selectivizr-min.js"></script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>