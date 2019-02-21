<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main" role="main">
	

		
			<?php
			// Start the loop.

				//define query for find most recent blog post

				$query_args = array(
						'author' =>  get_the_author_meta( 'ID' ),
						'post_type' => 'post',
						'posts_per_page' => 1,
						'orderby' => 'post_date'
				);

		

				$result = new WP_Query($query_args);

					while($result->have_posts() ) : $result->the_post();
						?>
						<div class="post_box">
						<h3>Most recent post:</h3>
						<h3><?php the_title(); ?></h3>
						<div class ="entry-content">
							<?php
							the_content(); ?>
						</div>
							<?php
						endwhile;

		// If no content, include the "No posts found" template.
		
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
