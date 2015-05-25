<?php
App::uses('AppModel', 'Model');
/**
 * Download Model
 *
 * @property Jogo $Jogo
 * @property Usuario $Usuario
 */
class Download extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'jogo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'usuario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'feedback' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'Jogo' => array(
			'className' => 'Jogo',
			'foreignKey' => 'jogo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public function getDownloads($type,$conditions,$order=NULL,$group=NULL,$vf=NULL) {
            $this->recursive = 2;
            $opt['conditions']=$conditions;
            if($vf) {
                foreach($vf as $v) {
                    $this->virtualFields[$v['nome_campo']] = $v['campo'];   
                }
            }
            
            if($order) {
                $opt['order']=$order;
            }
            
            if($group) {
                $opt['group']=$group;
            }
            $opt['contain']=array('Jogo' => array('fields' => array('id','nome','nome_amigavel'), 'Equipe'));
            $downloads=$this->find($type,$opt);
            
            return $downloads;
            
        }   
        
        public function paginateDownloads() {
            $usuarioLogado=$this->getUsuarioLogado();
            $conditions=array('Download.usuario_id'=>$usuarioLogado['id']);
            return $this->getPaginateOptions($conditions);
        }
        
        public function getPaginateOptions($conditions="") {                        

            $this->recursive = 2;

            $paginate = array(
                'conditions'=>array($conditions),
                'limit' => 10,
                 'order' => array(
                     'Download.feedback ASC','Download.created DESC'
                 )
            );

            return $paginate;   
        }
}
