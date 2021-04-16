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
							<h2>Resources: <?php echo $headline ?></h2>
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
					<div class="col-lg-12">
						<?php if( have_rows('resources') ): while( have_rows('resources') ): the_row(); ?>

							<?php 
								$headline = get_sub_field('headline');
								$content = get_sub_field('content');
								$url = get_sub_field('url');
							?>
						
							<h3><?php echo $headline; ?></h3>
							<?php echo $content; ?>

							<a href="<?php echo $url; ?>" target="_blank">
								<?php echo $url; ?>
							</a>

							<hr>

						<?php endwhile; endif; ?>
					</div>
				</div>
			</section>
		</div>
		
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     