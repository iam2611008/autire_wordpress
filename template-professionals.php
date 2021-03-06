<?php
/**
 * Template Name: Professionals Template
 */
?>

<img src="<?= get_template_directory_uri(); ?>/dist/images/vectorpaint.png" class="bg-top">

<div class="template-content">
	<?php while (have_posts()) : the_post(); ?>
		<section class="wp-content">
			<div class="container">
				<div class="content-wrapper">
				  <?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
	<?php get_template_part('templates/professionals', 'slider'); ?>
</div>