<div class="equipesUsuarios form">
<?php echo $this->Form->create('EquipesUsuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Equipes Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('equipe_id');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EquipesUsuario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EquipesUsuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
