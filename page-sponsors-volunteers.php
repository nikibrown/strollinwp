<?php
/**
* Template Name: Sponsors Volunteers
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">

			<?php if( have_rows('sponsors_dark_blue_section') ): while( have_rows('sponsors_dark_blue_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline'); 
					$content = get_sub_field('content');
				?>
				
				<section>
					<div class="row">
						<div class="col-sm-12">
							<h2><?php echo $headline; ?></h2>
							<div class="lead">
								<?php echo $content; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>
		<div class="container section--blue">
			
			<?php if( have_rows('sponsors_light_blue_section') ): while( have_rows('sponsors_light_blue_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
					$cta_link = get_sub_field('sponsors_link_button');
					$cta_link_url = $cta_link['url'];
					$cta_link_text = $cta_link['title'];
					$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
				?>


				<section>			
					<div class="row">
						<div class="col-lg-12">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-dark"><?php echo esc_html( $cta_link_text ); ?></a>
							<?php endif; ?>	
						</div>
					</div>
				</section>
			</div>
		
			<div class="container section--white">

				<section>
					<div class="row">
						<?php if( have_rows('sponsors') ): while( have_rows('sponsors') ): the_row(); ?>
							<?php 
								$sponsor_logo = get_sub_field('sponsor_logo');
								$sponsor_link = get_sub_field('sponsor_link');
							?>

							<div class="col-lg-3">
								<?php if( $sponsor_link ): ?><a href="<?php echo $sponsor_link; ?>" target="_blank"><?php endif; ?>	
									<img src="<?php echo $sponsor_logo; ?>" class="img-fluid mx-auto d-block">
								<?php if( $sponsor_link ): ?></a><?php endif; ?>	
							</div>
						<?php endwhile; endif; ?>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

		<div class="container section--blue">

			<?php if( have_rows('volunteer_white_section') ): while( have_rows('volunteer_white_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
					$photo = get_sub_field('photo');
					$cta_link = get_sub_field('cta_button'); 
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
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-dark">
									<?php echo esc_html( $cta_link_text ); ?>
								</a>
							<?php endif; ?>	
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

		<div class="container section--white ">

			<?php if( have_rows('sponsor_volunteer_light_blue_section') ): while( have_rows('sponsor_volunteer_light_blue_section') ): the_row(); ?>

				<?php 
					$photo_1 = get_sub_field('photo_1');
					$photo_2 = get_sub_field('photo_2');
					$headline_1 = get_sub_field('headline_1');
					$content_1 = get_sub_field('content_1');
					
					$cta_button_1 = get_sub_field('cta_button_1'); 
					$cta_button_1_url = $cta_button_1['url'];
					$cta_button_1_text = $cta_button_1['title'];
					$cta_button_1_target = $cta_button_1['target'] ? $cta_button_1['target'] : '_self';
					
				?>

				<section>
					<div class="row">
						<div class="col-lg-4">
							<img src="<?php echo $photo_1 ?>" class="img-fluid mx-auto d-block">
						</div>
						<div class="col-lg-4">
							<h3><?php echo $headline_1; ?></h3>
							<?php echo $content_1; ?>
							<a href="<?php echo esc_url( $cta_button_1_url ); ?>" target="<?php echo esc_attr( $cta_button_1_target ); ?>" class="btn btn-secondary">
								<?php echo esc_html( $cta_button_1_text ); ?>
							</a>
						</div>
						<div class="col-lg-4">
							<img src="<?php echo $photo_2 ?>" class="img-fluid mx-auto d-block">
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     