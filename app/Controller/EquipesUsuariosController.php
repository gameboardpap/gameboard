<?php
App::uses('AppController', 'Controller');
/**
 * EquipesUsuarios Controller
 *
 * @property EquipesUsuario $EquipesUsuario
 * @property PaginatorComponent $Paginator
 */
class EquipesUsuariosController extends AppController {

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
		$this->EquipesUsuario->recursive = 0;
		$this->set('equipesUsuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EquipesUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid equipes usuario'));
		}
		$options = array('conditions' => array('EquipesUsuario.' . $this->EquipesUsuario->primaryKey => $id));
		$this->set('equipesUsuario', $this->EquipesUsuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EquipesUsuario->create();
			if ($this->EquipesUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The equipes usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipes usuario could not be saved. Please, try again.'));
			}
		}
		$equipes = $this->EquipesUsuario->Equipe->find('list');
		$usuarios = $this->EquipesUsuario->Usuario->find('list');
		$this->set(compact('equipes', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EquipesUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid equipes usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EquipesUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The equipes usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipes usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EquipesUsuario.' . $this->EquipesUsuario->primaryKey => $id));
			$this->request->data = $this->EquipesUsuario->find('first', $options);
		}
		$equipes = $this->EquipesUsuario->Equipe->find('list');
		$usuarios = $this->EquipesUsuario->Usuario->find('list');
		$this->set(compact('equipes', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EquipesUsuario->id = $id;
		if (!$this->EquipesUsuario->exists()) {
			throw new NotFoundException(__('Invalid equipes usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EquipesUsuario->delete()) {
			$this->Session->setFlash(__('The equipes usuario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The equipes usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
