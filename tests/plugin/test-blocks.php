<?php
/**
 * Class testing the Blocks class.
 *
 * Tests:
 * 	Asserts $this->blocks is an instance of the Blocks class.
 *
 * @package 		Answers
 */

class TestBlocks extends WP_UnitTestCase {

	/**
	 * Configures WordPress for each test.
	 */
	public function setUp() {

        $this->blocks = new \Answers\Classes\Blocks();

	} // setUp()

	/**
	 * Removes the testing configuration.
	 */
	public function tearDown() {

		//

	} // tearDown()

	/**
	 * Asserts TRUE that $this->activator is an instance of the Blocks class.
	 *
	 * @expects 		bool 		TRUE
	 * @since 			1.0.0
	 */
	public function test_isBlocksObject() {

		$this->assertInstanceOf( 'Answers\Classes\Blocks', $this->blocks );

	} // test_isBlocksObject()

} // class
