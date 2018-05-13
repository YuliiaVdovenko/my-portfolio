<?php $container = get_theme_mod('understrap_container_type'); ?>

<section id="portfolio-section" class="back-section">
	<div class="<?php echo esc_attr($container); ?> pt-5 pb-5 text-center">
		
		<?php if( get_sub_field('portfolio_section_title') ): ?>
			<h2 class="section-title mb-5">
				<?= get_sub_field('portfolio_section_title') ?>
			</h2>
		<?php endif; ?>

		<?php
		$paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
		$args = array(
			'post_type' => 'projects',
			'paged' => $paged
		);
		$the_query = new WP_Query( $args );
		global $wp_query;
		$temp_query = $wp_query;
		$wp_query   = null;
		$wp_query   = $the_query;
		if ($the_query->have_posts()) { ?>
		<ul class="row flex-wrap">
			<?php
			while ($the_query->have_posts()) {
				$the_query->the_post();
				?>
				<li class="d-flex flex-wrap pb-3 pt-3 mb-5 col-12 col-md-6 li-border">
					<div class="col-12 pb-3">
						<a href="<?php the_field ('visit_projects_link'); ?>" target="_blank">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>
					<div class="col-12 text-left">
						<h2 class="mb-2 pb-1 pr-2 "> 
							<a href="<?php the_field ('visit_projects_link'); ?>" target="_blank" class="project-name">
								<?php the_title(); ?> 
							</a>
						</h2>

						<?php if( get_field('about_project') ): ?>
							<p class="pb-3 project-description"> 
								<?php the_field ('about_project'); ?> 
							</p>
						<?php endif; ?>
						<div class="d-flex justify-content-end">
							<?php if( get_field('visit_git_link') ): ?>
								<a href="<?php the_field ('visit_git_link'); ?>" target="_blank" class="git-button">
									<i class="fa fa-github" aria-hidden="true"></i>
								</a>
							<?php endif; ?>
							<?php if( get_field('button_name') ): ?>
								<a href="<?php the_field ('visit_projects_link'); ?>" target="_blank" class="visit-button">
									<?php the_field ('button_name'); ?>
									<i class="fa fa-external-link" aria-hidden="true"></i>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
			<div class="p-0 pagination justify-content-center">
				<?php understrap_pagination () ; ?>
			</div>
			<?php wp_reset_postdata();
		}
		$wp_query = null;
		$wp_query = $temp_query;
		?>
	</div>
</section>