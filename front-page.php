<?php get_header("home"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--white section--first">
			<?php if( have_rows('homepage_hero') ): while( have_rows('homepage_hero') ): the_row(); 

				$homepage_hero_image = get_sub_field('homepage_hero_image');
				$homepage_hero_left_image = get_sub_field('homepage_hero_left_image');
				$homepage_hero_left_headline = get_sub_field('homepage_hero_left_headline'); 
				$homepage_hero_left_text = get_sub_field('homepage_hero_left_text'); 
				$homepage_hero_left_link_text = get_sub_field('homepage_hero_left_link_text'); 

				$homepage_hero_right_image = get_sub_field('homepage_hero_right_image');
				$homepage_hero_right_content = get_sub_field('homepage_hero_right_content');
				$cta_link = get_sub_field('homepage_hero_right_cta_link'); 
				$cta_link_url = $cta_link['url'];
				$cta_link_text = $cta_link['title'];
				$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
			?>

				<section>
					<div class="row">
						<div class="col-lg-6">
							<div class="left-content">
								<img src="<?php bloginfo("template_url"); ?>/assets/img/strollin-logo-color.svg" alt="Strollin for the Colon" class="m-4" />
							</div>
						
						</div>
						<div class="col-lg-6 p-0">
							<div class="right-content" style="background-image: url(<?php echo esc_url( $homepage_hero_image ); ?>)"></div>
						</div>
					</div>
					
				</section>

				<section class="section--half-half-extend">
					<div class="row align-items-center section--light">
						<div class="col-lg-6">
							<div class="d-flex">
								<div class="img-container">
									<img src="<?php echo esc_url( $homepage_hero_left_image); ?>" class="mr-4" alt="<?php echo $homepage_hero_left_headline; ?>" />
								</div>
								<div class="content-container">
									<h3><?php echo $homepage_hero_left_headline; ?></h3>
									<p>
										<?php echo $homepage_hero_left_text; ?> <a href="<?php the_sub_field('homepage_hero_left_link'); ?>"><?php echo $homepage_hero_left_link_text;?></a>
									</p>
								</div>
							</div>
						
							
							
							
						</div>

						<div class="col-lg-6 d-none d-lg-block section--dark">
							<img src="<?php echo $homepage_hero_right_image; ?>" alt="Toni's Race" style="max-width: 200px;" class="mb-4" />
							<div class="lead">
								<?php echo $homepage_hero_right_content; ?>
							</div>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-dark">
									<?php echo esc_html( $cta_link_text ); ?>
								</a>
							<?php endif; ?>	
						</div>
					</div>
	
					
				</section>

			<?php endwhile; endif; ?>

			<?php if( have_rows('homepage_photo_banner_section') ): while( have_rows('homepage_photo_banner_section') ): the_row(); ?>
				<?php $homepage_photo_banner_image = get_sub_field('homepage_photo_banner_image'); ?>
				
				<section class="section--photo-banner-large" style="background-image: url(<?php echo esc_url( $homepage_photo_banner_image ); ?>)"></section>

			<?php endwhile; endif; ?>



			<?php if( have_rows('homepage_blue_section') ): while( have_rows('homepage_blue_section') ): the_row(); 

				$headline_1 = get_sub_field('headline_1');
				$headline_2 = get_sub_field('headline_2');
				$headline_3 = get_sub_field('headline_3');
				$content_1 = get_sub_field('content_1');
				$content_2 = get_sub_field('content_2');
				$content_3 = get_sub_field('content_3');		
			?>

				<section class="section--homepage-three-col section--dark">
				
					<div class="row">
						<div class="col-sm-12 col-lg-4">
							<h3><?php echo $headline_1; ?></h3>
							<?php echo $content_1; ?>
						</div>
						<div class="col-sm-12 col-lg-4">
							<h3><?php echo $headline_2; ?></h3>
							<?php echo $content_2; ?>
						</div>
						<div class="col-sm-12 col-lg-4">
							<h3><?php echo $headline_3; ?></h3>
							<?php echo $content_3; ?>
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>

			

			<?php if( have_rows('homepage_white_section') ): while( have_rows('homepage_white_section') ): the_row(); ?>
				<?php 
					$photo_1 = get_sub_field('photo_1');
					$photo_2 = get_sub_field('photo_2');
					$headline_1 = get_sub_field('headline_1');
					$headline_2 = get_sub_field('headline_2');
					$content_1 = get_sub_field('content_1');
					$content_2 = get_sub_field('content_2');
				?>

				<section class="section--half-half section--light section--last">
					<div class="row">
						<div class="col-lg-6">
							<div class="d-flex">
								<div class="img-container">
									<img src="<?php echo esc_url( $photo_1); ?>" class="mr-4" alt="<?php echo $headline_1; ?>" />
								</div>
								
								<div class="content-container">
									<h3><?php echo $headline_1; ?></h3>
									<?php echo $content_1; ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="d-flex">
								<div class="img-container">
								<img src="<?php echo esc_url( $photo_2); ?>" class="mr-4" alt="<?php echo $headline_2; ?>" />
								</div>
								<div class="content-container">
										<h3><?php echo $headline_2; ?></h3>
									<blockquote>
										<?php echo $content_2; ?>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>

			
		</div>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
     