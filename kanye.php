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

		wp_enqueue_script('kanye-js', plugin_dir_path( __FILE__ ) .'kanye.js', array(), false, true);

	}

	add_action('wp_enqueue_scripts', 'kanye_js');
}

function kanye_control() {
    echo '<script>Kanye.draw();</script>';
}

add_action('wp_footer', 'kanye_control');