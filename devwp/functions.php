<?php
//*****************************************************
//******************** LINK CSS ***********************
//*****************************************************

// MAIN STYLE SHEET REQUIRED BY WORDPRESS
wp_enqueue_style( 'style', get_stylesheet_uri() );


// LOAD IN ALL STYLES COMPILED BY GULP
function load_styles() {
	wp_enqueue_style( 'main.min', get_template_directory_uri() . '/dist/css/main.min.css');
}
add_action('wp_enqueue_scripts', 'load_styles');





//*****************************************************
//******************** LINK JS ************************
//*****************************************************

// LOAD IN JQUERY
wp_enqueue_script( 'jquery' );


// LOAD IN ALL SCRIPTS COMPILED BY JS
function scripts_loadin() {
wp_enqueue_script( 'devwp', get_template_directory_uri() . '/dist/js/devwp.js');
}
add_action('wp_enqueue_scripts', 'scripts_loadin');



//*****************************************************
//********************* FONTS *************************
//*****************************************************

//Raleway Registration
wp_register_style( 'arvo_font', 'https://fonts.googleapis.com/css2?family=Arvo' );
wp_enqueue_style('arvo_font');


//*****************************************************
//*************** MENU REGISTRATIONS ******************
//*****************************************************

//*********** Header ***********
function register_my_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********** Footer Col 1 ***********
function register_col_1() {
    register_nav_menu('footer-column-1', ( 'Footer Column 1' ));
}
add_action( 'init', 'register_col_1' );

//*********** Footer Col 2 ***********
function register_col_2() {
    register_nav_menu('footer-column-2', ( 'Footer Column 2' ));
}
add_action( 'init', 'register_col_2' );

//*********** Footer Col 3 ***********
function register_col_3() {
    register_nav_menu('footer-column-3', ( 'Footer Column 3' ));
}
add_action( 'init', 'register_col_3' );


/**
 * do_action( 'wp_loaded' )
 * This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated.
 * @link https://developer.wordpress.org/reference/hooks/wp_loaded/
 */
add_action('wp_loaded', function () {
    function wp_custom_fontawesome_nav($subject)
    {
        if (!is_admin()) {
            $search = [
                '/>Home</', // ... >Home< with the brackets, to be sure to target the right Home word
                '/>Listen</', // ... etc.
                // ... etc.
            ];
            $replace = [
                '><i class="fas fa-home"></i><', // ... Our replacement for Home
                '><i class="fas fa-play-circle"></i><', // ... Our replacement for Listen
                // ... etc.
            ];
            $subject = preg_replace($search, $replace, $subject);
            return $subject;
        };
    }

    ;
    ob_start('wp_custom_fontawesome_nav');
});

?>