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
				<div class="bloc_front_explorer">
					<h2><span>expolrer</span></h2>
					<img class="img_front explorer" src="<?php echo get_template_directory_uri() . ' /assets/images/explorer.webp' ?> ">
				</div>
				<div class="bloc_front_apprendre">
					<h2><span>apprendre</span></h2>
					<img class="img_front apprendre" src="<?php echo get_template_directory_uri() . ' /assets/images/apprendre.webp' ?> ">
				</div>
				<div class="bloc_front_concevoir">
					<h2><span>concevoir</span></h2>
					<img class="img_front concevoir" src="<?php echo get_template_directory_uri() . ' /assets/images/concevoir.webp' ?> ">
				</div>
			</div>

			<div class="content_front_rea bloc_front">
				<div class="content_front_rea_list">
					<h3>Réalisations</h3>

					<div class="select_rea">
						<?php
						$query = new WP_Query(
							[
								'post_status' => 'publish', //selement les posts publié
								'post_type' => 'realisations', //type de contenue a recuperer
								//'posts_per_page' => 4, //nbrs de post dans la page(pagination)
								//'orderby' => 'rand', // post organiser de maniere aleatoire

							]
						); ?>

						<form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post" class="filtre_rea">
							<input type="hidden" name="nonce" value="<?php echo wp_create_nonce('front_filtre_rea'); ?>">
							<input type="hidden" name="action" value="front_filtre_rea">
							<select name=ordre_tri id="tri" class="filtre">
								<option value=""></option>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<option value="<?php echo (the_title()) ?>"><?php echo (the_title()) ?></option>


								<?php endwhile;
								wp_reset_postdata(); // ! important réinisialise les donéé du post apres la boucle
								?>
							</select>
						</form>
					</div>

				</div>
				<div class="content_front_rea_affiche">


					<div class="shape">
						<img class="supports computer" src="<?php echo get_template_directory_uri() . ' /assets/images/computer-libre.webp' ?> ">
						<div class="img_computer_front">
										<p>choisie une réalisation pour avoir un aperçu</p>
										
										</div>
					</div>
					<img class="img_front lamp-libre" src="<?php echo get_template_directory_uri() . ' /assets/images/desk-lamp-libre.webp' ?> ">
				</div>
			</div>

		</div>




	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>