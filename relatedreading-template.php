<?php /* Template Name: Related Reading Template */ ?>
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

			<form id="category_search" method="get">
				<select name="one" >
					<option value="" >Select a category</option> 
					<option value="javascript">javascript</option>
					<option value="css">css</option>
				</select>
				<button>Find</button>
			</form>

			<h3 id="result_header">Reading related to <?php echo $_GET['one'] ?> </h3>
		
			<?php
			// Start the loop.

				//define query to find related reading by category

			if (isset($_GET)) {
				
				$query_args = array(
						'author' =>  get_the_author_meta( 'ID' ),
						'category_name' => $_GET['one'],
						'post_type' => 'relatedreading',
						'posts_per_page' => 2,
						'orderby' => 'post_date'
				);

			}

		$result = new WP_Query($query_args);

			while($result->have_posts() ) : $result->the_post();
				?>
				<ul>

					<li>
						<div class="post_box">								
						<h3> <?php the_title(); ?> </h3>
						<h5> <?php the_field('author'); ?> </h5>
						<div class ="entry-content"> <a href=<?php the_field('link');?>> <?php the_field('link');?> </a> </div>
						</div>
					</li>
				</ul>
					<?php
				endwhile;

			// else - if no search yet submitted - what is show on page?

		// If no content, include the "No posts found" template.
		
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>