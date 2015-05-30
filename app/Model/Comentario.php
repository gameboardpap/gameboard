<?php
App::uses('AppModel', 'Model');
App::uses('Download', 'Model');
/**
 * Comentario Model
 *
 * @property Usuario $Usuario
 * @property Jogo $Jogo
 */
class Comentario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'comentario' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'nota' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'pros' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'contras' => array(
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
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Jogo' => array(
			'className' => 'Jogo',
			'foreignKey' => 'jogo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public function afterSave($created, $options = array())
        {
            $user = $this->getUsuarioLogado();
            $this->virtualFields['nota_total'] = 'AVG(Comentario.nota)';
            $nota = $this->find('first', array('fields' => array('nota_total')));
            $jogo['Jogo']['id']=$this->data['Comentario']['jogo_id'];
            $jogo['Jogo']['nota']=$nota['Comentario']['nota_total'];
            
            $this->Jogo->save($jogo);
            
            $download = new Download();
            
            $conditions=array('Download.usuario_id'=>$user['id'],'Download.jogo_id'=>$this->data['Comentario']['jogo_id']);
            $type='first';
            $downloads=$download->getDownloads($type, $conditions);
            $downloads['Download']['feedback']=1;
            
            $download->save($downloads);
            
        }
        
        public function getComentarios($type,$conditions,$order=NULL,$group=NULL,$vf=NULL) {
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
            $opt['contain']=array('Usuario','Jogo' => array('fields' => array('id','nome','created','modified','nota','nome_amigavel'), 'Equipe'));
            $downloads=$this->find($type,$opt);
            
            return $downloads;
            
        }   
}
