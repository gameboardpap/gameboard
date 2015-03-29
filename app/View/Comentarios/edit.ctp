<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comentario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('jogo_id');
		echo $this->Form->input('comentario');
		echo $this->Form->input('referencia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comentario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Comentario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
	</ul>
</div>
