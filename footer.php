<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">

                <p>
                    <?php echo get_field( 'company_info', 'option' ); ?>
                </p>

                <address>
                    <?php echo get_field( 'address', 'option' ); ?>
                </address>

                <?php if ( get_field( 'toll_free_number', 'option' ) ) : ?>
                    <p class="m-0"> <strong>Toll Free:</strong>
                        <a href="tel:<?php echo get_field( 'toll_free_number', 'option' ); ?>">
                            <?php echo get_field( 'toll_free_number', 'option' ); ?>
                        </a>
                    </p>
                <?php endif; ?>

                <?php if ( get_field( 'phone_number', 'option' ) ) : ?>
                    <p class="m-0"> <strong>Phone:</strong>
                        <a href="tel:<?php echo get_field( 'phone_number', 'option' ); ?>">
                            <?php echo get_field( 'phone_number', 'option' ); ?>
                        </a>
                    </p>
                <?php endif; ?>

                <?php if ( get_field( 'fax_number', 'option' ) ) : ?>
                    <p class="m-0"> <strong>Fax:</strong>
                        <a href="tel:<?php echo get_field( 'fax_number', 'option' ); ?>">
                            <?php echo get_field( 'fax_number', 'option' ); ?>
                        </a>
                    </p>
                <?php endif; ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <?php if ( have_rows( 'navigation_one', 'option' ) ) : ?>
                    <?php while ( have_rows( 'navigation_one', 'option' ) ) : the_row(); ?>
                        <h3>
                            <?php the_field( 'title' ); ?>
                        </h3>
                        <?php if ( have_rows( 'nav' ) ) : ?>
                        <ul class="nav flex-column">
                            <?php while ( have_rows( 'nav' ) ) : the_row(); ?>
                                <?php $nav_link = get_sub_field( 'nav_link' ); ?>
                                <?php if ( $nav_link ) : ?>
                                    <a class="nav-link" href="<?php echo esc_url( $nav_link); ?>">
                                        <?php the_sub_field( 'nav_label' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                            <?php if ( have_rows( 'navigation_two', 'option' ) ) : ?>
                                <?php while ( have_rows( 'navigation_two', 'option' ) ) : the_row(); ?>
                                    <h3><?php the_sub_field( 'title' ); ?></h3>
                                    <?php if ( have_rows( 'nav' ) ) : ?>
                                    <ul class="nav flex-column">
                                        <?php while ( have_rows( 'nav' ) ) : the_row(); ?>
                                            <?php $nav_link = get_sub_field( 'nav_link' ); ?>
                                            <?php if ( $nav_link ) : ?>
                                                <a class="nav-link" href="<?php echo esc_url( $nav_link); ?>">
                                                    <?php the_sub_field( 'nav_label' ); ?>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php else : ?>
                                        <?php // No rows found ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <?php if ( have_rows( 'navigation_three', 'option' ) ) : ?>
                    <?php while ( have_rows( 'navigation_three', 'option' ) ) : the_row(); ?>
                        <h3><?php the_sub_field( 'title' ); ?></h3>
                        <?php if ( have_rows( 'nav' ) ) : ?>
                        <ul class="nav flex-column">
                            <?php while ( have_rows( 'nav' ) ) : the_row(); ?>
                                <?php $nav_link = get_sub_field( 'nav_link' ); ?>
                                <?php if ( $nav_link ) : ?>
                                    <a class="nav-link" href="<?php echo esc_url( $nav_link); ?>">
                                        <?php the_sub_field( 'nav_label' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-2 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <?php if ( have_rows( 'navigation_four', 'option' ) ) : ?>
                    <?php while ( have_rows( 'navigation_four', 'option' ) ) : the_row(); ?>
                       <h3> <?php the_sub_field( 'title' ); ?></h3>
                        <?php if ( have_rows( 'nav' ) ) : ?>
                        <ul class="nav flex-column">
                            <?php while ( have_rows( 'nav' ) ) : the_row(); ?>

                                <?php $nav_link = get_sub_field( 'nav_link' ); ?>
                                <?php if ( $nav_link ) : ?>
                                    <a class="nav-link" href="<?php echo esc_url( $nav_link); ?>">
                                        <?php the_sub_field( 'nav_label' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if ( have_rows( 'social_links', 'option' ) ) : ?>
                    <?php while ( have_rows( 'social_links', 'option' ) ) : the_row(); ?>
                        <h3><?php the_sub_field( 'title' ); ?></h3>
                        <?php if ( have_rows( 'links' ) ) : ?>
                        <ul class="nav">
                            <?php while ( have_rows( 'links' ) ) : the_row(); ?>
                                <?php the_sub_field( 'icon' ); ?>
                                <?php $link = get_sub_field( 'link' ); ?>
                                <?php if ( $link ) : ?>
                                    <a class="nav-link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
                                        <?php the_sub_field( 'icon' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <?php if ( have_rows( 'copyright_nav', 'option' ) ) : ?>
                    <?php while ( have_rows( 'copyright_nav', 'option' ) ) : the_row(); ?>
                        <?php if ( have_rows( 'nav' ) ) : ?>
                            <ul class="nav float-lg-end">
                            <?php while ( have_rows( 'nav' ) ) : the_row(); ?>
                                <?php $link = get_sub_field( 'link' ); ?>
                                <?php if ( $link ) : ?>
                                    <a class="nav-link" href="<?php echo esc_url( $link); ?>">
                                        <?php the_sub_field( 'label' ); ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            </ul>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</footer>

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

