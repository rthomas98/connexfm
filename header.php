<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <?php if ( have_rows( 'top_bar', 'option' ) ) : ?>
        <div class="top">
            <div class="container">
                <?php while ( have_rows( 'top_bar', 'option' ) ) : the_row(); ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4"></div>
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <?php if ( have_rows( 'top_menu' ) ) : ?>
                                <ul class="nav justify-content-end">
                                    <?php while ( have_rows( 'top_menu' ) ) : the_row(); ?>
                                        <?php $link = get_sub_field( 'link' ); ?>
                                        <?php if ( $link ) : ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo esc_url( $link); ?>">
                                                    <?php the_sub_field( 'link_label' ); ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            <?php else : ?>
                                <?php // No rows found ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <form role="search" method="get" class="search-form float-end" action="<?php echo home_url( '/' ); ?>">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" title="Search for:" />
                                    <button type="submit" class="btn btn-secondary input-group-append">
                                        <i class="fa-sharp fa-regular fa-globe-pointer"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar -->
