<?php
/**
* Template Name: Repeating Sections
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

		<div class="container section--white section--light">
			<section>
				<div class="row">
					
					<?php if( have_rows('photos') ): ?>
						<div class="col-lg-3">
							
							<?php while( have_rows('photos') ): the_row(); ?>
								<?php 
								$photo = get_sub_field('photo'); ?>
								<img src="<?php echo $photo ?>" class="img-fluid mb-4 mx-auto d-block">

							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php if( have_rows('photos') ) { ?>
						<div class="col-lg-9">
					<?php } else { ?>
						<div class="col-lg-12">
					<?php } ?>
						
						<?php if( have_rows('resources') ): while( have_rows('resources') ): the_row(); ?>

							<?php 
								$headline = get_sub_field('headline');
								$content = get_sub_field('content');
								$url = get_sub_field('url');
							?>
						
							<?php if ($headline): ?>
								<h3><?php echo $headline; ?></h3>
							<?php endif; ?>
							<?php if ($content): ?>
								<?php echo $content; ?>
							<?php endif; ?>

							<?php if ($url): ?>
								<a href="<?php echo $url; ?>" target="_blank">
									<?php echo $url; ?>
								</a>
							<?php endif; ?>

							<hr>

						<?php endwhile; endif; ?>
					</div>
				</div>
			</section>
		</div>
		
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     