<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>


<section id="main" class="main-scroll" style="background-image: url(<?php echo get_theme_mod('back-image') ?>);
background-repeat: no-repeat; background-position: center left;">
	<div class="<?php echo esc_attr( $container ); ?> title-section text-center">
		<?php if( get_theme_mod('page_name') ): ?>
		<h2 class="notfound-title mb-2"> <?php echo get_theme_mod('page_name') ?></h2>
		<?php endif; ?>
		<?php if( get_theme_mod('text-error') ): ?>
		<span class="d-block notfound-span pb-5">
				<?php echo get_theme_mod('text-error') ?>
		</span>
		<?php endif; ?>
		<?php if( get_theme_mod('error-link-name') ): ?>
			<a href="<?php echo get_home_url();?>" class="back-home" > <?php echo get_theme_mod('error-link-name') ?></a>
			<?php endif; ?>
	</div>
</section>



<?php get_footer(); ?>
