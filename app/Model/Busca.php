<?php
App::uses('AppModel', 'Model');

class Busca extends AppModel {

    public $useTable = false;
    
    public $validate = array(
		'tipo' => array(
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
    
    public function definirBusca($post) {
        if($post['Busca']['tipo']=="jogo") {
            $dados['Model']="Jogo";
        } else if($post['Busca']['tipo']=="usuario") {
            $dados['Model']="Usuario";
        } else if($post['Busca']['tipo']=="equipe") {
            $dados['Model']="Equipe";
        } else {
            echo "Opção de busca inválida";
            exit;
        }
        
        $dados['busca']=$post['Busca']['pesquisa'];
        
        return $dados;
    }
}
