<?php
/**
 * Twenty Seventeen Child functions and definitions
 * @package Twenty_Seventeen
 * @subpackage Twenty_Seventeen_Child
 * @since 1.0
 */

/**
 * Enqueue scripts and styles callback.
 */
function child_theme_enqueue_styles_callback() {

    // This is 'twentyseventeen-style' for the Twenty Seventeen theme.
    $parent_style = 'parent-style';
    // Parent Theme stylesheet.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Child Theme stylesheet.
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}

/**
 * Enqueue scripts and styles callback hook.
 */
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles_callback' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images callback.
 */
if (!function_exists('content_image_sizes_attr_callback')) {
    /**
     * Add custom image sizes attribute to enhance responsive image functionality
     * for content images.
    */
    function content_image_sizes_attr_callback( $sizes, $size ) {

        $width = $size[0];
        //check
        if ( 740 <= $width ) {
            $sizes = '(max-width: 700px) 79vw, (max-width: 760px) 80vw, 720px';
        }
        //return sizes
        return $sizes;
    }
}
/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images hook.
 */
add_filter( 'wp_calculate_image_sizes', 'content_image_sizes_attr_callback', 10, 2 );

