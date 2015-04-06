<?php
App::uses('Download', 'Model');

/**
 * Download Test Case
 *
 */
class DownloadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.download',
		'app.jogo',
		'app.equipe',
		'app.usuario',
		'app.equipes_usuario',
		'app.comentario',
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
		$this->Download = ClassRegistry::init('Download');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Download);

		parent::tearDown();
	}

}
