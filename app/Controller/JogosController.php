<?php
App::uses('AppController', 'Controller');
/**
 * Jogos Controller
 *
 * @property Jogo $Jogo
 * @property PaginatorComponent $Paginator
 */
class JogosController extends AppController {

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
	public function index($nome_amigavel=null, $busca=null) {
//            debug($busca);
//            die;
            $this->Paginator->settings = $this->Jogo->getJogos($nome_amigavel, $busca);
            $generos=$this->Jogo->Genero->find('all');
            $dados=array('jogos'=>$this->Paginator->paginate(),'generos'=>$generos,'nome_amigavel'=>$nome_amigavel);
            $this->set($dados);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($nome_amigavel = null) {
		if (!$this->Jogo->hasAny(array('Jogo.nome_amigavel'=>$nome_amigavel))) {
			throw new NotFoundException(__('Jogo inválido'));
		}
                $this->Jogo->recursive = 2;
		$options = array('conditions' => array('Jogo.nome_amigavel' => $nome_amigavel));
		$this->set('jogo', $this->Jogo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
                
		if ($this->request->is('post')) {
			$this->Jogo->create();
			if ($this->Jogo->save($this->request->data)) {
				$this->Session->setFlash(__('Jogo salvo com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O jogo não pode ser salvo, tente novamente mais tarde!'));
			}
		}
               
		$equipes = $this->Jogo->Equipe->find('list');
		$generos = $this->Jogo->Genero->find('list');
		$this->set(compact('equipes', 'generos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($nome_amigavel = null) {
		if (!$this->Jogo->hasAny(array('Jogo.nome_amigavel'=>$nome_amigavel))) {
			throw new NotFoundException(__('Jogo inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jogo->save($this->request->data)) {
				$this->Session->setFlash(__('Jogo alterado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O jogo não pode ser alterado, tente novamente mais tarde!'));
			}
		} else {
			$options = array('conditions' => array('Jogo.nome_amigavel' => $nome_amigavel));
			$this->request->data = $this->Jogo->find('first', $options);
		}
		$equipes = $this->Jogo->Equipe->find('list');
		$generos = $this->Jogo->Genero->find('list');
		$this->set(compact('equipes', 'generos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jogo->id = $id;
		if (!$this->Jogo->exists()) {
			throw new NotFoundException(__('Jogo inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jogo->delete()) {
			$this->Session->setFlash(__('Jogo deletado com sucesso!'));
		} else {
			$this->Session->setFlash(__('O jogo não pode ser deletado, tente novamente mais tarde!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function download($id) {
            $resposta=$this->Jogo->beforeDownload($this->Auth->user(),$id);
            if($resposta) {            
                $path = "webroot".DS."files".DS."games".DS."jogos".DS.$resposta.DS;

                $this->response->file($path, array(
                    'download' => true,
                    'name' => $resposta,
                ));
                return $this->response;
            } else 
            {
                echo 'Você possui 5 jogos que baixou e não deu feedback! Dê feedback nestes jogos para continuar baixando!';
                exit;
                $this->Session->setFlash('Você possui 5 jogos que baixou e não deu feedback! Dê feedback nestes jogos para continuar baixando!');
            }
        }
        
        public function busca($busca) {
            $this->redirect(array("controller"=>"jogos","action"=>"buscar",$busca));
        }
}
