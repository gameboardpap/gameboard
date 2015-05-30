<?php
App::uses('AppModel', 'Model');
App::uses('Download','Model');
App::uses('Comentario','Model');
App::uses('Equipe','Model');
App::uses('Jogo','Model');

/**
 * Usuario Model
 *
 */
class Relatorio extends AppModel {

    var $useTable=false;
    
    public function maisBaixados($post) {
        
       
       $retorno=$this->prepararDados($post); 
        
       $conditions="";
       $download = new Download();
       if($retorno['equipe']!=NULL) {
           $conditions['Jogo.equipe_id']=$retorno['equipe'];
       }
       if($retorno['dataini']!=NULL && $retorno['datafim']!=NULL) {
           $conditions['Download.created BETWEEN ? AND ?']=array($retorno['dataini'],$retorno['datafim']);
       }
       
       $vf[]=array('nome_campo'=>'ndown','campo'=>'COUNT(jogo.id)');
       $order="Download.ndown DESC";
       $group="Download.jogo_id";
       
       $downloads=$download->getDownloads('all', $conditions,$order,$group,$vf);
      
       return $downloads;
       
    }
    
    public function melhoresAvaliados ($post) {
       $retorno=$this->prepararDados($post); 
       $conditions="";
       $comentario = new Comentario();
       
       if($retorno['equipe']) {
           $conditions['Jogo.equipe_id']=$retorno['equipe'];
       }
       if($retorno['dataini'] && $retorno['datafim']) {
           $conditions['Download.created BETWEEN ? AND ?']=array($retorno['dataini'],$retorno['datafim']);
       }
       $vf[]=array('nome_campo'=>'total_feed','campo'=>'COUNT(Comentario.id)');
       $order="Jogo.nota DESC";
       $group="Jogo.id";
       
       $comentarios=$comentario->getComentarios('all', $conditions,$order,$group,$vf);
       
       return $comentarios;
       
    }
    
    public function todosFeedbacks ($post) {
        $retorno=$this->prepararDados($post); 
        $conditions="";
        $comentario = new Comentario();
        
        $conditions['Comentario.jogo_id']=$retorno['jogo'];
        
        if($retorno['dataini'] && $retorno['datafim']) {
            $conditions['Comentario.created BETWEEN ? AND ?']=array($retorno['dataini'],$retorno['datafim']);
        }
        $comentarios=$comentario->getComentarios('all', $conditions);
        return $comentarios;
        
    }
    
    public function generosMaisBaixados ($dataini = NULL, $datafim = NULL) {
        
    }
    
    private function prepararDados($post) {

        if(!empty($post['Relatorio']['periodo'])) {
            $retorno['dataini']=date('Y-m-d H:i:s', strtotime("-".$post['Relatorio']['periodo']."days"));
            $retorno['datafim']=date('Y-m-d H:i:s');
        } else {
            $retorno['dataini']=NULL;
            $retorno['datafim']=NULL;
        }
        
        if(!empty($post['Relatorio']['gama'])) {
            if($post['Relatorio']['gama']=='equipes') {
                $equipes=$this->getEquipes();
                foreach($equipes as $key => $value) {
                    $eq[]=$key;
                }
                $retorno['equipe']=$eq;
            } else {
                $retorno['equipe']=$post['Relatorio']['gama'];
            }
        } else {
            $retorno['equipe']=NULL;
        }
        
        if(!empty($post['Relatorio']['jogo'])) {
            $retorno['jogo']=$post['Relatorio']['jogo'];
        } else {
            $retorno['jogo']=NULL;
        }        
        return $retorno;
    }
    
    public function getEquipes ()
    {
        $user=$this->getUsuarioLogado();
        $conditions=array('Usuario.id'=>$user['id']);
        $type='list';
        $equipe = new Equipe();
        $equipes=$equipe->getEquipes($type, $conditions);
        
        return $equipes;
    }
    
    public function getJogosByUsuario()
    {
        $user=$this->getUsuarioLogado();
        $conditionsEquipe=array('Usuario.id'=>$user['id']);
        $type='list';
        $equipe= new Equipe();
        $equipes=$equipe->getEquipes($type, $conditionsEquipe);
        
        if($equipes) {

            foreach($equipes as $key => $value) {
                $equipe_id[]=$key;
            }

            $conditionsJogo=array('Jogo.equipe_id'=>$equipe_id);
            $typeJogo='all';
            $jogo = new Jogo();
            $jogos = $jogo->getJogos($typeJogo, $conditionsJogo);

            return $jogos; 
        } else {
            return null;
        }
    }
}