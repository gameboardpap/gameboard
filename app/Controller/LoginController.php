<?php
App::uses('AppController', 'Controller');
App::uses('Login', 'Model');
/**
 * Login Controller
 *
 */
class LoginController extends AppController {



    public function index()
    {

    }

    public function login()
    {
        if($this->verificarUsuario($this->request->data))
        {
            $this->criarSessao($this->request->data);
        }
    }

    private function verificarUsuario($post)
    {
        $dados=$this->Login->verificarUsuario($post["Usuario"]["nickname"], sha1($post["Usuario"]["password"]));
        if(!empty($dados))
        {
            $this->criarSessao($dados);
        } else
        {
            return null;
        }

    }
    /**
     *
     */
    private function criarSessao($dados)
    {
        $this->Session->write('Login.id',$dados['Usuario']['id']);
        $this->Session->write('Login.usuario',$dados['Usuario']['nickname']);
        $this->Session->write('Login.nome',$dados['Usuario']['primeiro_nome']);
        $this->Session->write('Login.sobrenome',$dados['Usuario']['ultimo_nome']);
    }

    public function apagarSessao()
    {
        $this->Session->destroy();
    }

}
