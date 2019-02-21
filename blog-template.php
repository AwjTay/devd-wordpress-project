<?php /* Template Name: Blog Template */ ?>

<form action="post">
	<select name="one" > 
		<option value="javascript">javascript</option>
		<option value="css">css</option>
	</select>
	<button>Find</button>
	
</form>

<?php echo "hello"; 

get_header();


		if (isset($_POST['one'])) {

			//$cat_id = get_cat_ID($_POST);

			$query_args = array(
						'author' =>  get_the_author_meta( 'ID' ),
						'category_name' => $_POST[]
						'post_type' => 'post',
						'orderby' => 'rand'
			);

		}

		$result = new WP_Query($query_args);

			while($result->have_posts() ) : $result->the_post();
				?>
				<h3><?php the_title(); ?></h3>
				<div class ="entry-content">
					<?php
					the_content(); ?>
					<?php
				endwhile;


?> 