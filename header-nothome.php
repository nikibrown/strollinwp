<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package strollin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-xl">
            <a style="width: 210px" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php bloginfo("template_url"); ?>/assets/img/strollin-logo-color.svg" alt="<?php bloginfo( 'name' ); ?>"/>
			</a>
            <button
                class="navbar-toggler btn btn-primary"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <p>&#9776;</p>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/about-us">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/tonis-race">Toni's Race</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/events">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/sponsors-volunteers">Sponsors / Volunteers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/resources">Education</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Grant & Awards</a>
					</li>
					<li class="">
						<a class="btn btn-primary" href="#">Donate</a>
					</li>
				</ul>

            </div>
        </nav>
    </div>
</header>

