<?php
/**
* Template Name: Sponsors
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">
			<section>
				<div class="row">
					<div class="col-sm-12">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
			</section>
		</div>

		<div class="container section--white">

			<section>		
				<div class="row">
					<div class="col-lg-12">
						<h2>Featured Sponsors</h2>
						<ul class="sponsors-list">
							<?php if( have_rows('featured_sponsors') ): while( have_rows('featured_sponsors') ): the_row(); ?>
								<?php $featured_sponsor = get_sub_field('featured_sponsor'); ?>
								<li><?php echo $featured_sponsor; ?></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</section>	

			<section class="section--white">		
				<div class="row">
					<div class="col-lg-12">
						<h2>Current and Past Sponsors</h2>
						<ul class="sponsors-list">
							<?php if( have_rows('sponsors') ): while( have_rows('sponsors') ): the_row(); ?>
								<?php $sponsor = get_sub_field('sponsor'); ?>
								<li><?php echo $sponsor; ?></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</section>		
		</div>
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     