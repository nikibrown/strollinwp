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
				$homepage_hero_left_link = get_sub_field('homepage_hero_left_link'); 
		
			?>
        <section class="section--photo-bleed-right">
			<div class="left-content">
				<img src="<?php bloginfo("template_url"); ?>/assets/img/strollin-logo-color.svg" alt="Strollin for the Colon" class="m-4" />
			</div>
			<div class="right-content" style="background-image: url(<?php echo esc_url( $homepage_hero_image['url'] ); ?>)"></div>
		</section>

        <section class="section--half-half-extend">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<img src="<?php echo esc_url( $homepage_hero_left_image['url'] ); ?>" class="float-left" alt="<?php echo $homepage_hero_left_headline; ?>" />
						<h3><?php echo $homepage_hero_left_headline; ?></h3>
						<p>
							<?php echo $homepage_hero_left_text; ?> <a href="<?php echo $homepage_hero_left_link; ?>"><?php echo $homepage_hero_left_link_text;?></a>
						</p>
					</div>
					<div class="col-lg-6 d-none d-lg-block">
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
		    <?php endwhile; ?>
<?php endif; ?>

			<div class="mobile-content d-lg-none d-xl-none">
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

        <section class="section--homepage-three-col">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-4">
						<h3>Mission</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde enim totam
							ab provident, accusamus assumenda obcaecati repellat perferendis quam, sequi
							molestias quisquam nulla accusantium, incidunt sed. Velit, perspiciatis
							quisquam?
						</p>
					</div>
					<div class="col-sm-12 col-lg-4">
						<h3>News</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde enim totam
							ab provident, accusamus assumenda obcaecati repellat perferendis quam, sequi
							molestias quisquam nulla accusantium, incidunt sed. Velit, perspiciatis
							quisquam?
						</p>
					</div>
					<div class="col-sm-12 col-lg-4">
						<h3>Become a Sponsor or Voulenteer</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde enim totam
							ab provident, accusamus assumenda obcaecati repellat perferendis quam, sequi
							molestias quisquam nulla accusantium, incidunt sed. Velit, perspiciatis
							quisquam?
						</p>
					</div>
				</div>
			</div>
		</section>

        <section class="section--photo-banner" style="background-image: url(http://nikib.ro/wn/screenshots/homepage-photo-sc.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-sm-12"></div>
				</div>
			</div>
		</section>

		<section class="section--half-half">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<img src="http://via.placeholder.com/100?text=Icon" class="float-left" />
						<h3>Donate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
					</div>
					<div class="col-lg-6">
						<img src="http://via.placeholder.com/100?text=Icon" class="float-left" />
						<h3>John R. Smith, Title</h3>
						<blockquote>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
						</blockquote>
					</div>
				</div>
			</div>
		</section>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
     
        

