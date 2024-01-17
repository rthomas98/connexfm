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

    endwhile;
endif;
?>