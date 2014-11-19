<?php
/*
Template Name: Go to first child
*/
	$kids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
	if ($kids) {
		$firstborn = $kids[0];
		wp_redirect(get_permalink($firstborn->ID));
	}
?>