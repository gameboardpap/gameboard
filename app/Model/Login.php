<?php
App::uses('AppModel', 'Model');
App::uses('Usuario', 'Model');
/**
 * Login Model
 *
 */
class Login extends AppModel {

    var $useTable = false;

    var $_schema = array(
        'nickname'   =>array('type'=>'string', 'length'=>100), 
        'password' =>array('type'=>'string', 'length'=>100), 
    );
    
    
    public $validate = array(
		'nickname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
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
    
    
    public function verificarUsuario($usuario, $senha)
    {
        $this->Usuario = new Usuario();
        $options = array('conditions' => array('Usuario.nickname' => $usuario, 'Usuario.password' => $senha));
        $resultado = $this->Usuario->find('first', $options);

        return $resultado;
    }

}
