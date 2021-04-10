<?php
/**
* Template Name: Sponsors Volunteers
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>

		<?php if( have_rows('sponsors_dark_blue_section') ): while( have_rows('sponsors_dark_blue_section') ): the_row(); ?>

			<?php 
				$headline = get_sub_field('headline'); 
				$content = get_sub_field('content');
			?>
			
			<section class="section--dark-blue">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2><?php echo $headline; ?></h2>
							<div class="lead">
								<?php echo $content; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>

		<?php if( have_rows('sponsors_light_blue_section') ): while( have_rows('sponsors_light_blue_section') ): the_row(); ?>

			<?php 
				$headline = get_sub_field('headline');
				$content = get_sub_field('content');
				$cta_link = get_sub_field('sponsors_link_button');
				$cta_link_url = $cta_link['url'];
				$cta_link_text = $cta_link['title'];
				$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
			?>


			<section class="section--blue">			
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-dark"><?php echo esc_html( $cta_link_text ); ?></a>
							<?php endif; ?>	
						</div>
					</div>
				</div>
			</section>

			<section class="section--blue add-borders-white">
				<div class="container">
					<div class="row">
						<?php if( have_rows('sponsors') ): while( have_rows('sponsors') ): the_row(); ?>
							<?php 
								$sponsor_logo = get_sub_field('sponsor_logo');
								$sponsor_link = get_sub_field('sponsor_link');
							?>

							<div class="col-lg-3">
								<a href="<?php echo $sponsor_link; ?>" target="_blank">
									<img src="<?php echo $sponsor_logo; ?>" class="img-fluid mx-auto d-block">
								</a>
							</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>


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

			<section class="section--white">
                <div class="container">
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
                </div>
            </section>
		<?php endwhile; endif; ?>

		<?php if( have_rows('sponsor_volunteer_light_blue_section') ): while( have_rows('sponsor_volunteer_light_blue_section') ): the_row(); ?>

			<?php 
				$photo = get_sub_field('photo');
				$headline_1 = get_sub_field('headline_1');
				$content_1 = get_sub_field('content_1');
				$headline_2 = get_sub_field('headline_2');
				$content_2 = get_sub_field('content_2');
				
				$cta_button_1 = get_sub_field('cta_button_1'); 
				$cta_button_1_url = $cta_button_1['url'];
				$cta_button_1_text = $cta_button_1['title'];
				$cta_button_1_target = $cta_button_1['target'] ? $cta_button_1['target'] : '_self';
				
				$cta_button_2 = get_sub_field('cta_button_2'); 
				$cta_button_2_url = $cta_button_2['url'];
				$cta_button_2_text = $cta_button_2['title'];
				$cta_button_2_target = $cta_button_2['target'] ? $cta_button_2['target'] : '_self';
			?>

			<section class="section--blue add-borders-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="http://placehold.it/330x275?text=Placeholder" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="col-lg-4">
                            <h3><?php echo $headline_1; ?></h3>
                            <?php echo $content_1; ?>
                            <a href="<?php echo esc_url( $cta_button_1_url ); ?>" target="<?php echo esc_attr( $cta_button_1_target ); ?>" class="btn btn-dark">
								<?php echo esc_html( $cta_button_1_text ); ?>
							</a>
                        </div>
                        <div class="col-lg-4">
                            <h3><?php echo $headline_2; ?></h3>
                            <?php echo $content_2; ?>
                             <a href="<?php echo esc_url( $cta_button_2_url ); ?>" target="<?php echo esc_attr( $cta_button_2_target ); ?>" class="btn btn-dark">
								<?php echo esc_html( $cta_button_2_text ); ?>
							</a>
                        </div>
                    </div>
                </div>
            </section>
		<?php endwhile; endif; ?>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     