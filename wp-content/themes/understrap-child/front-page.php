<?php
/**
 * The template for displaying front-page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>
	<!-- CONTENT -->
<?php
while (have_rows('main-page')) :the_row();
	switch (get_row_layout()) {
		case 'section-one' :
			get_template_part('page-templates/modules/main-section');
			break;
		case 'second-section':
			get_template_part('page-templates/modules/portfolio-section');
			break;
		case 'skills_section':
			get_template_part('page-templates/modules/skills-section');
			break;
		default:
			break;
	}
endwhile; ?>

<?php get_footer(); ?>