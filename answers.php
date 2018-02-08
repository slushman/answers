<?php
/**
 * Plugin Name: 			Answers
 * Plugin URI: 				https://github.com/slushman/answers/
 * Description: 			A simple FAQ plugin using blocks.
 * Author: 					slushman
 * Author URI: 				https://www.slushman.com/
 * GitHub Plugin URI: 		https://github.com/slushman/answers/
 * Github Branch: 			master
 * Version: 				1.0.0
 * License: 				GPL2+
 * License URI: 			http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @since 					1.0.0
 * @package 				Answers
 */

 use Answers\Classes as Classes;

 // Exit if accessed directly.
 if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Include the autoloader.
 */
require_once plugin_dir_path( __FILE__ ) . 'classes/class-autoloader.php';

/**
 * Activation and Deactivation Hooks.
 */
register_activation_hook( __FILE__, array( 'Answers\Classes\Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Answers\Classes\Deactivator', 'deactivate' ) );

/**
 * Initializes each class and hooks each class's 'hooks' method to init.
 */
function answers_init_classes() {

	$classes = array();

	$classes[] = new Classes\Blocks();

	if ( empty( $classes ) ) { return; }

	foreach ( $classes as $class ) {

		add_action( 'init', array( $class, 'hooks' ) );

	}

} // answers_init_classes()

add_action( 'plugins_loaded', 'answers_init_classes' );
