<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
?>
	<main id="front_page">
		<div class="content_front">
			<div class="content_front_title">
				<h1><span class="front_title_0">D</span><span class="front_title_1">E</span><span class="front_title_2">V</span><span class="front_title_3">E</span><span class="front_title_4">L</span><span class="front_title_5">O</span><span class="front_title_6">P</span><span class="front_title_7">P</span><span class="front_title_8">E</span><span class="front_title_9">U</span><span class="front_title_10">R</span><br>
					<span class="front_title_11">F</span><span class="front_title_12">R</span><span class="front_title_13">E</span><span class="front_title_14">E</span><span class="front_title_15">L</span><span class="front_title_16">A</span><span class="front_title_17">N</span><span class="front_title_18">C</span><span class="front_title_19">E</span>
				</h1>
			</div>

			<div class="content_front_img bloc_front">
				<div class="bloc_front_explorer">


	<span class="span_exp_h2">
						<h2><span class="span_exp_h2-1">e</span><span class="span_exp_h2-2">x</span><span class="span_exp_h2-3">p</span><span class="span_exp_h2-4">l</span><span class="span_exp_h2-5">o</span><span class="span_exp_h2-6">r</span><span class="span_exp_h2-7">e</span><span class="span_exp_h2-8">r</span></h2>
					</span>

					<img class="img_front explorer" src="<?php echo get_template_directory_uri().'/assets/images/explorer.webp' ?> ">

					<p class="text_explorer">
						J'aime explorer le codage , étudier et analyser le fonctionnement des langages de programmation et des technologies associées pour comprendre comment les logiciels, applications et sites web sont créés. Cela implique d'examiner le code source, de tester des fonctionnalités et d'identifier des solutions pour résoudre des problèmes techniques. En explorant le codage, cela me permet d' acquérir une meilleure compréhension de l'informatique et de la manière dont les systèmes informatiques interagissent pour produire des résultats spécifiques.
					</p>

				</div>
				<div class="bloc_front_apprendre">
					<span class="span_app_h2">
						<h2><span class="span_app_h2-1">a</span><span class="span_app_h2-2">p</span><span class="span_app_h2-3">p</span><span class="span_app_h2-4">r</span><span class="span_app_h2-5">e</span><span class="span_app_h2-6">n</span><span class="span_app_h2-7">d</span><span class="span_app_h2-8">r</span><span class="span_app_h2-9">e</span></h2>
					</span>

					<img class="img_front apprendre" src="<?php echo get_template_directory_uri().'/assets/images/apprendre.WebP' ?> ">


					<p class="text_apprendre">
						Il est important d'apprendre de nouvelles technologies de codage,  de rester curieux et motivé pour explorer de nouveaux concepts et langages de programmation. Suivre des tutoriels en ligne, des cours en personne ou en ligne, et de s'entraîner en développant des projets personnels pour mettre en pratique ce que j'ai appris. Il est également bénéfique de rejoindre des communautés de développeurs pour échanger des idées et collaborer sur des projets. La pratique régulière et la persévérance sont essentielles pour progresser et maîtriser de nouvelles technologies de codage.
					</p>

				</div>
				<div class="bloc_front_concevoir">

					<span class="span_con_h2">
						<h2><span class="span_con_h2-1">c</span><span class="span_con_h2-2">o</span><span class="span_con_h2-3">n</span><span class="span_con_h2-4">c</span><span class="span_con_h2-5">e</span><span class="span_con_h2-6">v</span><span class="span_con_h2-7">o</span><span class="span_con_h2-8">i</span><span class="span_con_h2-9">r</span></h2>
					</span>


					<img class="img_front concevoir" src="<?php echo get_template_directory_uri().'/assets/images/concevoir.WEBP' ?> ">

					<p class="text_concevoir">
						Pour concevoir un site internet, il est important de d'abord définir clairement son objectif, son public cible et ses fonctionnalités essentielles. Ensuite, il faut concevoir l'architecture du site en créant des wireframes et en travaillant sur le design visuel. Le développement du site se fait en utilisant des langages de programmation comme HTML, CSS et JavaScript. Enfin, il est crucial de tester le site sur différents navigateurs et appareils pour s'assurer qu'il fonctionne correctement.
					</p>


				</div>
			</div>

			<div class="content_front_rea bloc_front">
				<div class="content_front_rea_list">
					<h3 id="activ_rea">Réalisations</h3>

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
							<select name="rea" id="list-rea" class="filtre light_off">
								<option value=""></option>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<option value="<?php echo (get_the_ID()) ?>"><?php echo (the_title()) ?></option>


								<?php endwhile;
								wp_reset_postdata(); // ! important réinisialise les donéé du post apres la boucle
								?>
							</select>
						</form>
					</div>

				</div>
				<div class="content_front_rea_affiche">


					<div class="shape">
						<img class="supports computer" src="<?php echo get_template_directory_uri().'/assets/images/computer-libre.webp' ?> ">
						<div id="img_computer_front">
							<p>choisie une réalisation pour avoir un aperçu</p>

						</div>
					</div>
					<img class="img_front lamp-libre" src="<?php echo get_template_directory_uri().'/assets/images/desk-lamp-libre.webp' ?> ">
				</div>
			</div>

		</div>




	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>