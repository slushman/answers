<?php

/**
 * Defines all code necessary to run during the plugin's activation.
 *
 * @link            https://www.slushman.com
 * @since           1.0.0
 * @package         Answers\Classes
 * @author          Slushman <chris@slushman.com>
 */

namespace Answers\Classes;

class Activator {

	/**
	 * Maybe activates the plugin.
	 *
	 * Checks if Gutenberg exists and is activated. If not,
	 * this plugin will be deactivated and an error message
	 * will be displayed.
	 *
	 * @since 		1.0.0
	 */
	public static function activate() {

		$gutencheck = Activator::check_for_gutenberg();

		if ( ! $gutencheck ) {

			deactivate_plugins( plugin_basename( __FILE__ ), true );

			$url 		= esc_url( admin_url( 'plugin-install.php?tab=search&s=Gutenberg' ) );
			$message 	= sprintf( wp_kses( __( 'Please install and activate Gutenberg before activating Answers. <p><a href="%1$s">Install Gutenberg from the WordPress plugins directory.</a></p>', 'answers' ), array( 'a' => array( 'href' => array() ), 'p' => array() ) ), $url );

			exit( $message );

		}

	} // activate()

	/**
	 * Checks for the existance of Gutenberg.
	 *
	 * @since 		1.0.0
	 * @return 		bool 		FALSE if Gutenberg does not exist, otherwise TRUE.
	 */
	public static function check_for_gutenberg() {

		if ( ! function_exists( 'gutenberg_init' ) ) { return FALSE; }

		$plugins = get_option( 'active_plugins' );

		if ( ! in_array( 'gutenberg/gutenberg.php', $plugins ) ) { return FALSE; }

		return TRUE;

	} // check_for_gutenberg()

} // class
