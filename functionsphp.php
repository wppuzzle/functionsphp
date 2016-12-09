<?php
/* ====================================
 * Plugin Name: Functions.PHP
 * Description: My new functions.php. Edit plugin to add your custom code without editing function.php in theme
 * Plugin URI: http://wp-puzzle.com/functionsphp/
 * Author: WP Puzzle
 * Author URI: http://wp-puzzle.com/
 * Version: 1.0
 * ==================================== */

/* =================================================================================
 * 
 * ================================================================================= */
function functionsphp_head_info(){

	echo "\n<!-- Plugin Functions.PHP active -->\n";

}
add_action('wp_head', 'functionsphp_head_info');



/* =================================================================================
 * your code in <head>
 * ================================================================================= */
function functionsphp_head(){

    $before = <<<EOT
<!-- your code in <head> -->
EOT;

}
add_filter( 'wp_head', 'functionsphp_head' );
/* ================================================================================= */





/* =================================================================================
 * your code before </body>
 * ================================================================================= */
function functionsphp_in_footer( $content ){

    echo <<<EOT
<!-- your code before </body> -->
EOT;

}
add_action( 'wp_footer', 'functionsphp_in_footer' );
/* ================================================================================= */





/* =================================================================================
 * your code before and after post entry
 * ================================================================================= */
function functionsphp_html_in_content( $content ) {
 
    if ( !is_single() ) {
        return $content;
    }

    $before = <<<EOT
<!-- your code before post entry -->
EOT;

    $after = <<<EOT
<!-- your code after post entry -->
EOT;

   return $before . $content . $after;

}
add_filter( 'the_content', 'functionsphp_html_in_content' );
/* ================================================================================= */




/* =================================================================================
 * styles and scripts inlude
 *
 * 1. upload your files into plugin folder /wp-content/plugins/functionsphp/ through FTP or file manager in hosting panel
 * 2. use following code for connecting uploaded files, examples, mystyle.css and myscript.js
 * 3. uncomment string add_action( 'wp_enqueue_scripts', 'functionsphp_style_and_script', 100 );
 *
 * ================================================================================= */
function functionsphp_style_and_script() {
 
    wp_enqueue_style(  'mystyle',  plugin_dir_url( __FILE__ ) .'mystyle.css' , array(), true);
    wp_enqueue_script( 'myscript', plugin_dir_url( __FILE__ ) .'myscript.js' , array(), true, true );

}
//add_action( 'wp_enqueue_scripts', 'functionsphp_style_and_script', 100 );
/* ================================================================================= */