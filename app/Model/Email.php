<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author CaioHenrique
 */
class Email {
    //put your code here
    
   public function enviar_email($opt = array()) {
       
            $Email = new CakeEmail();
            $Email->config('gmail');

            $Email->from(array('projetogameboard@gmail.com' => 'Portal Gameboard'))
            ->to($opt['email'])
            ->subject($opt['titulo'])
            ->send($opt['mensagem']);  
   }    
    
}
