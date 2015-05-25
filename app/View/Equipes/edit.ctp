<?php $this->assign('title', 'Editar jogo'); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <?php 
                    echo $this->Form->create('Equipe',
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
                    echo $this->Form->input('id');
                    echo $this->Form->input('nome_equipe');
                    echo $this->Form->input('logo',
                                            array(
                                            'type' => 'file',
                                            'class'=>'',
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'Logo da desenvolvedora'
                                                )
                                            )
                                            );
                    echo $this->Form->input('desc_equipe');
                    echo $this->Form->input('Usuario');
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