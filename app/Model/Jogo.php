<?php
App::uses('AppModel', 'Model');
App::uses('UploadDir', 'Model');
//App::uses('DropboxUploader', 'Model');
App::uses('Busca','Model');
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
                ),
                'Download'=>array(
                    'className'=>'Download',
                    'foreignKey'=>'jogo_id'
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
            if(isset($this->data['Jogo']['nome'])) {
                $this->data['Jogo']['nome_amigavel']=  strtolower(Inflector::slug($this->data['Jogo']['nome']));
            }
            $this->data=$this->uploadGame($this->data);
        }
        
        public function beforeDownload($id)
        {
            $user=$this->getUsuarioLogado();
            
            $conditionsFeedback=array('Download.usuario_id' => $user['id'],'Download.jogo_id'=>$id);
            
            $feedback = $this->Download->getDownloads('first', $conditionsFeedback);
                        
            $jogo = $this->getJogos('first',array('Jogo.id'=>$id));
            
            if(empty($feedback))
            {
                $count=$this->Download->getDownloads('count',array('Download.usuario_id' => $user['id'],'Download.feedback'=>false));
                
                if($count<=5)
                {
                    $dadosDL['Download']['jogo_id']=$id;
                    $dadosDL['Download']['usuario_id']=$user['id'];
                    
                    $this->Download->save($dadosDL);
                    
                    $dadosJG['Jogo']['id']=$jogo['Jogo']['id'];
                    $dadosJG['Jogo']['n_downloads']=$jogo['Jogo']['n_downloads']+1;
                    
                    $this->save($dadosJG);                    
                } else {
                    return false;
                }
            }
            
            return $jogo['Jogo']['link'];
        }
        
        public function paginateJogos($options = array()) {
            
            $conditions="";
            if(isset($options['genero_amigavel'])) {
                
                $genero_amigavel=$options['genero_amigavel'];

                $this->bindModel(array('hasOne' => array('GenerosJogo')), false);

                $genero_id=$this->Genero->getIdByAmigavel($genero_amigavel);

                $conditions=array('GenerosJogo.genero_id'=>$genero_id);                   

            }
            
            if(isset($options['post']['Jogo']['pesquisa']))
            {
                $texto=$options['post']['Jogo']['pesquisa'];
                $model='Jogo';
                $busca = new Busca();
                $conditions=$busca->formatarBuscaNome($texto, $model, $conditions);                
            }
            return $this->getPaginateOptions($conditions);
        }
        
        public function getPaginateOptions($conditions="") {
                        
		$this->recursive = 1;
                
                $paginate = array(
                    'contains'=>array('Genero','GenerosJogo','Equipe'),
                    'conditions'=>array($conditions),
                    'limit' => 10,
                     'order' => array(
                         'Jogo.created' => 'DESC'
                     )
                );
            
            return $paginate;
        }
        
        public function getJogos($type,$conditions) {
            $jogos = $this->find($type,array('conditions'=>$conditions));
            
            return $jogos;
        }
        
        public function listarEquipes() {
            
            $user=$this->getUsuarioLogado();
            $conditions=array('Usuario.id'=>$user['id']);
            $equipes = $this->Equipe->getEquipes('list', $conditions);
            
            return $equipes;
        }
        
        public function uploadGame($jogo) {
            if(!empty($jogo['Jogo']['img']['name'])) {
                $this->UploadDir = new UploadDir();
                $jogo['Jogo']['img'] = $this->UploadDir->upload($jogo['Jogo']['img'], "files/games/imgs");  
            } else {  
                unset($jogo['Jogo']['img']);  
            }
            
            if(!empty($this->data['Jogo']['link']['name'])) {
                $this->UploadDir = new UploadDir();
                $jogo['Jogo']['link'] = $this->UploadDir->upload($this->data['Jogo']['link'], "files/games/jogos");
//                $uploader = new DropboxUploader("projetogameboard@gmail.com", "papupgame2015");
//                $uploader->upload($jogo['Jogo']['link']['tmp_name'], $jogo['Jogo']['nome_amigavel'], $jogo['Jogo']['nome_amigavel']);
            } else {  
                unset($jogo['Jogo']['link']);  
            }
            
            return $jogo;
        }

}
