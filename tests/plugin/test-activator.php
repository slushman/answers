<?php
/**
 * Class testing the Activator class.
 *
 * Tests:
 * 	Asserts $this->activator is an instance of the Activator class.
 *
 * @package 		Answers
 */

class TestActivator extends WP_UnitTestCase {

	/**
	 * Configures WordPress for each test.
	 */
	public function setUp() {

		parent::setUp();

		$this->activator = new \Answers\Classes\Activator();

	} // setUp()

	/**
	 * Removes the testing configuration.
	 */
	public function tearDown() {

		parent::tearDown();

	} // tearDown()

	/**
	 * Asserts TRUE that $this->activator is an instance of the Activator class.
	 *
	 * @expects 		bool 		TRUE
	 * @since 			1.0.0
	 */
	public function test_isActivatorObject() {

		$this->assertInstanceOf( 'Answers\Classes\Activator', $this->activator );

	} // test_isActivatorObject()

} // class
