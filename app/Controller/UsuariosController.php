<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

       
/**
 * 
 * 
 */        
        public function beforeFilter() {
            $this->Auth->allow('add');
        }
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}
        
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function login() {
		if ($this->request->is('post')) {
                    if($this->Auth->login()) {
                        $this->Session->setFlash('Bem vindo!', 'flash_custom', array(),'sucesso');
                        return $this->redirect($this->Auth->redirect());
                    } else {
                        $this->Session->setFlash("Usuário e/ou senha incorretos!", 'flash_custom', array(),'erro');
                    }
		}
	}
        
        public function logout() {
            $this->Session->setFlash('Comeback Home!', 'flash_custom', array(),'sucesso');
            $this->redirect($this->Auth->logout());
        }       

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Cadastrado com sucesso!'),'flash_custom',array(),'sucesso');
				return $this->redirect(array('controller'=>'/'));
			} else {
				$this->Session->setFlash(__('Não foi possível se cadastrar no momento. Tente novamente mais tarde!'),'flash_custom',array(),'erro');
			}
		}
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
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Perfil alterado com sucesso!', 'flash_custom', array(),'sucesso'));
				return $this->redirect(array('action' => 'editar',$nome_amigavel));
			} else {
				$this->Session->setFlash(__('O perfil não pôde ser alterado! Tente novamente mais tarde', 'flash_custom', array(),'erro'));
			}
		} else {
			$options = array('conditions' => array('Usuario.nome_amigavel' => $nome_amigavel));
			$this->request->data = $this->Usuario->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The usuario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
