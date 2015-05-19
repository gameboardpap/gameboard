<?php
App::uses('AppController', 'Controller');

class BuscasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function buscar() {
            
            $busca=$this->Busca->buscar($this->request->data);
            
//            $this->set($busca);
            
	}
}
