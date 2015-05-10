<div class="generosJogos form">
<?php echo $this->Form->create('GenerosJogo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Generos Jogo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('genero_id');
		echo $this->Form->input('jogo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GenerosJogo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GenerosJogo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Generos Jogos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
	</ul>
</div>
