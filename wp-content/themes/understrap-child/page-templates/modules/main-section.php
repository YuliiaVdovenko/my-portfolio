<?php $container = get_theme_mod('understrap_container_type'); ?>

<section id="main" class="main-scroll" style="background-image: url(<?php echo get_theme_mod('back-image') ?>);
background-repeat: no-repeat; background-position: center left;">

	<div class="<?php echo esc_attr($container); ?>">

		<?php if( get_sub_field('section_title') ): ?>
			<div class="title-section text-center">
				<h1 class="section-main-title">
					<span class="d-block"> <?= get_sub_field('section_title') ?> </span>
					<?= get_sub_field('section_subtitle') ?>
					<span class="d-block"> <?= get_sub_field('section_subtitle_after') ?> </span>
				</h1>
			</div>
		<?php endif; ?>

		<?php if( get_sub_field('arrow_down') ): ?>
			<div class="btn text-center m-auto look-portfolio">
				<span class="d-block">
					<?= get_sub_field('arrow_down') ?> 
				</span>
				<i class="fa fa-angle-down go-anchor" aria-hidden="true"></i>
			</div>
		<?php endif; ?>
		
	</div>
</section>
