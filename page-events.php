<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>

		<?php if( have_rows('events_blue_section') ): while( have_rows('events_blue_section') ): the_row(); ?>

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

		<?php if( have_rows('events_section') ): while( have_rows('events_section') ): the_row(); ?>

			<?php 
				$headline = get_sub_field('headline');
				$events = get_sub_field('events');
			?>

			<section class="section--white add-borders-dark-blue section--light">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2><?php echo $headline; ?></h2>
						</div>
					</div>
					<div class="row">
						<?php if( have_rows('events') ): while( have_rows('events') ): the_row(); ?>
							<?php 
								$event_date = get_sub_field('event_date');
								$event_title = get_sub_field('event_title');
								$event_link = get_sub_field('event_link');
								$event_text = get_sub_field('event_text');
							?>
							<div class="col-lg-3">
								<h3><?php echo $event_date; ?></h3>
								<h4><a href="<?php echo $event_link; ?>"><?php echo $event_title; ?></a></h4>
								<?php echo $event_text; ?>
							</div>
						<?php endwhile; endif; ?>
					</div>

				</div>
			</section>

		<?php endwhile; endif; ?>

		<?php if( have_rows('additional_content') ): while( have_rows('additional_content') ): the_row(); ?>

			<?php 
				$headline = get_sub_field('headline');
				$content = get_sub_field('content');
				$photo_1 = get_sub_field('photo_1');
				$photo_2 = get_sub_field('photo_2');
				$photo_3 = get_sub_field('photo_3');
				$photo_4 = get_sub_field('photo_4');
			?>

			<section class="section--white">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="<?php echo $photo_1; ?>" alt="">
						</div>
						<div class="col-lg-6">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>
						</div>
					</div>
				</div>
			</section>

			<section class="section--white">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<img src="<?php echo $photo_2; ?>" alt="">
						</div>
						<div class="col-lg-4">
							<img src="<?php echo $photo_3; ?>" alt="">
						</div>
						<div class="col-lg-4">
							<img src="<?php echo $photo_3; ?>" alt="">
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     