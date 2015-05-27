<?php $this->assign('title', 'Cadastrar'); ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <?php 
                    echo $this->Form->create('Usuario',
                        array(
                            'type' => 'file',
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
                                            'placeholder'=>'Informe seu nome de usuário (Login) desejado'
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
                                echo $this->Form->input('primeiro_nome', 
                                        array(
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'Primeiro nome'
                                                ),
                                                'placeholder'=>'Informe seu primeiro nome (Ou nomes no caso de nome composto)'
                                            )
                                        );
                                echo $this->Form->input('ultimo_nome', 
                                        array(
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'Último nome'
                                                ),
                                                'placeholder'=>'Informe seu sobrenome (Podendo haver mais do que um)'
                                            )
                                        );
                                echo $this->Form->input('email', 
                                        array(
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'E-mail'
                                                ),
                                                'placeholder'=>'Informe um e-mail válido'
                                            )
                                        );
                                echo $this->Form->input('data_nascimento', array(
                                        'label' => array (
                                            'class'=>'col-md-4 control-label',
                                            'text' => 'Data de nascimento'
                                        ),
                                        'between' => '<div class="col-md-8"><div class="row"><div class="col-md-4">',
                                        'separator'=>'</div><div class="col-md-4">',
                                        'after' => '</div> </div> </div>',
                                        'monthNames' => false,
                                        'dateFormat' => 'DMY',
                                        'escape'=>false,
                                        'minYear' => date('Y') - 100
                                ));                                
                                echo $this->Form->input('avatar',
                                        array(
                                            'type' => 'file',
                                            'class'=>'',
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'Imagem de perfil'
                                                )
                                            )
                                        );
                                echo $this->Form->input('descricao', 
                                        array(
                                            'label' => 
                                            array (
                                                'class'=>'col-md-4 control-label',
                                                'text' => 'Sobre você'
                                                ),
                                                'placeholder'=>'Fale sobre você'
                                            ));    
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