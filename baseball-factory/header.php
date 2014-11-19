<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php $templateDirectory = get_bloginfo('template_directory'); ?>

<head>

<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php wp_title(''); ?></title>

<meta http-equiv="cleartype" content="on">

<link rel="shortcut icon" href="<?php echo $templateDirectory; ?>/assets/images/favicon.png">

<!-- Responsive and mobile friendly stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->

<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/global.css" type="text/css" media="screen" />

<?php if(is_front_page()){ ?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/front-page.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-events.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-events.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'single-event-standard.php' ) || is_singular('event')) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/single-event.css" type="text/css" media="screen" />
<?php } else if(is_tree( 13 )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-ua-baseball.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-about.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-about.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-all-american.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-all-american.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-alumni.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-alumni.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-contact.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-contact.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-drafted.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-drafted.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-little-league.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-little-league.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-login.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-login.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-mlb.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-mlb.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-national-team.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-national-team.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-preseason-rookie.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-preseason-rookie.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-preseason.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-preseason.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-registration-confirmation.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-registration-confirmation.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-registration-form.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-registration-form.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-sample-player.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-sample-player.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-shop-checkout.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-shop-checkout.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-shop-confirmation.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-shop-confirmation.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-shop.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-shop.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-top-100.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-top-100.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-training.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-training.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-video.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-video.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'single-video.php' ) || is_single('video')) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/single-video.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-fdi.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-fdi.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-staff.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-staff.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-college.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-college.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-watn.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-watn.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-little-league-events.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-little-league-events.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-news.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-news.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-youth.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-youth.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-testimonials.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-testimonials.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-player-dev.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-player-dev.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-rookie.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-rookie.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-recruiting.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-recruiting.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-history.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-history.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-shop-easton.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-shop-easton.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-shop-sklz.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-shop-sklz.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-ftr.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-ftr.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-results.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-results.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-coaches.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-coaches.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-ua.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-ua.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-fans.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-fans.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'page-hs.php' )) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/page-hs.css" type="text/css" media="screen" />
<?php } else if(is_page_template( 'single-news.php' ) || is_single('news')) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/single-news.css" type="text/css" media="screen" />
<?php } else if(is_search()) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/search.css" type="text/css" media="screen" />
<?php } else if(is_404()) {?>
<link rel="stylesheet" href="<?php echo $templateDirectory; ?>/assets/css/404.css" type="text/css" media="screen" />
<?php } ?>

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
<script src="<?php echo $templateDirectory; ?>/assets/js/vendor/modernizr-2.5.3-min.js"></script>

<script src="//use.typekit.net/rzw1oov.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
	
<?php wp_head(); ?>

</head>
	
<body <?php body_class(); ?>>

<body class="home">

<div id="site-wrapper">
	<div id="site-canvas">

		<header>
			<div class="logo">
				<a href="<?php echo get_option('home'); ?>/" title="Return Home"><span>Baseball Factory</span></a>
			</div>
			<nav id="utility-menu">
				<a href="#" id="phone-number">1-800-641-4487</a>
				<div id="login-btn" class="slanted">
					<a href="#"><span>Login<i class="icon"></i></span></a>
					<svg class="animated" id="login-background" x="0px" y="0px" viewBox="-123 -16.5 420 85" enable-background="new -123 -16.5 420 85">
						<path d="M297-16.5v85H-78.3l-44.4-85H297z" data-path-hover="M297-16.5v85h-406.3l-12.7-85H297z"/>
					</svg>
				</div>
				<div id="search-btn">
					<a href="#"><i class="icon"></i></a>
				</div>
			</nav>
		</header>

		<a class="toggle-nav" id="#">
			<i class="icon menu"></i>
			<i class="icon close"></i>
			<span id="menu">Menu</span>
			<span id="close">Close</span>
		</a>

		<nav id="site-menu">
			<ul id="primary">
				<?php wp_nav_menu( array('menu' => 'Primary', 'orderby' => 'menu_order', 'depth' => '3', 'container' => '', 'items_wrap' => '%3$s' )); ?>
			</ul>
			<a href="#" id="back-btn"><i class="icon"></i></a>
			<div id="sub-fill"></div>
			<div id="sub-sub-fill"></div>
		</nav>