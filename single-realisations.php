<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<main>
		<div class="content">



			<div class="content_rea_info">
				<h1><?php the_title(); ?></h1>
				<p> <?php echo (get_field('type_de_realisations')); ?> réalisé pour <?php echo (get_field('mission')); ?></p>
				<h2><?php echo (get_field('nom_missionnaire')); ?></h2>


				<?php /*
				$list_champs = get_fields();
				if (get_fields() !== false) {
					foreach ($list_champs as $name => $value) {
						if ($name === "CMS") {
							if ($value === "oui") {
								echo '<p>Ce site à était conçu avec </p>';
							}
						} elseif ($value === "pluging") {
							echo '<p>Ce pluging à était conçu pour <p>';
						}


						if ($name === "choix_cms") {

							if ($value === "WORDPRESS") {

								echo ('<i class="fa-brands fa-wordpress"></i>');
							} elseif ($value === "PRESTASHOP") {
								//a finir
							}
						}
					}
				} */ ?>
			</div>











			<div class="content_supports">
				<div class="computer">
					<img class="supports computer" src="<?php echo get_template_directory_uri() . ' /assets/images/computer-libre.webp' ?> ">
					<?php
					$list_champs = get_fields();
					if (get_fields() !== false) : ?>
						<?php foreach ($list_champs as $name => $value) : ?>
							<?php if ($name === "ordinateur") : ?>

								<div class="bloc_img_computer">
									<img class="img_computer" src="<?php echo $value; ?> ">
								</div>
					<?php endif;
						endforeach;
					endif;

					?>
				</div>
				<div class="tablet">
					<img class="supports tablet" src="<?php echo get_template_directory_uri() . ' /assets/images/tablet-libre' ?> ">
					<?php
					$list_champs = get_fields();
					if (get_fields() !== false) : ?>
						<?php foreach ($list_champs as $name => $value) : ?>
							<?php if ($name === "tablet") : ?>

								<div class="bloc_img_tablet">
									<img class="img_tablet" src="<?php echo $value; ?> ">
								</div>
					<?php endif;
						endforeach;
					endif;

					?>
				</div>
				<div class="smartphone">
					<img class="supports smartphone" src="<?php echo get_template_directory_uri() . ' /assets/images/smartphone-libre.webp' ?> ">
					<?php
					$list_champs = get_fields();
					if (get_fields() !== false) : ?>
						<?php foreach ($list_champs as $name => $value) : ?>
							<?php if ($name === "smartphone") : ?>

								<div class="bloc_img_smartphone">
									<img class="img_smartphone" src="<?php echo $value; ?> ">
								</div>
					<?php endif;
						endforeach;
					endif;

					?>
				</div>
			</div>

			<div class="info_realisation">
				<h3>Caracteristiques technique</h3>
				<div class="info_realisation_techno">
					<div class="info_realisation_techno_left">
						<?php

						if (get_field('choix_cms')/* !== false*/) {
							foreach ($list_champs as $name => $value) {

								if ($name === "choix_cms") {

									if ($value === "WORDPRESS") {

										echo ('<i class="fa-brands fa-wordpress"></i>');
									} elseif ($value === "PRESTASHOP") {
										//a finir
									}
								}
								if ($name === "version") {
									echo '<p>version:' . esc_html(get_field('version')) . '</p>';
								}
							}
						} ?>
					</div>
					<div class="info_realisation_techno_right">
						<?php

						$technos = get_field('technologies_utilisees');
						if ($technos) : ?>
							<ul class="techno">
								<?php foreach ($technos as $techno) {
									if ($techno === "JS") {
										echo	'<li><i class="fa-brands fa-js"></i></li>';
									}
									if ($techno === "HTML5") {
										echo	'<li><i class="fa-brands fa-html5"></i></li>';
									}
									if ($techno === "CSS3") {
										echo	'<li><i class="fa-brands fa-css3"></i></li>';
									}
									if ($techno === "SASS") {
										echo	'<li><i class="fa-brands fa-sass"></i></li>';
									}
									if ($techno === "PHP") {
										echo	'<li><i class="fa-brands fa-php"></i></li>';
									}
								} ?>
							</ul>
					</div>
				</div>
				<div>
					<div class="bloc_description">
						<div class="description desc_m">
							<h3>Description de la mission</h3>
							<p><?php echo wp_kses_post(get_field('description_mission')); ?></p>
						</div>
						<div class="description desc_r">
							<h3>Description de la Réalisation</h3>
							<p><?php echo wp_kses_post(get_field('description_realisation')); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>


			</div>







		</div>


	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>