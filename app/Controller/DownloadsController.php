<?php
App::uses('AppController', 'Controller');
/**
 * Downloads Controller
 *
 * @property Download $Download
 * @property PaginatorComponent $Paginator
 */
class DownloadsController extends AppController {

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
            $options=$this->Download->paginateDownloads();
            $this->Paginator->settings = $options;
            $this->set('downloads', $this->Paginator->paginate());
	}
}
