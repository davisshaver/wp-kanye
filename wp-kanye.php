<?php
/*
Plugin Name: WP Kanye
Plugin URI: https://github.com/davisshaver/wp-kanye
Description: Add some Kanye to your console.
Version: .01
Author: Davis Shaver
Author URI: http://www.davisshaver.com
License: GPL2
*/

if ( !is_admin() ) {

	function kanye_js(){

		wp_enqueue_script('kanye-js', plugins_url( 'kanye.js' , __FILE__ ) , false, false, false);

	}

	add_action('wp_enqueue_scripts', 'kanye_js');
}

function kanye_control() {
    echo '<script>Kanye.boast();</script>';
}

add_action('wp_footer', 'kanye_control');