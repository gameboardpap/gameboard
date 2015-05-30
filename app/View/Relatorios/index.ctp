<br/>
<?php 
$optEquipes['']='Todo o portal';
$optEquipes['equipes']='Todas as minhas desenvolvedora';

    if($equipes) {
        foreach($equipes as $key => $value) {
            $optEquipes[$key]='Apenas desenvolvedora '.$value;
        }
    }

    if($jogos) {
        foreach($jogos as $jogo) {
            $optJogo[$jogo['Jogo']['id']]=$jogo['Jogo']['nome'];
        }
    }
?>
<div class="row">
    <div class="col-md-4">
        <legend>Jogos mais baixados</legend>
        <?php echo $this->Form->create('Relatorio',array('url'=>array('controller'=>'Relatorios','action'=>'maisBaixados'))); ?>
        <label>Período do relatório: </label>
        <?php echo $this->Form->select('periodo',array(''=>'Todos os dias','1'=>'Último dia','7'=>'Últimos sete dias','15'=>'Últimos quinze dias', '30'=>'Últimos 30 dias','90'=>'Últimos 90 dias','180'=>'Últimos 180 dias','365'=>'Últimos 365 dias'),array('class'=>'form-control','empty'=>false)) ?>
        <br/>
        <label>Todo o site ou apenas minha desenvolvedora: </label>
        <?php echo $this->Form->select('gama',$optEquipes,array('class'=>'form-control','empty'=>false)); ?>
        <br/>
        <?php echo $this->Form->end(array('label'=>'Gerar relatório','class'=>'btn btn-orange form-control')); ?>
    </div>
    <div class="col-md-4">
        <legend>Jogos melhores avaliados</legend>
        <?php echo $this->Form->create('Relatorio',array('url'=>array('controller'=>'Relatorios','action'=>'melhoresAvaliados'))); ?>
        <label>Período do relatório: </label>
        <?php echo $this->Form->select('periodo',array(''=>'Todos os dias','1'=>'Último dia','7'=>'Últimos sete dias','15'=>'Últimos quinze dias', '30'=>'Últimos 30 dias','90'=>'Últimos 90 dias','180'=>'Últimos 180 dias','365'=>'Últimos 365 dias'),array('class'=>'form-control','empty'=>false)) ?>
        <br/>
        <label>Todo o site ou apenas minha desenvolvedora: </label>
        <?php echo $this->Form->select('gama',$optEquipes,array('class'=>'form-control','empty'=>false)); ?>
        <br/>
        <?php echo $this->Form->end(array('label'=>'Gerar relatório','class'=>'btn btn-orange form-control')); ?>
    </div>
    <div class="col-md-4">
        <legend>Todos os feedbacks</legend>
        <?php if($jogos) { ?> 
            <?php echo $this->Form->create('Relatorio',array('url'=>array('controller'=>'Relatorios','action'=>'todosFeedbacks'))); ?>
            <label>Período do relatório: </label>
            <?php echo $this->Form->select('periodo',array(''=>'Todos os dias','1'=>'Último dia','7'=>'Últimos sete dias','15'=>'Últimos quinze dias', '30'=>'Últimos 30 dias','90'=>'Últimos 90 dias','180'=>'Últimos 180 dias','365'=>'Últimos 365 dias'),array('class'=>'form-control','empty'=>false)) ?>
            <br/>
            <label>Selecione o jogo: </label>
            <?php echo $this->Form->select('jogo',$optJogo,array('class'=>'form-control','empty'=>false)); ?>
            <br/>
            <?php echo $this->Form->end(array('label'=>'Gerar relatório','class'=>'btn btn-orange form-control')); ?>
        <?php } else { ?>
            <div class="alert alert-warning">Você não possui nenhuma equipe e/ou jogos enviados por ela! Você precisa adicionar um jogo para ter acesso a este relatório!</div>
        <?php }  ?>
    </div>
</div>