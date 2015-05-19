<?php
App::uses('AppModel', 'Model');

class Busca {
    
    public function formatarBuscaNome($texto,$model) {
        return $conditions=array($model.'.nome_amigavel LIKE'=>'%'.strtolower(Inflector::slug($texto)).'%');
    }
    
}
