<?php
/**
 * Class testing the Deactivator class.
 *
 * Tests:
 * 	Asserts $this->deactivator is an instance of the Deactivator class.
 *
 * @package 		Answers
 */

class TestDeactivator extends WP_UnitTestCase {

	/**
	 * Configures WordPress for each test.
	 */
	public function setUp() {

		parent::setUp();

		$this->deactivator = new \Answers\Classes\Deactivator();

	} // setUp()

	/**
	 * Removes the testing configuration.
	 */
	public function tearDown() {

		parent::tearDown();

	} // tearDown()

	/**
	 * Asserts TRUE that $this->deactivator is an instance of the Deactivator class.
	 *
	 * @expects 		bool 		TRUE
	 * @since 			1.0.0
	 */
	public function test_isDeactivatorObject() {

		$this->assertInstanceOf( 'Answers\Classes\Deactivator', $this->deactivator );

	} // test_isDeactivatorObject()

} // class
