<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<main>



	
	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>