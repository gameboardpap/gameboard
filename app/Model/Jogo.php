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
        
        public $actsAs = array('Containable');
        
        public function beforeSave($options = array())
        {
            if(isset($this->data['Jogo']['nome'])) {
                $this->data['Jogo']['nome_amigavel']=  strtolower(Inflector::slug($this->data['Jogo']['nome']));
            }
        }
        
        public function beforeDownload($user,$id)
        {
            $feedback = $this->Download->find('first', array('conditions' => array('Download.usuario_id' => $user['id'],'Download.jogo_id'=>$id)));
            $jogo = $this->find('first',array('conditions'=>array('Jogo.id'=>$id)));
            
            if(empty($feedback))
            {
                $count=$this->Download->find('count', array('conditions' => array('Download.usuario_id' => $user['id'],'Download.feedback'=>false)));
                
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
        
        public function getJogos($genero_amigavel=null,$busca=null){
                        
		$this->recursive = 1;
                
                $conditions="";
                
                if($genero_amigavel) {
                    
                    $this->bindModel(array('hasOne' => array('GenerosJogo')), false);
                    
                    $genero_id=$this->Genero->getIdByAmigavel($genero_amigavel);
                    
                    $conditions=array('GenerosJogo.genero_id'=>$genero_id);                   
                   
                }
                
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
        
        public function formatarBusca($busca=null) {
            
            $busca=array('Jogo.nome_amigavel LIKE '=> "%".strtolower(Inflector::slug($busca))."%");
            
            return $busca;
        }
        
        
//        public function uploadImage() {
//            if(!empty($this->data['Jogo']['img']['name'])) {
//                $this->UploadDir = new UploadDir();
//                $this->data['Jogo']['img'] = $this->UploadDir->upload($this->data['Jogo']['img'], "files/games/imgs");  
//            } else {  
//                unset($this->data['Jogo']['img']);  
//            }
//            
//            if(!empty($this->data['Jogo']['link']['name'])) {
//                $this->UploadDir = new UploadDir();
//                $this->data['Jogo']['link'] = $this->UploadDir->upload($this->data['Jogo']['link'], "files/games/jogos");  
////                $uploader = new DropboxUploader("projetogameboard@gmail.com", "papupgame2015");
////                $uploader->upload($this->data['Jogo']['link']['tmp_name'], $this->data['Jogo']['nome_amigavel'], $this->data['Jogo']['nome_amigavel']);
//            } else {  
//                unset($this->data['Jogo']['link']);  
//            }
//        }
//        
//        public function uploadMedia() {
//            if(!empty($this->data['Jogo']['img']['name'])) {
//                $this->UploadDir = new UploadDir();
//                $this->data['Jogo']['img'] = $this->UploadDir->upload($this->data['Jogo']['img'], "files/games/imgs");  
//            } else {  
//                unset($this->data['Jogo']['img']);  
//            }
//            
//            if(!empty($this->data['Jogo']['link']['name'])) {
//                $this->UploadDir = new UploadDir();
//                $this->data['Jogo']['link'] = $this->UploadDir->upload($this->data['Jogo']['link'], "files/games/jogos");  
////                $uploader = new DropboxUploader("projetogameboard@gmail.com", "papupgame2015");
////                $uploader->upload($this->data['Jogo']['link']['tmp_name'], $this->data['Jogo']['nome_amigavel'], $this->data['Jogo']['nome_amigavel']);
//            } else {  
//                unset($this->data['Jogo']['link']);  
//            }
//        }
//        
//        public function uploadGame() {
//            if(!empty($this->data['Jogo']['img']['name'])) {
//                $this->UploadDir = new UploadDir();
//                $this->data['Jogo']['img'] = $this->UploadDir->upload($this->data['Jogo']['img'], "files/games/imgs");  
//            } else {  
//                unset($this->data['Jogo']['img']);  
//            }
//            
//            if(!empty($this->data['Jogo']['link']['name'])) {
//                $this->UploadDir = new UploadDir();
//                $this->data['Jogo']['link'] = $this->UploadDir->upload($this->data['Jogo']['link'], "files/games/jogos");  
////                $uploader = new DropboxUploader("projetogameboard@gmail.com", "papupgame2015");
////                $uploader->upload($this->data['Jogo']['link']['tmp_name'], $this->data['Jogo']['nome_amigavel'], $this->data['Jogo']['nome_amigavel']);
//            } else {  
//                unset($this->data['Jogo']['link']);  
//            }
//        }

}
