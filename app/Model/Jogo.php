<?php
App::uses('AppModel', 'Model');
App::uses('UploadDir', 'Model');
/**
 * Jogo Model
 *
 * @property Equipe $Equipe
 * @property Genero $Genero
 */
class Jogo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'equipe_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'faixa_etaria' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'link' => array(
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
		'descricao' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Equipe' => array(
			'className' => 'Equipe',
			'foreignKey' => 'equipe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public $hasMany = array(
                'Comentario'=> array(
                    'className'=>'Comentario',
                    'foreignKey' => 'jogo_id',
                    'order'=>'Comentario.id DESC'
                )
        );

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Genero' => array(
			'className' => 'Genero',
			'joinTable' => 'generos_jogos',
			'foreignKey' => 'jogo_id',
			'associationForeignKey' => 'genero_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
        
        public function beforeSave($options = array())
        {
            $this->data['Jogo']['nome_amigavel']=  strtolower(Inflector::slug($this->data['Jogo']['nome']));
            
            if(!empty($this->data['Jogo']['img']['name'])) {
                $this->UploadDir = new UploadDir();
                $this->data['Jogo']['img'] = $this->UploadDir->upload($this->data['Jogo']['img'], "files/games/imgs");  
            } else {  
                unset($this->data['Jogo']['img']);  
            }
            
            if(!empty($this->data['Jogo']['link']['name'])) {
                $this->UploadDir = new UploadDir();
                $this->data['Jogo']['link'] = $this->UploadDir->upload($this->data['Jogo']['link'], "files/games/jogos");  
            } else {  
                unset($this->data['Jogo']['link']);  
            }
        }

}
