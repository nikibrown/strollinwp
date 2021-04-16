<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">

			<section>	
				<div class="row">
					<div class="col-sm-12">
						<h2><?php the_title(); ?></h2>
						<div class="lead">
							<?php the_field("lead_text"); ?>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="container section--white section--light">

			<section>
				<div class="row">
					<div class="col-lg-12">
						<?php the_content(); ?>
					</div>
				</div>
				
			</section>
		</div>
		
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     