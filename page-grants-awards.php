<?php
/**
* Template Name: Grants & Awards
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">
			<?php if( have_rows('blue_section') ): while( have_rows('blue_section') ): the_row(); ?>
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
			<?php if( have_rows('white_section') ): while( have_rows('white_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
					$photo = get_sub_field('photo');
				?>

				<section>
					<div class="row">
						<div class="col-lg-6">
							<img src="<?php echo $photo; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $headline; ?>">
						</div>
						<div class="col-lg-6">
							<h2><?php echo $headline; ?></h2>
							<?php echo $content; ?>
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

		<div class="container section--blue ">
			<?php if( have_rows('light_blue_section') ): while( have_rows('light_blue_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$intro_text = get_sub_field('intro_text');
					$photo = get_sub_field('photo');
					
				?>

				<section>
					

					<div class="row">

						<div class="col-lg-6">
							<h3><?php echo $headline; ?></h3>
							<?php echo $intro_text; ?>
							<br />
							<br />


							<ul>
							<?php if( have_rows('grants_awards') ): while( have_rows('grants_awards') ): the_row(); ?>

							<?php 
								$grant__award_text = get_sub_field('grant__award_text'); ?>

								<li><?php echo $grant__award_text; ?></li>
							<?php endwhile; endif; ?>
							</ul>

						</div>

						<div class="col-lg-6">
							<img src="<?php echo $photo; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $headline; ?>">
						</div>

					
						
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

		<div class="container section--white">
			<?php if( have_rows('white_section_2') ): while( have_rows('white_section_2') ): the_row(); ?>

				<?php 
					$photo_1 = get_sub_field('photo_1');
					$photo_2 = get_sub_field('photo_2');
					$photo_3 = get_sub_field('photo_3');
				?>
				
				<section>
					<div class="row">
						<div class="col-sm-12 col-lg-4">
							<img src="<?php echo $photo_1; ?>" class="img-fluid mx-auto d-block mb-5 mb-lg-0" alt="<?php echo $headline; ?>">
						</div>
						<div class="col-sm-12 col-lg-4">
							<img src="<?php echo $photo_2; ?>" class="img-fluid mx-auto d-block mb-5 mb-lg-0" alt="<?php echo $headline; ?>">
						</div>
						<div class="col-sm-12 col-lg-4">
							<img src="<?php echo $photo_3; ?>" class="img-fluid mx-auto d-block mb-5 mb-lg-0" alt="<?php echo $headline; ?>">
						</div>
					</div>
				</section>
			<?php endwhile; endif; ?>
		</div>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     