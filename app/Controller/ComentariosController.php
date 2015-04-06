<?php
App::uses('AppController', 'Controller');
/**
 * Comentarios Controller
 *
 * @property Comentario $Comentario
 * @property PaginatorComponent $Paginator
 */
class ComentariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
//
        
/**
 * index method
 *
 * @return void
 */
	public function index($id=null) {
		$this->Comentario->recursive = 2;
                if(empty($id))
                {
                    $id=$this->request->data['id'];
                }
                $paginate = array(
                    'conditions'=>array('Comentario.jogo_id'=>$id),
                    'limit' => 10,
                     'order' => array(
                         'Comentario.id' => 'DESC'
                     )
                 );
                $this->Paginator->settings = $paginate;
                $this->layout='ajax';
		$this->set('comentarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
		$this->set('comentario', $this->Comentario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario has been saved.'));
				if(!$this->request->is('ajax')) {
                                        return $this->redirect(array('action' => 'index'));
                                } else {
                                    return $this->redirect(array('action'=>'index',$id));
                                }
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$jogos = $this->Comentario->Jogo->find('list');
		$this->set(compact('usuarios', 'jogos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
			$this->request->data = $this->Comentario->find('first', $options);
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$jogos = $this->Comentario->Jogo->find('list');
		$this->set(compact('usuarios', 'jogos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comentario->delete()) {
			$this->Session->setFlash(__('The comentario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comentario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
