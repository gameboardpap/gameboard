<div class="row">
    <div class="col-md-12">
        <?php // if($busca) { ?> <h4>Termo pesquisado: <b><?php // echo $busca; ?></b></h4> <?php // } ?>
        <?php foreach ($equipes as $equipe): ?>
            <?php echo $this->Html->link('
            <div class="row">
                <div class="col-md-12 blogShort">
                    <div class="row">
                        <div class="col-md-2">'. 
                            $this->Html->image("/app/webroot//files/equipe_logo/".$equipe["Equipe"]["logo"],array("class"=>"img-responsive img-thumbnail img-index-game"))
                         .'</div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>'. $equipe["Equipe"]["nome_equipe"] .'</h4>
                                </div>
                            </div>
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ',array("controller"=>"desenvolvedoras","action"=>"visualizar",$equipe["Equipe"]["nome_amigavel"]),array("escape"=>false,'class'=>'link-jogo')); ?>
        <?php endforeach; ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <ul class="pagination">
                <?php
                    echo $this->Paginator->numbers(array(
                            'separator' => null,
                            'modulus'=>5,
                            'ellipsis'=>'...',
                            'tag'=>'li',
                            'currentTag'=>'a',
                            'currentClass'=>'active'
                            )
                    );
                ?>
            </ul>
        </div>
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

