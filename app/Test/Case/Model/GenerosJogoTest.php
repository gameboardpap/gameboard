<?php
App::uses('GenerosJogo', 'Model');

/**
 * GenerosJogo Test Case
 *
 */
class GenerosJogoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.generos_jogo',
		'app.genero',
		'app.jogo',
		'app.equipe',
		'app.usuario',
		'app.equipes_usuario',
		'app.comentario',
		'app.download'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GenerosJogo = ClassRegistry::init('GenerosJogo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GenerosJogo);

		parent::tearDown();
	}

}
