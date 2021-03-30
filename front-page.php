<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<?php if( have_rows('homepage_hero') ): ?>
    		<?php while( have_rows('homepage_hero') ): the_row(); 

				// Get sub field values.
				$homepage_hero_image = get_sub_field('homepage_hero_image');
				$homepage_hero_left_image = get_sub_field('homepage_hero_left_image');
				$homepage_hero_left_headline = get_sub_field('homepage_hero_left_headline'); 
				$homepage_hero_left_text = get_sub_field('homepage_hero_left_text'); 
				$homepage_hero_left_link_text = get_sub_field('homepage_hero_left_link_text'); 
				
		
			?>
        <section class="section--photo-bleed-right">
			<div class="left-content">
				<img src="<?php bloginfo("template_url"); ?>/assets/img/strollin-logo-color.svg" alt="Strollin for the Colon" class="m-4" />
			</div>
			<div class="right-content" style="background-image: url(<?php echo esc_url( $homepage_hero_image ); ?>)"></div>
		</section>

        <section class="section--half-half-extend">
			<div class="container">
				<div class="row align-items-center section--light">
					<div class="col-lg-6">
						<img src="<?php echo esc_url( $homepage_hero_left_image); ?>" class="float-left" alt="<?php echo $homepage_hero_left_headline; ?>" />
						<h3><?php echo $homepage_hero_left_headline; ?></h3>
						<p>
							<?php echo $homepage_hero_left_text; ?> <a href="<?php the_sub_field('homepage_hero_left_link'); ?>"><?php echo $homepage_hero_left_link_text;?></a>
						</p>
					</div>

					<!-- TODO: where does this content come from? Manual entry on homepage? -->
					<div class="col-lg-6 d-none d-lg-block section--dark">
						<img src="http://via.placeholder.com/270x60?text=Toni's+Race" alt="" />
						<p class="lead">
							Optam debit fuga. MeFicabo. Dus porume inisitas fuga. Et quis expernam re
							voluptae sint as essint iligenis reiur sed quam, is perum quiassiti nos
							invelitio.
						</p>

						<p>MONTH XX, 2021</p>
					</div>
				</div>
			</div>
		  

			<div class="mobile-content d-lg-none d-xl-none section--dark">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<img src="http://via.placeholder.com/270x60?text=Toni's+Race" alt="" />
							<p class="lead">
								Optam debit fuga. MeFicabo. Dus porume inisitas fuga. Et quis expernam re
								voluptae sint as essint iligenis reiur sed quam, is perum quiassiti nos
								invelitio.
							</p>

							<p>MONTH XX, 2021</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		  <?php endwhile; ?>
			<?php endif; ?>


		<?php if( have_rows('homepage_blue_section') ): ?>
    	<?php while( have_rows('homepage_blue_section') ): the_row(); 

			// Get sub field values.
			$headline_1 = get_sub_field('headline_1');
			$headline_2 = get_sub_field('headline_2');
			$headline_3 = get_sub_field('headline_3');
			$content_1 = get_sub_field('content_1');
			$content_2 = get_sub_field('content_2');
			$content_3 = get_sub_field('content_3');		
		?>

			<section class="section--homepage-three-col section--dark">
				<div class="container">
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
				</div>
			</section>
		<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('homepage_photo_banner_section') ): ?>
		<?php while( have_rows('homepage_photo_banner_section') ): the_row(); ?>
		<?php $homepage_photo_banner_image = get_sub_field('homepage_photo_banner_image'); ?>
			
			<section class="section--photo-banner-large" style="background-image: url(<?php echo esc_url( $homepage_photo_banner_image ); ?>)"></section>

		<?php endwhile; ?>
		<?php endif; ?>

		<?php if( have_rows('homepage_white_section') ): ?>
		<?php while( have_rows('homepage_white_section') ): the_row(); ?>
		<?php 
			$photo_1 = get_sub_field('photo_1');
			$photo_2 = get_sub_field('photo_2');
			$headline_1 = get_sub_field('headline_1');
			$headline_2 = get_sub_field('headline_2');
			$content_1 = get_sub_field('content_1');
			$content_2 = get_sub_field('content_2');
		?>

			<section class="section--half-half section--light">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<img src="<?php echo esc_url( $photo_1); ?>" class="float-left" alt="<?php echo $headline_1; ?>" />
							<h3><?php echo $headline_1; ?></h3>
							<?php echo $content_1; ?>
						</div>
						<div class="col-lg-6">
							<img src="<?php echo esc_url( $photo_2); ?>" class="float-left" alt="<?php echo $headline_2; ?>" />
							<h3><?php echo $headline_2; ?></h3>
							<blockquote>
								<?php echo $content_2; ?>
							</blockquote>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
		<?php endif; ?>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
     