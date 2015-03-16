<?php $this->assign('title', 'Adicionar novo jogo'); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <?php 
                    echo $this->Form->create('Jogo',
                        array(
                            'type' => 'file',
                            'class'=> 'form-horizontal form-add-jogo',
                            'role' => 'form',
                            'inputDefaults' => array(
                                'before' => '<div class="form-group">',
                                'between' => '<div class="col-md-8">',
                                'after' => '</div> </div>',
                                'label'=>array(
                                    'class'=>'col-md-4 control-label'                            
                                ),
                                'class'=>'form-control'
                            )
                        )
                    ); 
                ?>
                <?php
                    echo $this->Form->input('nome');
                    echo $this->Form->input('img',
                                            array(
                                            'type' => 'file',
                                            'class'=>'',
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'Capa do jogo/Imagem principal'
                                                )
                                            )
                                            );
                    echo $this->Form->input('link',
                        array(
                        'type' => 'file',
                        'class'=>'',
                        'label' => 
                        array (
                            'class'=>'col-md-4 control-label',
                            'text' => 'Jogo'
                            )
                        ));
                    echo $this->Form->input('equipe_id');
                    $faixas = array('L' => 'Livre', '10' => 'Acima de 10 anos', '14' => 'Acima de 14 anos', '16' => 'Acima de 16 anos', '18' => 'Acima de 18 anos');
                    echo $this->Form->input('faixa_etaria',array('options'=>$faixas));
                    echo $this->Form->input('info_adicional');
                    echo $this->Form->input('descricao');
                    echo $this->Form->input('Genero');
                ?>
                <?php echo $this->Form->end(array(
                    'label'=>'Cadastrar',
                    'class'=>'btn btn-default',
                    'before'=>'<div class="form-group"> <div class="col-md-offset-7 col-md-2">',
                    'after'=>'</div> </div>'
                    )); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".form-add-jogo").submit(function() {
            var dados = $(this).serialize();
            var url = "<?php echo $this->Html->url(array('controller'=>'jogos','action'=>'add')); ?>";
            $.ajax({
              type: 'post',
              data: dados,
              url: url ,
              success: function(retorno){
                alert("ajax"); 
              }
            });
            
            return false;
        });
    });
</script>