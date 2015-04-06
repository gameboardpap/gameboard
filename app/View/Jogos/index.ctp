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
            <?php echo $this->Html->link('
            <div class="row">
                <div class="col-md-12 blogShort">
                    <div class="row">
                        <div class="col-md-2">'. 
                            $this->Html->image("/app/webroot//files/games/imgs/".$jogo["Jogo"]["img"],array("class"=>"img-responsive img-thumbnail img-index-game"))
                         .'</div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>'. $jogo["Jogo"]["nome"] .'</h4>
                                </div>
                            </div>
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ',array("controller"=>"jogos","action"=>"view",$jogo["Jogo"]["nome_amigavel"]),array("escape"=>false,'class'=>'link-jogo')); ?>
        <?php endforeach; ?>
    </div>
</div>

<?php echo $this->Html->scriptBlock(''
        . '$(document).ready(function(){'        
        .    '$(".link-jogo").hover(function(){'
        .       '$(this).find(".blogShort").addClass("fundo-verde"); } , function(){'
        .       '$(this).find(".blogShort").removeClass("fundo-verde");'
        .    '});'
        . '});'
        
        
        ,array('inline'=>false)); ?>

