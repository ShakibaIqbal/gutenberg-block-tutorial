<?php

/**
 * Custom Gutenberg Functions
 */

function custom_gutenberg_default_colors()
{
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => __( 'White', 'textdomain' ),
                'slug'  => 'white',
                'color'	=> '#FFFFFF',
            ),
	      array(
                'name'	=> __( 'Black', 'textdomain' ),
                'slug'	=> 'black',
                'color'	=> '#000000',
            ),
            array(
                'name'  => __( 'Yellow', 'textdomain' ),
                'slug'  => 'yellow',
                'color'	=> '#ffd000',
            ),
            array(
                'name'  => __( 'Blue', 'textdomain' ),
                'slug'  => 'blue',
                'color' => '#347ab7',
            )
        )
    );
}

 add_action('init','custom_gutenberg_default_colors');

 function test_gutenberg_blocks() 
 {
    wp_register_script('custom-cta-js', get_template_directory_uri() . '/build/index.js', array('wp-blocks'));
    register_block_type('test-blocks/custom-cta', array (
        'editor_script' => 'custom-cta-js'
    ));
 }

 add_action('init','test_gutenberg_blocks');