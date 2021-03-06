<?php
App::uses('Comentario', 'Model');

/**
 * Comentario Test Case
 *
 */
class ComentarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comentario',
		'app.usuario',
		'app.jogo',
		'app.equipe',
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
		$this->Comentario = ClassRegistry::init('Comentario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comentario);

		parent::tearDown();
	}

}
