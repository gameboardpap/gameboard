<?php
App::uses('AppModel', 'Model');
/**
 * Genero Model
 *
 * @property Jogo $Jogo
 */
class Genero extends AppModel {

    public $displayField = 'nome_genero';
    
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome_genero' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Jogo' => array(
			'className' => 'Jogo',
			'joinTable' => 'generos_jogos',
			'foreignKey' => 'genero_id',
			'associationForeignKey' => 'jogo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
        
        public function getIdByAmigavel($nome_amigavel){
            $genero = $this->find('first',array('conditions'=>array('Genero.nome_amigavel'=>$nome_amigavel)));
            return $genero['Genero']['id'];
        }
        
        public function beforeSave($options = array())
        {
            if(isset($this->data['Genero']['nome_genero'])) {
                $this->data['Genero']['nome_amigavel']=  strtolower(Inflector::slug($this->data['Genero']['nome_genero']));
            }
        }

}
