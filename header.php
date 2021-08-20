<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package childcarebath
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" href="styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap">
    <link rel="preload" href="styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script defer src="https://kit.fontawesome.com/2f927039b0.js" crossorigin="anonymous"></script>
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

    <?php
        $themeColour = '#7c74b5';
        $pagename = str_replace('.html', '', basename(get_permalink()));

        if (strpos($pagename, 'alicepark') !== false) {
            $themeColour = '#ea118d';
        }

        if (strpos($pagename, 'riverside') !== false) {
            $themeColour = '#00aeef';
        }
    ?>


    <meta name="theme-color" content="<?php echo $themeColour ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'childcarebath' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
            <span class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                Menu
            </span>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

        <hr class="bar">
	</header><!-- #masthead -->

    <?php //echo do_shortcode("[hfe_template id='134']"); ?>
    <?php echo do_shortcode("[hfe_template id='61']"); ?>