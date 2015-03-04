<?php
App::uses('AppModel', 'Model');
App::import('Model', 'Usuario');
/**
 * Login Model
 *
 */
class Login extends AppModel {

    public function verificarUsuario($usuario, $senha)
    {
        $this->Usuario = new Usuario();
        $options = array('conditions' => array('Usuario.nickname' => $usuario, 'Usuario.password' => $senha));
        $resultado = $this->Usuario->find('first', $options);
        return $resultado;
    }

}
