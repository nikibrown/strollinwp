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

				<?php $defaults = array(
					'menu' => 'Main Nav',
					'container'       => '',
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>'				
					);
				?>

				<?php wp_nav_menu( $defaults ); ?>
            </div>
        </nav>
    </div>
</header>

