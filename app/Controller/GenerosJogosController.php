<?php
App::uses('AppController', 'Controller');
/**
 * GenerosJogos Controller
 *
 * @property GenerosJogo $GenerosJogo
 * @property PaginatorComponent $Paginator
 */
class GenerosJogosController extends AppController {

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
		$this->GenerosJogo->recursive = 0;
		$this->set('generosJogos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GenerosJogo->exists($id)) {
			throw new NotFoundException(__('Invalid generos jogo'));
		}
		$options = array('conditions' => array('GenerosJogo.' . $this->GenerosJogo->primaryKey => $id));
		$this->set('generosJogo', $this->GenerosJogo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GenerosJogo->create();
			if ($this->GenerosJogo->save($this->request->data)) {
				$this->Session->setFlash(__('The generos jogo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The generos jogo could not be saved. Please, try again.'));
			}
		}
		$generos = $this->GenerosJogo->Genero->find('list');
		$jogos = $this->GenerosJogo->Jogo->find('list');
		$this->set(compact('generos', 'jogos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GenerosJogo->exists($id)) {
			throw new NotFoundException(__('Invalid generos jogo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GenerosJogo->save($this->request->data)) {
				$this->Session->setFlash(__('The generos jogo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The generos jogo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GenerosJogo.' . $this->GenerosJogo->primaryKey => $id));
			$this->request->data = $this->GenerosJogo->find('first', $options);
		}
		$generos = $this->GenerosJogo->Genero->find('list');
		$jogos = $this->GenerosJogo->Jogo->find('list');
		$this->set(compact('generos', 'jogos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GenerosJogo->id = $id;
		if (!$this->GenerosJogo->exists()) {
			throw new NotFoundException(__('Invalid generos jogo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GenerosJogo->delete()) {
			$this->Session->setFlash(__('The generos jogo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The generos jogo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
