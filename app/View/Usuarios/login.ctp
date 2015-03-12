<div class="section section-breadcrumbs">
    <div class="container">
        <!--<div class="row">-->
            <!--<div class="col-md-12">-->
                <h1>login</h1>
            <!--</div>-->
        <!--</div>-->
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
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
                <?php echo $this->Form->end(array(
                    'label'=>'Entrar',
                    'class'=>'btn btn-default',
                    'before'=>'<div class="form-group"> <div class="col-md-2 col-md-offset-1">',
                    'after'=>'</div> </div>'
                    )); 
                ?>
                </form>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3>Não possui cadastro?</h3>
                <?php echo $this->Html->link('Clique aqui para se cadastrar',array('controller'=>'','action'=>'Cadastrar'),array('class'=>'btn btn-blue')); ?>
            </div>
        </div>
    </div>
</div>