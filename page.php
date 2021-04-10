<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		
		<section class="section--dark-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2><?php the_title(); ?></h2>
						<div class="lead">
							<?php the_field("lead_text"); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section--white section--light">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
		
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     