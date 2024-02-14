<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<main id="front_page">
		<div class="content_front">
			<div class="content_front_title">
				<h1><span>D</span><span>E</span><span>V</span><span>E</span><span>L</span><span>O</span><span>P</span><span></span><span>P</span><span>E</span><span>U</span><span>R</span><br>
					<span>F</span><span>R</span><span>E</span><span>E</span><span>L</span><span>A</span><span>N</span><span></span><span>C</span><span>E</span>
				</h1>
			</div>

			<div class="content_front_img bloc_front">
				<img class="img_apprendre" src="<?php echo get_template_directory_uri() . ' /assets/images/apprendre.webp' ?> ">
			</div>

			<div class="content_front_rea bloc_front">
				<div class="content_front_rea_list"></div>
				<div class="content_front_rea_affiche"></div>
			</div>

		</div>




	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>