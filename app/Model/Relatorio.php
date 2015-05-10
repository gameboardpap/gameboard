<?php
App::uses('AppModel', 'Model');

/**
 * Usuario Model
 *
 */
class Relatorio extends AppModel {

    public function maisBaixados($equipe = NULL) {
        
        $maisBaixados=$this->find('all',$options);
    }
    
    public function melhoresAvaliados ($equipe = NULL) {
        
    }
    
    public function todosFeedbacks ($jogo) {
        
    }
    
}