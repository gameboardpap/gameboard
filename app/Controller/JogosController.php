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
	public function index() {
		$this->Jogo->recursive = 1;
		$this->set('jogos', $this->Paginator->paginate());
                $this->set('generos', $this->Jogo->Genero->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($nome_amigavel = null) {
//		if (!$this->Jogo->exists($nome_amigavel)) {
//			throw new NotFoundException(__('Invalid jogo'));
//		}
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
				$this->Session->setFlash(__('The jogo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jogo could not be saved. Please, try again.'));
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
//		if (!$this->Jogo->exists($nome_amigavel)) {
//			throw new NotFoundException(__('Invalid jogo'));
//		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jogo->save($this->request->data)) {
				$this->Session->setFlash(__('The jogo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jogo could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid jogo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jogo->delete()) {
			$this->Session->setFlash(__('The jogo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jogo could not be deleted. Please, try again.'));
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
                $this->Session->setFlash('Você possui 5 jogos que baixou e não deu feedback! Dê feedback nestes jogos para continuar baixando!');
            }
        }
}
