<?php
App::uses('AppController', 'Controller');
/**
 * Jogos Controller
 *
 * @property Jogo $Jogo
 * @property PaginatorComponent $Paginator
 */
class RelatoriosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {          
            $equipes=$this->Relatorio->getEquipes();
            $jogos=$this->Relatorio->getJogosByUsuario();
            $dados=array('equipes'=>$equipes,'jogos'=>$jogos);
            $this->set($dados);
	}

        public function maisBaixados() {
            if($this->request->is('post')){
                $relatorios=$this->Relatorio->maisBaixados($this->request->data);
                $this->set(array('relatorios'=>$relatorios));
            } else {
                echo "Requisição feita de maneira incorreta";
                die;
            }
        }
        
        public function melhoresAvaliados() {
            if($this->request->is('post')){
                $relatorios=$this->Relatorio->melhoresAvaliados($this->request->data);   
                $this->set(array('relatorios'=>$relatorios));
            } else {
                echo "Requisição feita de maneira incorreta";
                die;
            }
        }
        
        public function todosFeedbacks() {
            if($this->request->is('post')){
                $relatorios=$this->Relatorio->todosFeedbacks($this->request->data); 
                $this->set(array('relatorios'=>$relatorios));
            } else {
                echo "Requisição feita de maneira incorreta";
                die;
            }
        }

}
