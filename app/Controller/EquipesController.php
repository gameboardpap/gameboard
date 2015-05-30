<?php
App::uses('AppController', 'Controller');
/**
 * Equipes Controller
 *
 * @property Equipe $Equipe
 * @property PaginatorComponent $Paginator
 */
class EquipesController extends AppController {

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
		$this->Equipe->recursive = 0;
		$this->set('equipes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($nome_amigavel = null) {
//		if (!$this->Equipe->exists($id)) {
//			throw new NotFoundException(__('Invalid equipe'));
//		}
            $this->Equipe->recursive=2;
		$options = array('conditions' => array('Equipe.nome_amigavel'=>$nome_amigavel));
		$this->set('equipe', $this->Equipe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipe->create();
			if ($this->Equipe->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The equipe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipe could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Equipe->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($nome_amigavel = null) {
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Equipe->save($this->request->data)) {
				$this->Session->setFlash(__('Desenvolvedora editada com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A desenvolvedora não pôde ser editada!'));
			}
		} else {
			$options = array('conditions' => array('Equipe.nome_amigavel'=>$nome_amigavel));
			$this->request->data = $this->Equipe->find('first', $options);
		}
		$usuarios = $this->Equipe->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Equipe->id = $id;
		if (!$this->Equipe->exists()) {
			throw new NotFoundException(__('Invalid equipe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Equipe->delete()) {
			$this->Session->setFlash(__('The equipe has been deleted.'));
		} else {
			$this->Session->setFlash(__('The equipe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
