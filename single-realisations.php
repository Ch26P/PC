<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<main>
		<div class="content">
			<h1><?php the_title(); ?></h1>
			<div class="content_supports">
				<img class="supports computer" src="<?php echo get_template_directory_uri() . ' /assets/images/computer-libre.webp' ?> ">
				<img class="supports tablet" src="<?php echo get_template_directory_uri() . ' /assets/images/tablet-libre' ?> ">
				<img class="supports smartphone" src="<?php echo get_template_directory_uri() . ' /assets/images/smartphone-libre.webp' ?> ">

			</div>
		</div>


	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>