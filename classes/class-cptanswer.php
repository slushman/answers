<?php

/**
 * Defines all code necessary to enqueue styles and scripts for blocks.
 *
 * @link 		https://www.slushman.com
 * @since 		1.0.0
 * @package 	Answers\Classes
 * @author 		Slushman <chris@slushman.com>
 */

namespace Answers\Classes;

class CPTAnswer {

	/**
	 * Class constructor.
	 *
	 * @since 		1.0.0
	 */
	public function __construct() {}

	/**
	 * Registers all the WordPress hooks and filters related to this class.
	 *
	 * @hooked 		init
	 * @since 		1.0.0
	 */
	public function hooks() {

		add_action( 'wp_loaded', array( $this, 'new_cpt_answer' ) );
		add_action( 'wp_loaded', array( $this, 'new_taxonomy_topic' ) );

	} // hooks()

	/**
	 * Returns the options for the answer custom post type.
	 *
	 * @since 		1.0.0
	 * @return 		array 		The answer custom post type options array.
	 */
	public function get_cpt_answer_options() {

		$options = array();

		$options['label'] 			= __( 'Answers', 'answers' );
		$options['menu_icon'] 		= 'dashicons-editor-help';
		$options['public'] 			= TRUE;
		$options['show_in_rest'] 	= TRUE;

		/**
		 * The answers_cpt_answer_options filter.
		 *
		 * @var 		array 		$options 		The CPT options.
		 */
		$options = apply_filters( 'answers_cpt_answer_options', $options );

		return $options;

	} // get_cpt_answer_options()

	/**
	 * Returns the options for the topic taxonomy.
	 *
	 * @since 		1.0.0
	 * @return 		array 		The topic taxonomy options array.
	 */
	public function get_taxonomy_topic_options() {

		$options = array();

		$options['label'] 				= __( 'Topics', 'answers' );
		$options['public'] 				= TRUE;
		$options['show_admin_column'] 	= TRUE;
		$options['show_in_rest'] 		= TRUE;

		/**
		 * The answers_cpt_answer_options filter.
		 *
		 * @var 		array 		$options 		The CPT options.
		 */
		$options = apply_filters( 'answers_cpt_answer_options', $options );

		return $options;

	} // get_taxonomy_topic_options()

	/**
	 * Creates the new custom post type "answer".
	 *
	 * @since 		1.0.0
	 */
	public function new_cpt_answer() {

		$options = $this->get_cpt_answer_options();

		register_post_type( 'answer', $options );

	} // new_cpt_answer()

	/**
	 * Creates the new custom post type "answer".
	 *
	 * @since 		1.0.0
	 */
	public function new_taxonomy_topic() {

		$options = $this->get_taxonomy_topic_options();

		register_taxonomy( 'topic', 'answer', $options );

	} // new_taxonomy_topic()

} // class
