<div class="generos form">
<?php echo $this->Form->create('Genero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Genero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome_genero');
		echo $this->Form->input('Jogo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Genero.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Genero.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
	</ul>
</div>
