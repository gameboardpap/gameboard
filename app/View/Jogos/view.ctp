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
                        <?php echo $this->Html->link('<span class="label label-info">'.$genero['nome_genero'].'</span>', array('controller' => 'generos', 'action' => 'view', $genero['id']), array('escape'=>false)); ?>
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="col-md-5">
                <h3>&nbsp;</h3>
                <p><strong>Avaliação: </strong><span class="label label-default">5.0</span></p>
                <p>&nbsp;</p>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo $this->Html->link("Baixar",array('controller'=>'Jogos', 'action'=>'download/'.$jogo['Jogo']['link']),array("class"=>"btn btn-default col-md-12"));?>
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
    <?php foreach ($jogo['Comentario'] as $comentario): ?>
        <div class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
                <div class="thumbnail member-photo">
                <?php if(empty($comentario['Usuario']['avatar'])): ?>
                    <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <?php else: ?>
                    <?php echo $this->Html->image('/app/webroot//files/usuario_avatar/'.$comentario['Usuario']['avatar']); ?>
                    <!--<img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />-->
                <?php endif; ?>
                <div class="member-name">
                    <?php echo $comentario['Usuario']['username']; ?>
                    <span>Lorde supremo</span>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="panel panel-default arrow left">
                    <div class="panel-body">
                        <div class="comment-post">
                            <div class="row">
                                <div class="col-md-10">
                                    <legend>Comentários</legend>
                                    <p>
                                        <?php echo $comentario['comentario']; ?>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <legend>Nota</legend>
                                    <span class="label label-default"><?php echo $comentario['nota']; ?>.0</span>
                                </div>
                            </div>                        
                            <div class="row">
                                <div class="col-md-6">
                                    <legend class="pros">Prós</legend>
                                    <p class="pros">
                                        <?php echo $comentario['pros']; ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <legend class="contras">Contras</legend>
                                    <p class="contras">
                                        <?php echo $comentario['contras']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="comment-user"><i class="fa fa-user"></i> <?php echo $comentario['Usuario']['username']; ?></div>
                            <div class="comment-date"><i class="fa fa-clock-o"></i> <?php echo date('d/m/y H:i',strtotime($comentario['created'])); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modal title</h4>
</div>
<div class="modal-body">
    <?php echo $this->Form->create('Comentario',array('url' => array('controller' => '#', 'action' => '#'),'class'=>'form-comment')); ?>
	<fieldset>
		<legend><?php echo __('Add Comentario'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id',array('value'=>$logado['id'],'type'=>'hidden'));
		echo $this->Form->input('jogo_id', array('value'=>$jogo['Jogo']['id'],'type'=>'hidden'));
		echo $this->Form->input('comentario');
                echo $this->Form->input('pros');
                echo $this->Form->input('contras');
	?>
	</fieldset>
<?php echo $this->Form->end("Enviar feedback"); ?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>
<!-- FIM MODAL -->
<?php //echo $this->Html->scriptBlock(); 
?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".form-comment").submit(function(){
            
            alert("entrou");
            
            
            var url = $(this).attr("action");
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
</script>