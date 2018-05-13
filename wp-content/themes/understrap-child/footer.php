<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<footer id="contact-section" class="footer-section" style="background-image: url(<?php echo get_theme_mod('back-footer-image') ?>); background-repeat: no-repeat; background-size: cover">
	<div class="<?php echo esc_attr($container); ?> d-flex flex-wrap pb-5 pt-5 ">
		<div class="col-12 col-md-6 col-lg-4 pb-3 pb-md-5">

			<?php if( get_theme_mod('my-photo') ): ?>
			<div class="relative">
				<img src="<?php echo get_theme_mod ('my-photo'); ?>" alt="my-photo" class="my-photo">
				<h2 class="footer-title">
					<?php echo get_theme_mod('section-name'); ?>
				</h2>
			</div>
			<?php endif; ?>

				<ul class="d-flex pb-3 pt-5">

					<?php if( get_theme_mod('git') ): ?>
					<li class="pr-3">
						<a href="<?php echo get_theme_mod('git'); ?>" target="_blank">
							<i class="fa fa-github footer-i" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_theme_mod('fb-link') ): ?>
					<li class="pr-3">
						<a href="<?php echo get_theme_mod('fb-link'); ?>" target="_blank">
							<i class="fa fa-facebook-square footer-i" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_theme_mod('insta-link') ): ?>
					<li class="pr-3">
						<a href="<?php echo get_theme_mod('insta-link'); ?>" target="_blank">
							<i class="fa fa-linkedin-square footer-i" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_theme_mod('email_address') ): ?>
					<li class="pr-3">
						<a href="mailto:<?php echo get_theme_mod('email_address'); ?>">
							<i class="fa fa-envelope footer-i"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_theme_mod('user_name') ): ?>
					<li class="pb-3">
						<a href="skype:<?php echo get_theme_mod('user_name'); ?>?chat">
							<i class="fa fa-skype footer-i"></i>
						</a>
					</li>
					<?php endif; ?>
				</ul>


				<ul>
					<?php if( get_theme_mod('phone_number') ): ?>
					<li class="pb-3">
						<a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="footer-link align-items-center">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<?php echo get_theme_mod('phone_number'); ?>
						</a>
					</li>
					<?php endif; ?>

					<?php if( get_theme_mod('phone_number2') ): ?>
					<li class="pb-3">
						<a href="viber://chat?number=<?php echo get_theme_mod('phone_number2'); ?>" class="footer-link">
							<i class="fa fa-whatsapp"></i>
							<?php echo get_theme_mod('phone_number2'); ?>
						</a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
			
			<div class="col-12 col-md-6 col-lg-8">
				<?php if( get_theme_mod('form-name') ): ?>
				<h3 class="send-title mb-4"> 
					<?php echo get_theme_mod ('form-name'); ?>
				</h3>
				<?php endif; ?>
				<?php echo do_shortcode( '[contact-form-7 id="57" title="Contact form 1"]' ); ?>
			</div>
		</div>

		<div class="footer-copyright">
			<?php if( get_theme_mod('copyright-text') ): ?>
			<div class="<?php echo esc_attr($container); ?> pt-3 pb-3">
				<span> <?php echo get_theme_mod ('copyright-text'); ?></span>
				<span> &copy; </span>
				<time datetime="<?php echo date('Y');?>"> <?php echo date('Y');?> </time>
			</div>
			<?php endif; ?>
		</div>
</footer>

<a id="arrow-top" href="#top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
<?php wp_footer(); ?>

</body>

</html>

