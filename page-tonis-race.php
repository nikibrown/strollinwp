<?php
/**
* Template Name: Toni's Race
*/ 
?>


<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>

		<?php if( have_rows('tonis_race_purple_section') ): while( have_rows('tonis_race_purple_section') ): the_row(); ?>

			<?php 
				$image = get_sub_field('image');
				$content = get_sub_field('content');
				$cta_link = get_sub_field('cta_link');
				$cta_link_url = $cta_link['url'];
				$cta_link_text = $cta_link['title'];
				$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
			?>
			
			<section class="section--purple section--dark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" style="width:270px; margin-bottom: 20px;">
							<div class="lead">
								<?php echo $content; ?>
							</div>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-secondary"><?php echo esc_html( $cta_link_text ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>


		<?php if( have_rows('tonis_race_photo_banner_section') ): while( have_rows('tonis_race_photo_banner_section') ): the_row(); ?>

			<?php $image = get_sub_field('photo'); ?>

			<section class="section--photo-banner-small" style="background-image: url(<?php echo $image; ?>)"></section>
		<?php endwhile; endif; ?>


		<?php if( have_rows('tonis_race_white_section') ): while( have_rows('tonis_race_white_section') ): the_row(); ?>
			<?php 
				$image = get_sub_field('photo');
				$headline = get_sub_field('headline');
				$content = get_sub_field('content');
				$cta_link = get_sub_field('cta_link');
				$cta_link_url = $cta_link['url'];
				$cta_link_text = $cta_link['title'];
				$cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
			?>

			<section class="section--white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="http://placehold.it/500x330?text=Placeholder" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="col-lg-6">
                            <h3><?php echo $headline ?></h3>
                            <?php echo $content; ?>

							<?php if( $cta_link ): ?>
								<a href="<?php echo esc_url( $cta_link_url ); ?>" target="<?php echo esc_attr( $cta_link_target ); ?>" class="btn btn-secondary"><?php echo esc_html( $cta_link_text ); ?></a>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
		<?php endwhile; endif; ?>


		<?php if( have_rows('tonis_race_blue_section') ): while( have_rows('tonis_race_blue_section') ): the_row(); ?>
			<?php 
				$image_1 = get_sub_field('photo_1');
				$image_2 = get_sub_field('photo_2');
				$headline = get_sub_field('headline');
				$content = get_sub_field('content');
			?>


			<section class="section--blue add-borders-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h4><?php echo $headline; ?></h4>

							<?php echo $content; ?>
                        </div>
                        <div class="col-lg-4">
                            <img src="<?php echo $image_1; ?>" class="img-fluid mx-auto d-block" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?php echo $image_2; ?>" class="img-fluid mx-auto d-block" alt="">
                        </div>
                    </div>
                </div>
            </section>
		<?php endwhile; endif; ?>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     