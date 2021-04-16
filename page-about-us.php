<?php
/**
* Template Name: About Us
*/ 
?>

<?php get_header("nothome"); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main>
		<div class="container section--dark-blue">
			<?php if( have_rows('about_us_blue_section') ): while( have_rows('about_us_blue_section') ): the_row(); ?>
				<?php $intro_text = get_sub_field('intro_text');?>
				<section>
					<div class="row">
						<div class="col-sm-12">
							<h2><?php the_title(); ?></h2>
							<p class="lead">
								<?php echo $intro_text; ?>
							</p>
						</div>
					</div>
				</section>
				
			<?php endwhile; endif; ?>
		</div>

		<div class="container  section--purple">
			<?php if( have_rows('about_us_purple_section') ): while( have_rows('about_us_purple_section') ): the_row(); ?>

				<?php 
					$photo = get_sub_field('photo');
					$headline = get_sub_field('headline');
					$content = get_sub_field('content');
				?>

				<section class="section--three-col">
					<div class="row align-items-center">
						<div class="col-sm-12 col-lg-4">
							<img src="<?php echo $photo; ?>" alt="<?php echo $headline; ?>" class="img-fluid d-block m-auto">
						</div>
						<div class="col-sm-12 col-lg-8">
							<h2><?php echo $headline; ?></h2>
							<div class="lead">
								<?php echo $content; ?>
							</div>
						</div>
					</div>
				</section>

			<?php endwhile; endif; ?>
		</div>

		<div class="container section--white section--light">

			<?php if( have_rows('board_of_directors_section') ): while( have_rows('board_of_directors_section') ): the_row(); ?>

				<?php 
					$headline = get_sub_field('headline');
					$board_members = get_sub_field('board_members');
				?>

				<section class="section--photo-gallery">
                    <div class="row">
                        <div class="col-12">
                            <h3><?php echo $headline; ?></h3>
                        </div>
                    </div>
                    <div class="row">
						<?php if( have_rows('board_members') ): while( have_rows('board_members') ): the_row(); ?>
							<?php 
								$board_member_photo = get_sub_field('board_member_photo');
								$board_member_name = get_sub_field('board_member_name');
								$board_member_bio = get_sub_field('board_member_bio');
							?>

							<div class="modal fade" id="modal<?php echo get_row_index(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel"><?php echo $board_member_name; ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
											<img src="<?php echo $board_member_photo; ?>" alt="<?php echo $board_member_name; ?>" class="float-left" style="height: auto; width: 150px;">

											<?php echo $board_member_bio; ?>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<a href="#" data-toggle="modal" data-target="#modal<?php echo get_row_index(); ?>">
									<p><?php echo $board_member_name; ?></p>
									<img src="<?php echo $board_member_photo; ?>" alt="<?php echo $board_member_name; ?>" class="img-fluid d-block mb-5 mr-auto ml-auto">
								</a>
							</div>
						<?php endwhile; endif; ?>
                    </div>
              	</section>

			<?php endwhile; endif; ?>
		</div>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>     