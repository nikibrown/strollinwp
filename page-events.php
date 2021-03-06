<?php
/**
* Template Name: Events
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">
			
			<?php if( have_rows('events_blue_section') ): while( have_rows('events_blue_section') ): the_row(); ?>

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
		<div class="container section--white ">

			<?php if( have_rows('events_section') ): while( have_rows('events_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$events = get_sub_field('events');
				?>

					
				<section class="section--light">
					<div class="row">
						<div class="col-sm-12">
							<h2><?php echo $headline; ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php if( have_rows('events') ): while( have_rows('events') ): the_row(); ?>
								<?php 
									$event_date = get_sub_field('event_date');
									$event_title = get_sub_field('event_title');
									$event_link = get_sub_field('event_link');
									$event_text = get_sub_field('event_text');
								?>
								<h3><?php echo $event_date; ?></h3>
								<h4><a href="<?php echo $event_link; ?>"><?php echo $event_title; ?></a></h4>
								<?php echo $event_text; ?>
								<hr />
							<?php endwhile; endif; ?>
						</div>

						<?php if( have_rows('additional_content') ): while( have_rows('additional_content') ): the_row(); ?>

					<?php 
						$event_img_1 = get_sub_field('event_img_1');
						$event_img_2 = get_sub_field('event_img_2');
						$headline = get_sub_field('headline');
						$content = get_sub_field('content');
						$photo_1 = get_sub_field('photo_1');
						$photo_2 = get_sub_field('photo_2');
						$photo_3 = get_sub_field('photo_3');
						$photo_4 = get_sub_field('photo_4');
					?>

						<div class="col-lg-6">
							<img src="<?php echo $event_img_1; ?>" alt="" class="img-fluid mx-auto d-block mb-4 ">

							<img src="<?php echo $event_img_2; ?>" alt="" class="img-fluid mx-auto d-block mb-4 ">
							
						</div>
						
					</div>
				</section>

			<?php endwhile; endif; ?>

		</div>

		


			
			<div class="container section--blue">

				<section>
					<div class="row">
						<div class="col-lg-6">
							<img src="<?php echo $photo_1; ?>" alt="" class="img-fluid mx-auto d-block mb-4 mb-lg-0">
						</div>
						<div class="col-lg-6">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>
						</div>
					</div>
				</section>
			</div>

			<div class="container section--white">
				<section>
					<div class="row">
						<div class="col-lg-4">
							<img src="<?php echo $photo_2; ?>" alt="" class="img-fluid mx-auto d-block mb-4 mb-lg-0">
						</div>
						<div class="col-lg-4">
							<img src="<?php echo $photo_3; ?>" alt="" class="img-fluid mx-auto d-block mb-4 mb-lg-0">
						</div>
						<div class="col-lg-4">
							<img src="<?php echo $photo_4; ?>" alt="" class="img-fluid mx-auto d-block mb-4 mb-lg-0">
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     