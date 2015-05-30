<br/>
<div class="row">
    <div class="col-md-10">
        <?php if($equipes){ ?>
            <?php foreach($equipes as $equipe): ?>
            <legend>Desenvolvedora: <?php echo $this->Html->link($equipe['Equipe']['nome_equipe'],array('controller'=>'desenvolvedoras','action'=>'visualizar',$equipe['Equipe']['nome_amigavel'])); ?> <?php echo $this->Html->link('Editar desenvolvedora',array('controller'=>'desenvolvedoras','action'=>'editar',$equipe['Equipe']['nome_amigavel']),array('class'=>'btn btn-orange')); ?></legend>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome do jogo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($jogos as $jogo): ?>
                        <?php if($jogo['Jogo']['equipe_id']==$equipe['Equipe']['id']): ?>
                            <tr>
                                <td><?php echo $this->Html->link($jogo['Jogo']['nome'],array('controller'=>'jogos','action'=>'visualizar',$jogo['Jogo']['nome_amigavel'])); ?></td>
                                <td><?php echo $this->Html->link('Editar jogo',array('controller'=>'jogos','action'=>'editar',$jogo['Jogo']['nome_amigavel']),array('class'=>'btn btn-blue')); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endforeach; ?>
        <?php } else { ?>
            Você deve possuir uma equipe para poder gerenciar!
        <?php } ?>
    </div>
    <div class="col-md-2">
        <legend>Criar novo</legend>
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->Html->link('Novo jogo',array('controller'=>'novojogo'),array('class'=>'btn btn-blue form-control')); ?>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->Html->link('Nova desenvolvedora',array('controller'=>'novadev'),array('class'=>'btn btn-orange form-control')); ?>
            </div>
        </div>        
    </div>
</div>
