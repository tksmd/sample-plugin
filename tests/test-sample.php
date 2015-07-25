<?php

class SampleTest extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	/**
	 * @group japanese
	 */
	function test_japanese() {
		$greeting = do_shortcode('[greeting language="japanese"]');
		$this->assertEquals('こんにちは', $greeting);
	}

	function test_english() {
		$greeting = do_shortcode('[greeting language="english"]');
		$this->assertEquals('hello', $greeting);
	}

}

