<?php
App::uses('Faq', 'FAQ.Model');

/**
 * Faq Test Case
 *
 */
class FaqTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.f_a_q.faq');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Faq = ClassRegistry::init('Faq');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Faq);

		parent::tearDown();
	}

}
