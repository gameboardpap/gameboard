<div class="jogos form">
<?php echo $this->Form->create('Jogo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jogo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('img');
		echo $this->Form->input('equipe_id');
		echo $this->Form->input('faixa_etaria');
		echo $this->Form->input('n_downloads');
		echo $this->Form->input('link');
		echo $this->Form->input('nome_amigavel');
		echo $this->Form->input('info_adicional');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Genero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jogo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jogo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
	</ul>
</div>
