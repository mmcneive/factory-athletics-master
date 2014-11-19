<?php 
	/*
	Template Name: UA Baseball
	*/
	get_header();
	$templateDirectory = get_bloginfo('template_directory'); 
?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
<section id="hero" style="background-image: url(<?php echo $url ?>);">
	<div class="intro">
		<?php the_field('page_intro'); ?>
	</div>
	<img src="<?php echo $templateDirectory; ?>/assets/images/logo-ua-mark.png" />
</section>

<section id="ua-baseball">
	<article id="mosaic">
		<div class="col left" id="training">
			<a href="<?php echo get_permalink(65); ?>">
				<?php the_field('page_excerpt', 65); ?>
			</a>
		</div>
		<div class="col right" id="national">
			<a href="<?php echo get_permalink(63); ?>">
				<?php the_field('page_excerpt', 63); ?>
			</a>
		</div>
		<div class="double" id="allamerica">
			<img src="<?php  echo $templateDirectory;  ?>/assets/images/logo-ua-allamerica.png" />
			<a href="<?php echo get_permalink(67); ?>">
				<?php the_field('page_excerpt', 67); ?>
			</a>
		</div>
		<div class="col left" id="rookies">
			<a href="<?php echo get_permalink(71); ?>">
				<?php the_field('page_excerpt', 71); ?>
			</a>
		</div>
		<div class="col right" id="tourney">
			<a href="<?php echo get_permalink(69); ?>">
				<?php the_field('page_excerpt', 69); ?>
			</a>
		</div>
	</article>
	
	<article id="info">
		<div class="col left border">
			<div id="photo">
				<img src="<?php echo $templateDirectory; ?>/assets/images/profile-nick-jonas.jpg" />
			</div>
			<blockquote>“Baseball Factory Gives Me the Skills I Need to Compete at an Elite Level”</blockquote>
			<cite><strong>Nick Jones '16</strong> UA Baseball Factory All-American</cite>
		</div>
		<div class="col">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</article>
	<div class="alt">
		<?php include('includes/register.php'); ?>
	</div>
</section>

<?php get_footer(); ?>