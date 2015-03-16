<?php
App::uses('Genero', 'Model');

/**
 * Genero Test Case
 *
 */
class GeneroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.genero',
		'app.jogo',
		'app.equipe',
		'app.usuario',
		'app.equipes_usuario',
		'app.generos_jogo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Genero = ClassRegistry::init('Genero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Genero);

		parent::tearDown();
	}

}
