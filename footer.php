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
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h3>Footer Widget 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h3>Footer Widget 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h3>Footer Widget 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-4"></div>
        </div>
    </div>
</footer>

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

