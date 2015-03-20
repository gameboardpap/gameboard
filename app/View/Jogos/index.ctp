<div class="row">
    <div class="col-md-3 col-xs-3 col-lg-3 col-sm-3">
        <div class="lateral-div">
            <h3>Pesquisar por gênero</h3>
            
            <?php 
                foreach ($generos as $genero):
            ?>
            <p><?php echo $this->Html->link($genero["Genero"]["nome_genero"], array("controller"=>"generos","action"=>"view",$genero["Genero"]["id"])); ?></p>
            <?php
                endforeach;
            ?>
        </div>
    </div>
    <div class="col-md-9">
        <?php foreach ($jogos as $jogo): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="list-jogo">
                        <div class="media">
                          <div class="media-left media-middle">
                           <?php 
                           echo $this->Html->link(
                                    $this->Html->image("/app/webroot//files/games/imgs/".$jogo['Jogo']['img'], 
                                        array(
                                            'class'=>'media-object'
                                        )
                                    ),
                                   array('controller' => 'jogos', 'action' => 'view', $jogo['Jogo']['nome_amigavel'] ),
                                   
                                   array('class'=>'pull-left','escape'=>false)
                                );
                           ?>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><?php echo $jogo['Jogo']['nome']; ?></h4>
                            
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

