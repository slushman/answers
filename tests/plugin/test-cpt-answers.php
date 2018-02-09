<?php
/**
 * Class testing the CPTAnswer class.
 *
 * Tests:
 * 	Asserts $this->cpt_answer is an instance of the CPTAnswer class.
 * 	Asserts the returned array from get_cpt_answers:
 * 		contains the key 'label'
 * 		contains the key 'menu_icon'
 * 		contains the key 'public'
 * 		contains the key 'show_in_rest'
 * Asserts 'label' in the $options array equals 'Answers'
 * Asserts 'menu_icon' in the $options array equals 'dashicons-editor-help'
 * Asserts 'public' in th $options array is TRUE.
 * Asserts 'show_in_rest' in th $options array is TRUE.
 *
 * @package 		Answers
 */

class TestCPTAnswers extends WP_UnitTestCase {

	/**
	 * Configures WordPress for each test.
	 */
	public function setUp() {

        $this->cptanswer = new \Answers\Classes\CPTAnswer();

	} // setUp()

	/**
	 * Removes the testing configuration.
	 */
	public function tearDown() {

		//

	} // tearDown()

	/**
	 * Asserts TRUE that $this->cpt_answer is an instance of the CPTAnswer class.
	 *
	 * @expects 		bool 		TRUE
	 * @since 			1.0.0
	 */
	public function test_isCPTAnswerObject() {

		$this->assertInstanceOf( 'Answers\Classes\CPTAnswer', $this->cptanswer );

	} // test_isCPTAnswerObject()

    /**
     * Tests the get_cpt_options() method.
     *
     * @since 			1.0.0
     */
    public function test_getCPTAnswerOptions() {

		$options = $this->cptanswer->get_cpt_answer_options();

		// Check for the expected array keys
        $this->assertArrayHasKey( 'label', $options );
		$this->assertArrayHasKey( 'menu_icon', $options );
		$this->assertArrayHasKey( 'public', $options );
		$this->assertArrayHasKey( 'show_in_rest', $options );

		// Check for the expected values
		$this->assertEquals( 'Answers', $options['label'] );
		$this->assertEquals( 'dashicons-editor-help', $options['menu_icon'] );
		$this->assertTrue( $options['public'] );
		$this->assertTrue( $options['show_in_rest'] );

    } // test_getCPTAnswerOptions()

	/**
     * Tests the get_taxonomy_topic_options() method.
     *
     * @since 			1.0.0
     */
    public function test_getTaxonomyTopicOptions() {

		$options = $this->cptanswer->get_taxonomy_topic_options();

		// Check for the expected array keys
        $this->assertArrayHasKey( 'label', $options );
		$this->assertArrayHasKey( 'show_admin_column', $options );
		$this->assertArrayHasKey( 'public', $options );
		$this->assertArrayHasKey( 'show_in_rest', $options );

		// Check for the expected values
		$this->assertEquals( 'Topics', $options['label'] );
		$this->assertTrue( $options['show_admin_column'] );
		$this->assertTrue( $options['public'] );
		$this->assertTrue( $options['show_in_rest'] );

    } // test_getTaxonomyTopicOptions()

} // class
