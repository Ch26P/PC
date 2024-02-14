<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<main>
		<div class="content_rea">
			<div class="content_rea_info">
				<h1><?php the_title(); ?></h1>
				<p> <?php echo (get_field('type_de_realisations')); ?> réalisé pour <?php echo (get_field('mission')); ?></p>
				<h2><?php echo (get_field('nom_missionnaire')); ?></h2>
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
									<?php
									if (get_field("ordinateur")) {
										if (get_field("lien_site")) {
											echo	'<a  href="'. esc_attr(get_field('lien_site')) .'" title="cliquer pour visiter le site" target="blank"><img class="img_computer" src="' . $value . ' "></a>';
										} else {
											echo '<img class="img_computer" src="' . $value . '">';
										}
									} else {
										echo '<div class="img_computer vide">
										<p>il n y a pas d aperçu disponible</p>
										
										</div>';
									}
									?>
								</div>
					<?php endif;
						endforeach;
					endif;

					?>
				</div>
				<?php if (get_field('responsive') === 'oui') : ?>

					<div class="tablet">
						<img class="supports tablet" src="<?php echo get_template_directory_uri() . ' /assets/images/tablet-libre' ?> ">
						<?php
						$list_champs = get_fields();
						if (get_fields() !== false) : ?>
							<?php foreach ($list_champs as $name => $value) : ?>
								<?php if ($name === "tablet") : ?>
									<div class="bloc_img_tablet">
										<?php
										if (get_field("tablet")) {
											if (get_field("lien_site")) {
												echo	'<a  href="'.esc_attr(get_field('lien_site')).'" title="cliquer pour visiter le site" target="blank"><img class="img_tablet" src="' . $value . ' "></a>';
											} else {
												echo '<img class="img_tablet" src="' . $value . '">';
											}
										} else {
											echo '<div class="img_tablet vide">
											<p>il n y a pas d aperçu disponible</p>
											
											</div>';
										}
										?>
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
										<?php
										if (get_field("smartphone")) {
										if (get_field("lien_site")) {
											echo	'<a  href="'.esc_attr(get_field('lien_site')).'" title="cliquer pour visiter le site" target="blank"><img class="img_smartphone" src="' . $value . ' "></a>';
										} else {
											echo '<img class="img_smartphone" src="' . $value . '">';
										}}else {
											echo '<div class="img_smartphone vide">
											<p>il n y a pas d aperçu disponible</p>
											
											</div>';
										}

										?>
									</div>
						<?php endif;
							endforeach;
						endif;

						?>
					</div>

				<?php endif; ?>

			</div>

			<div class="info_realisation">
				<h3>Caracteristiques technique</h3>
				<div class="info_realisation_techno">
					<div class="info_realisation_techno_left">
						<?php

						if (get_field('choix_cms')) {
							foreach ($list_champs as $name => $value) {

								if ($name === "choix_cms") {

									if ($value === "WORDPRESS") {

										echo ('<i class="fa-brands fa-wordpress" title="WORDPRESS"></i>');
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
										echo	'<li><i class="fa-brands fa-js" title="Java Script"></i></li>';
									}
									if ($techno === "HTML5") {
										echo	'<li><i class="fa-brands fa-html5" title="HTML5"></i></li>';
									}
									if ($techno === "CSS3") {
										echo	'<li><i class="fa-brands fa-css3" title="CSS3"></i></li>';
									}
									if ($techno === "SASS") {
										echo	'<li><i class="fa-brands fa-sass" title="SASS"></i></li>';
									}
									if ($techno === "PHP") {
										echo	'<li><i class="fa-brands fa-php" title="PHP"></i></li>';
									}
								} ?>
							</ul>
							<?php

							if (get_field('responsive') === "oui") {
								echo '<p> Ce site est responsive</p>';
							} ?>
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
							<?php
							if (get_field('lien_git_hub')) {
								echo '<p class="lien_git"><a href="'. esc_attr(get_field('lien_git_hub')).'" title="vers git hub de ce site" target="blank"><i class="fa-brands fa-github"></i></a></p>';
							} ?>
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