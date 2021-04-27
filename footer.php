<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package strollin
 */

?>


	<footer class="container">
		<section>
			<div class="row">
				<div class="col-lg-4 col-sm-12 align-self-center">
					<a href="/"><img src="<?php bloginfo("template_url"); ?>/assets/img/strollin-logo-white.svg" alt="Strollin for the Colon" /></a>
				</div>
				<div class="col-lg-4 col-sm-12">
					<h3>Contact Us</h3>
					<div class="d-flex">
						<i class="fas fa-map-marker"></i> 
						<p>Strollin' for the Colon<br /><br />
							PO Box 1054<br />5607 Palmyra Road<br />Pittsford, NY 14534
</p>
					</div>

					<div class="d-flex">
						<i class="fas fa-envelope"></i>
						<p> <a href="mailto:StrollinfortheColon5k@gmail.com">StrollinfortheColon5k@gmail.com</a></p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">
					<h3>Connect</h3>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href=""><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="list-inline-item">
							<a href=""><i class="fab fa-instagram-square"></i></a>
						</li>
						<li class="list-inline-item">
							<a href=""><i class="fab fa-twitter-square"></i></a>
						</li>
					</ul>
				</div>	
			</div>
		</section>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>

