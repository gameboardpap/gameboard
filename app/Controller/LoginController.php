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
            $this->Session->setFlash(__('Logado com sucesso!'));
        } else {
            $this->Session->setFlash(__('Usuário e/ou Senha está incorreto!'));
        }
        $this->redirect(array('action' => 'index'));
    }

    private function verificarUsuario($post)
    {
        $dados=$this->Login->verificarUsuario($post["Login"]["nickname"], sha1($post["Login"]["password"]));
        if(!empty($dados))
        {
            $this->criarSessao($dados);
            return true;
            
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
