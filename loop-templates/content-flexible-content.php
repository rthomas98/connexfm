<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :

        if ( get_row_layout() == 'home_hero' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-hero.php' );
        endif;

        if ( get_row_layout() == 'four_blocks_with_icons' ):
            include( get_stylesheet_directory() . '/acf-blocks/four-blocks-with-icons.php' );
        endif;

        if ( get_row_layout() == 'content_image_right_with_two_buttons' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-image-right-with-two-buttons.php' );
        endif;

        if ( get_row_layout() == 'six_features_with_icons' ):
            include( get_stylesheet_directory() . '/acf-blocks/six-features-with-icons.php' );
        endif;

        if ( get_row_layout() == 'full_image_with_a_play_button' ):
            include( get_stylesheet_directory() . '/acf-blocks/full-image-with-a-play-button.php' );
        endif;

        if ( get_row_layout() == 'four_cards_with_button' ):
            include( get_stylesheet_directory() . '/acf-blocks/four-cards-with-button.php' );
        endif;

        if ( get_row_layout() == 'dark_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/dark-cta.php' );
        endif;

        if ( get_row_layout() == 'split_color_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/split-color-cta.php' );
        endif;

        if ( get_row_layout() == 'content_three_images_right' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-three-images-right.php' );
        endif;

        if ( get_row_layout() == 'banner_blue_background_left' ):
            include( get_stylesheet_directory() . '/acf-blocks/banner-blue-background-left.php' );
        endif;

        if ( get_row_layout() == 'full_image_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/full-image-cta.php' );
        endif;

        if ( get_row_layout() == 'basic_centered_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/basic-centered-cta.php' );
        endif;

        if ( get_row_layout() == 'banner_full_staggered_title' ):
            include( get_stylesheet_directory() . '/acf-blocks/banner-full-staggered-title.php' );
        endif;

        if ( get_row_layout() == 'basic_content' ):
            include( get_stylesheet_directory() . '/acf-blocks/basic-content.php' );
        endif;

        if ( get_row_layout() == 'half_colored_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/half-colored-cta.php' );
        endif;

        if ( get_row_layout() == 'basic_content_two_columns' ):
            include( get_stylesheet_directory() . '/acf-blocks/basic-content-two-columns.php' );
        endif;

        if ( get_row_layout() == 'banner_two_images' ):
            include( get_stylesheet_directory() . '/acf-blocks/banner-two-images.php' );
        endif;

        if ( get_row_layout() == 'multi_color_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/multi-color-cta.php' );
        endif;

        if ( get_row_layout() == 'basic_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/basic-banner.php' );
        endif;

        if ( get_row_layout() == 'content_black_background' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-black-background.php' );
        endif;

        if ( get_row_layout() == 'content_image_left' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-image-left.php' );
        endif;

        if ( get_row_layout() == 'accordion_content' ):
            include( get_stylesheet_directory() . '/acf-blocks/accordion-content.php' );
        endif;

        if ( get_row_layout() == 'basic_cta_white_background' ):
            include( get_stylesheet_directory() . '/acf-blocks/basic-cta-white-background.php' );
        endif;

        if ( get_row_layout() == 'content_half_black_background_with_image' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-half-black-background-with-image.php' );
        endif;

        if ( get_row_layout() == 'banner_full_image_blue_tint' ):
            include( get_stylesheet_directory() . '/acf-blocks/banner-full-image-blue-tint.php' );
        endif;

        if ( get_row_layout() == 'center_image_with_content' ):
            include( get_stylesheet_directory() . '/acf-blocks/center-image-with-content.php' );
        endif;

    endwhile;
endif;
?>
