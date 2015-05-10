<?php
/**
 * GenerosJogoFixture
 *
 */
class GenerosJogoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'genero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'jogo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'genero_id' => 1,
			'jogo_id' => 1,
			'created' => '2015-04-08 23:31:26',
			'modified' => '2015-04-08 23:31:26'
		),
	);

}
