<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php

		
			get_template_part( 'template-parts/content', 'single' );


		if (get_field('title') || get_field('author') || get_field('link') || get_field('reflections')) { ?>

			<h4><?php the_field('title') ?> </h4>
			<h4><?php the_field('author') ?> </h4>
			<h4><?php the_field('link') ?> </h4>
			<p><?php the_field('reflections') ?> </p>

		<?php } 

get_footer(); ?>

	</main>