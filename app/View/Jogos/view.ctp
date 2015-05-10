<?php $this->assign('title', $jogo['Jogo']['nome']); ?>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="product-image-large">
                    <ul class="bxslider">
                        <li><?php echo $this->Html->image("/app/webroot//files/games/imgs/".$jogo['Jogo']['img']); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                <div class="product-image-large">
                    <div id="bx-pager">
                      <a data-slide-index="0" href=""><?php echo $this->Html->image("/app/webroot//files/games/imgs/".$jogo['Jogo']['img']); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>

    <div class="col-md-8 product-details text-left">
        <h2><?php echo h($jogo['Jogo']['nome']); ?></h2>
        <h3>Sinopse</h3>
        <p><?php echo h($jogo['Jogo']['descricao']); ?></p>
        <h3>Informações adicionais</h3>
        <p><?php echo h($jogo['Jogo']['info_adicional']); ?></p>
        
        <hr/>
        <div class="row">
            <div class="col-md-7">
                <h3>Detalhes do jogo</h3>
                <p><strong>Equipe desenvolvedora: </strong><?php echo $this->Html->link('<span class="label label-warning">'.$jogo['Equipe']['nome_equipe'].'</span>', array('controller' => 'equipes', 'action' => 'view', $jogo['Equipe']['id']), array('escape'=>false)); ?></p>
                <p><strong>Última atualização: </strong><?php echo h($jogo['Jogo']['modified']); ?></p>
                <p><strong>Faixa Etária: </strong><?php echo h($jogo['Jogo']['faixa_etaria']); ?></p>
                <p><strong>Gêneros: </strong>
                    <?php foreach ($jogo['Genero'] as $genero): ?>
                        <?php echo $this->Html->link('<span class="label label-info">'.$genero['nome_genero'].'</span>', array('controller' => 'jogos', 'action' => 'generos', $genero['nome_amigavel']), array('escape'=>false)); ?>
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="col-md-5">
                <h3>&nbsp;</h3>
                <p><strong>Avaliação: </strong><span class="label label-default"><?php echo $jogo['Jogo']['nota']; ?></span></p>
                <p><strong>Número de downloads: </strong><span class="label label-default"><?php echo $jogo['Jogo']['n_downloads']; ?></span></p>
                <p>&nbsp;</p>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo $this->Html->link("Baixar",array('controller'=>'Jogos', 'action'=>'download/'.$jogo['Jogo']['id']),array("class"=>"btn btn-default col-md-12"));?>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-blue col-md-12" data-toggle="modal" data-target="#myModal">Enviar feedback</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<legend>Feedbacks</legend>
<div class="comments">
</div>
<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Adicionando novo feedback</h4>
            </div>
            <div class="modal-body">
                <?php echo $this->Form->create('Comentario', array('url' => array('controller' => 'comentarios', 'action' => 'add'),'class'=>'form-comment form-horizontal','role' => 'form',
                                        'inputDefaults' => array(
                                            'before' => '<div class="form-group">',
                                            'between' => '<div class="col-md-8">',
                                            'after' => '</div> </div>',
                                            'label'=>array(
                                                'class'=>'col-md-4 control-label'                            
                                            ),
                                            'class'=>'form-control'))); ?>
                    <fieldset>
                    <?php
                            echo $this->Form->input('usuario_id',array('value'=>$logado['id'],'type'=>'hidden'));
                            echo $this->Form->input('jogo_id', array('value'=>$jogo['Jogo']['id'],'type'=>'hidden'));
                            echo $this->Form->input('comentario');
                            echo $this->Form->input('pros');
                            echo $this->Form->input('contras');
                            echo $this->Form->input('nota');
                    ?>
                    </fieldset>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-2 col-md-offset-7">
                        <button class="btn btn-red" data-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-md-3">
                        <?php echo $this->Form->end(array('label'=>'Enviar feedback','class'=>'btn btn-default')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAL -->
<?php echo $this->Html->scriptBlock('
        
        $(document).ready(function(){
                
                carregarComentarios();

                $(".comments").on("click",".paginacao-comments",function(){
                    var url = $(this).attr("href");
                    var dados = {"id": "'.$jogo["Jogo"]["id"].'"};
                    $.ajax({
                        "url":url,
                        "type":"POST",
                        "data":dados,
                        "success":function(data) {
                            $(".comments").html(data);
                            $(window).scrollTop($(".comments").offset().top-130);

                        }
                    });
                    
                        return false;
                });
            
                $(".form-comment").submit(function(){
                    var url = $(this).attr("action")+"/'.$jogo["Jogo"]["id"].'";
                    var este = $(this);
                    $.ajax({
                        "url":url,
                        "type":"POST",
                        "data":este.serialize(),
                        "success":function(data) {
                            $(".comments").html(data);
                        }
                    });
                    return false;
                });            
        });
        
        function carregarComentarios() {
                var dados = {"id": "'.$jogo["Jogo"]["id"].'"};
                $.ajax({
                    "url":"'.$this->Html->url(array("controller"=>"comentarios","action"=>"")).'",
                    "type":"POST",
                    "data":dados,
                    "success":function(data) {
                        $(".comments").html(data);
                    }
                });
        }


        ',array("inline"=>false)); 
?>