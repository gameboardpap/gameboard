<?php
App::uses('AppController', 'Controller');

class BuscasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function buscar() {
            $busca=$this->Busca->definirBusca($this->request->data);
            
           $this->redirect(array('controller'=>'Jogos','action'=>'busca',$busca['busca']));
            
	}
}
