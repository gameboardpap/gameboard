<?php
App::uses('EquipesUsuario', 'Model');

/**
 * EquipesUsuario Test Case
 *
 */
class EquipesUsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.equipes_usuario',
		'app.equipe',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EquipesUsuario = ClassRegistry::init('EquipesUsuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EquipesUsuario);

		parent::tearDown();
	}

}
