<?php /* Template Name: Blog Template */ ?>

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
				<option value="javascript">javascript</option>
				<option value="css">css</option>
			</select>
			<button>Find</button>
			
		</form>

		<h3 id="result_header">Blogs related to this topic:</h3>

<?php 

get_header();


		if (isset($_GET)) {

		

			$query_args = array(
						'author' =>  get_the_author_meta( 'ID' ),
						'category_name' => $_GET['one'],
						'post_type' => 'post',
						'posts_per_page' => 3,
						'orderby' => 'rand'
			);

		}

		$result = new WP_Query($query_args);

		while($result->have_posts() ) : $result->the_post();
			?>
			<ul>

				<li>
					<div id="most_recent_post">								
					<h3><?php the_title(); ?></h3>
					<div class ="entry-content"> <?php the_content(); ?> </div>
					</div>
				</li>
			</ul>
				<?php
			endwhile;

		


?>

<?php get_footer(); ?> 