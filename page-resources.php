<?php
/**
* Template Name: Resources
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">
			
			<?php if( have_rows('resources_blue_section') ): while( have_rows('resources_blue_section') ): the_row(); ?>
				<?php 
					$headline = get_sub_field('headline'); 
					$content = get_sub_field('content'); 
				?>
				<section>
					<div class="row">
						<div class="col-sm-12">
							<h2><?php echo $headline ?></h2>
							<div class="lead">
								<?php echo $content ?>
							</div>
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

		<div class="container section--white">
			<?php if( have_rows('resources_white_section') ): while( have_rows('resources_white_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
					$photo = get_sub_field('photo');
					$cta_link = get_sub_field('cta_link'); 
					$cta_link_url = $cta_link['url'];
					$cta_link_text = $cta_link['title'];
					$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
				?>

				<section>
					<div class="row">
						<div class="col-lg-6">
							<img src="<?php echo $photo; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $headline; ?>">
						</div>
						<div class="col-lg-6">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-secondary">
									<?php echo esc_html( $cta_link_text ); ?>
								</a>
							<?php endif; ?>	
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

		<div class="container section--blue">
			<?php if( have_rows('resources_light_blue_section') ): while( have_rows('resources_light_blue_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
					$photo = get_sub_field('photo');
					$cta_link = get_sub_field('cta_link'); 
					$cta_link_url = $cta_link['url'];
					$cta_link_text = $cta_link['title'];
					$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
				?>

				<section>
					<div class="row">
						<div class="col-lg-6">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-dark">
									<?php echo esc_html( $cta_link_text ); ?>
								</a>
							<?php endif; ?>	
						</div>
						<div class="col-lg-6">
							<img src="<?php echo $photo; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $headline; ?>">
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>


		<div class="container section--white">
			<?php if( have_rows('resources_white_section_2') ): while( have_rows('resources_white_section_2') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
					$photo = get_sub_field('photo');
					$cta_link = get_sub_field('cta_link'); 
					$cta_link_url = $cta_link['url'];
					$cta_link_text = $cta_link['title'];
					$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
				?>

				<section>
					<div class="row">
						<div class="col-lg-6">
							<img src="<?php echo $photo; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $headline; ?>">
						</div>
						<div class="col-lg-6">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-secondary">
									<?php echo esc_html( $cta_link_text ); ?>
								</a>
							<?php endif; ?>	
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     