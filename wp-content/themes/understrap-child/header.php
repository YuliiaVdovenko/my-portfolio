<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- arrow -->
<a class="top-scroll" name="top"></a>

<!-- Mobile header -->
<header class="mobile-header">
	<div class="<?php echo esc_attr($container); ?>">
			<nav class="navbar navbar-expand-md p-0 justify-content-between">
				<div class="d-flex align-items-center">
					<?php if( get_theme_mod('name') ): ?>
					<i class="fa fa-cubes fa-2x pr-2 pt-2 brand-name-before" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<h1 class="navbar-brand mb-0">
								<a href="#main" class="navbar-brand-name" data-target="anchor">
									<?php echo get_theme_mod('name'); ?>
									<span class="nav-position d-block">
										<?php echo get_theme_mod('position'); ?>
									</span>
								</a>
							</h1>
						</div>
						<?php endif; ?>
				</div>
				<button class="navbar-toggler nav-link-button" type="button" data-toggle="collapse"
						data-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav d-flex justify-content-end w-100 align-items-center">

						<?php if( get_theme_mod('menu-link-name') ): ?>
						<li class="nav-item active pt-2 pr-3 pl-3">
							<a class="header-nav-link" href="#skills-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name'); ?>
							</a>
						</li>
					<?php endif;?>

					<?php if( get_theme_mod('menu-link-name2') ): ?>
						<li class="nav-item pr-3 pl-3 pt-2">
							<a class="header-nav-link" href="#portfolio-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name2'); ?>
							</a>
						</li>
					<?php endif; ?>

					<?php if( get_theme_mod('menu-link-name-3') ): ?>
						<li class="nav-item pr-3 pl-3 pt-2 pb-2">
							<a class="header-nav-link" href="#contact-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name-3'); ?>
							</a>
						</li>
					<?php endif; ?>

					</ul>
				</div>
			</nav>
		</div>
</header>
<header class="fixed-header">
	<div class="<?php echo esc_attr($container); ?>">
			<nav class="navbar navbar-expand-md p-0 justify-content-between">
				
				<?php if( get_theme_mod('name') ): ?>
				<div class="d-flex align-items-center">
					<i class="fa fa-cubes fa-2x pr-2 pt-2 brand-name-before" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<h1 class="navbar-brand mb-0">
								<a href="#main" class="navbar-brand-name" data-target="anchor">
									<?php echo get_theme_mod('name'); ?>
									<span class="nav-position d-block">
										<?php echo get_theme_mod('position'); ?>
									</span>
								</a>
							</h1>
						</div>
				</div>
				<?php endif;?>

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav d-flex justify-content-end w-100 align-items-center">
						
						<?php if( get_theme_mod('menu-link-name') ): ?>
						<li class="nav-item active pr-3 pl-3">
							<a class="header-nav-link" href="#skills-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name'); ?>
							</a>
						</li>
						<?php endif;?>

						<?php if( get_theme_mod('menu-link-name2') ): ?>
						<li class="nav-item pl-3">
							<a class="header-nav-link" href="#portfolio-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name2'); ?>
							</a>
						</li>
						<?php endif;?>

						<?php if( get_theme_mod('menu-link-name-3') ): ?>
						<li class="nav-item pr-3 pl-3">
							<a class="header-nav-link" href="#contact-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name-3'); ?>
							</a>
						</li>
					<?php endif; ?>

					</ul>
				</div>
			</nav>
		</div>
</header>
<header class="md-header" id="header-top-navbar">
	<div class="<?php echo esc_attr($container); ?>">
			<nav class="navbar navbar-expand-md p-0 justify-content-between">

				<?php if( get_theme_mod('name') ): ?>
				<div class="d-flex align-items-center">
					<i class="fa fa-cubes fa-2x pr-2 pt-2 brand-name-before" aria-hidden="true"></i>
						<div class="d-flex flex-column">
							<h1 class="navbar-brand mb-0">
								<a href="#main" class="navbar-brand-name" data-target="anchor">
									<?php echo get_theme_mod('name'); ?>
									<span class="nav-position d-block">
										<?php echo get_theme_mod('position'); ?>
									</span>
								</a>
							</h1>
						</div>
				</div>
				<?php endif; ?>

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav d-flex justify-content-end w-100 align-items-center">
						
						<?php if( get_theme_mod('menu-link-name') ): ?>
						<li class="nav-item active pr-3 pl-3">
							<a class="header-nav-link" href="#skills-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name'); ?>
							</a>
						</li>
						<?php endif;?>

						<?php if( get_theme_mod('menu-link-name2') ): ?>
						<li class="nav-item pl-3">
							<a class="header-nav-link" href="#portfolio-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name2'); ?>
							</a>
						</li>
						<?php endif; ?>

						<?php if( get_theme_mod('menu-link-name-3') ): ?>
						<li class="nav-item pr-3 pl-3">
							<a class="header-nav-link" href="#contact-section" data-target="anchor">
								<?php echo get_theme_mod('menu-link-name-3'); ?>
							</a>
						</li>
					<?php endif; ?>

					</ul>
				</div>
			</nav>
		</div>
</header>