<?php $container = get_theme_mod('understrap_container_type'); ?>

<section id="skills-section">
	<div class="<?php echo esc_attr($container); ?> pt-5 text-center">
		
		<?php if( get_sub_field('skills_title') ): ?>
			<h2 class="section-title">
				<?= get_sub_field('skills_title') ?>
			</h2>
		<?php endif; ?>

		<?php if (have_rows ('skills_list')): ?>
			<ul class="slick-list pt-5 pb-5 mb-0">
				<?php while (have_rows ('skills_list')) : the_row(); ?>
					<li class="slick-center">
						<img src="<?= get_sub_field('skills_image'); ?>" alt="skills-logo" class="skills-img-slick m-auto pb-2">
						<h3><?= get_sub_field('skills_name'); ?></h3>
					</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>

		<?php if( get_sub_field('text_for_button_see_all') ): ?>
			<span class="d-inline-block see"> 
				<?= get_sub_field('text_for_button_see_all'); ?> 
				<i class="fa fa-angle-double-down" aria-hidden="true"></i> 
			</span>
		<?php endif; ?>

		<?php if (have_rows ('skills_list')): ?>
			<ul class="pt-5 mb-3 div-on-click">
				<?php while (have_rows ('skills_list')) : the_row(); ?>
					<li class="col-6 col-sm-4 col-md-3 col-lg-2 pb-5">
						<img src="<?= get_sub_field('skills_image'); ?>" alt="skills-logo" class="skills-img-click pb-2">
						<h3><?= get_sub_field('skills_name'); ?></h3>
					</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>

	</div>
</section>