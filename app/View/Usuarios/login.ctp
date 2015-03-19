<?php $this->assign('title', 'Login'); ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-center">
                <?php 
                    echo $this->Form->create('Usuario',
                        array(
                            'class'=> 'form-horizontal',
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
                    echo $this->Form->input('username', 
                        array(
                            'label' => 
                            array (
                                'class'=>'col-md-4 control-label',
                                'text' => 'Usuário'
                            ),
                            'placeholder'=>'Informe seu nome de usuário (Login) cadastrado'
                        )
                    );
                    echo $this->Form->input('password', 
                        array(
                            'label' => 
                            array (
                                'class'=>'col-md-4 control-label',
                                'text' => 'Senha'
                            ),
                            'placeholder'=>'Informe sua senha pessoal e intransferível'
                        )
                    );    
                ?>
                <div class="row">
                    <div class="col-md-7 text-right">
                        <?php echo $this->Form->end(array(
                            'label'=>'Entrar',
                            'class'=>'btn btn-default',
                            'before'=>'',
                            'after'=>''
                            )); 
                        ?>
                    </div>
                    <div class="col-md-5 text-left">    
                        <?php echo $this->Html->link('Esqueci minha senha',array('controller'=>'usuarios','action'=>'esqueciMinhaSenha'), array('class'=>'btn btn-orange')); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3>Não possui cadastro?</h3>
                <?php echo $this->Html->link('Clique aqui para se cadastrar',array('controller'=>'','action'=>'Cadastrar'),array('class'=>'btn btn-blue')); ?>
            </div>
        </div>
    </div>
</div>