<?php
/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if ( have_rows( 'menu_settings', 'option' ) ) : ?>
    <?php while ( have_rows( 'menu_settings', 'option' ) ) : the_row(); ?>
        <?php $desktop_logo = get_sub_field( 'desktop_logo' ); ?>
        <?php if ( $desktop_logo ) : ?>
            <a class="navbar-brand web-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                <img src="<?php echo esc_url( $desktop_logo['url'] ); ?>" alt="<?php echo esc_attr( $desktop_logo['alt'] ); ?>" />
            </a>
        <?php endif; ?>
        <?php $mobile_logo = get_sub_field( 'mobile_logo' ); ?>
        <?php if ( $mobile_logo ) : ?>
            <a class="navbar-brand mobile-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                <img src="<?php echo esc_url( $mobile_logo['url'] ); ?>" alt="<?php echo esc_attr( $mobile_logo['alt'] ); ?>" />
            </a>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>