<?php
App::uses('Jogo', 'Model');

/**
 * Jogo Test Case
 *
 */
class JogoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jogo',
		'app.equipe',
		'app.usuario',
		'app.equipes_usuario',
		'app.genero',
		'app.generos_jogo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jogo = ClassRegistry::init('Jogo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jogo);

		parent::tearDown();
	}

}
