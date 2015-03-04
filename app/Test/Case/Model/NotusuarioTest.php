<?php
App::uses('Notusuario', 'Model');

/**
 * Notusuario Test Case
 *
 */
class NotusuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.notusuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Notusuario = ClassRegistry::init('Notusuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Notusuario);

		parent::tearDown();
	}

}
