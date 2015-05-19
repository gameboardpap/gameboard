<?php
App::uses('AppModel', 'Model');
App::uses('UploadDir','Model');
/**
 * Equipe Model
 *
 * @property Usuario $Usuario
 */
class Equipe extends AppModel {

    public $displayField = 'nome_equipe';
    
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome_equipe' => array(
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
		'Usuario' => array(
			'className' => 'Usuario',
			'joinTable' => 'equipes_usuarios',
			'foreignKey' => 'equipe_id',
			'associationForeignKey' => 'usuario_id',
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
            $this->data['Equipe']['nome_amigavel']=  strtolower(Inflector::slug($this->data['Equipe']['nome_equipe']));
            if(!empty($this->data['Equipe']['logo']['name'])) {
                $this->UploadDir = new UploadDir();
                $this->data['Equipe']['logo'] = $this->UploadDir->upload($this->data['Equipe']['logo'], "files/equipe_logo");  
            } else {  
                unset($this->data['Equipe']['logo']);  
            }  
        }
        
        public function getEquipes($type,$conditions) {
            $this->bindModel(
                array(
                  'hasOne' => array(
                    'EquipesUsuario' => array(
                      'className'  => 'EquipesUsuario',
                      'foreignKey' => 'equipe_id',
                      'fields'     => ''	
                    ),
                    'Usuario' => array(
                      'className'  => 'Usuario',
                      'foreignKey' => false,
                      'conditions' => 'Usuario.id = EquipesUsuario.usuario_id',
                      'fields'	 => ''
                    ),
                  )
                )
            );            
            
            $this->recursive = 1;
            
            $equipes = $this->find($type,array('contain'=>array('Usuario','EquipesUsuario'),'conditions'=>$conditions));
            
            return $equipes;
        }

}
