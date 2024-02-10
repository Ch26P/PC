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
			<div class="info_rea">
				<?php
				$list_champs = get_fields();
				if (get_fields() !== false) : ?>
					<?php foreach ($list_champs as $name => $value) : ?>
						<?php if ($name === "CMS") : ?>
							<?php if ($value === "oui") : ?>
								<p>ok</p>




							<?php endif;
						endif;

						if ($name === "CMS") : ?>
							<?php if ($value === "oui") : ?>
								<p>ok</p>




				<?php endif;
						endif;



					endforeach;
				endif; ?>
				<i class="fa-brands fa-css3" style="color: #74C0FC;"></i>
			</div>






		</div>


	</main>
<?php endwhile; // End of the loop.
?>

<?php get_footer();
?>