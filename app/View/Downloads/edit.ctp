<div class="downloads form">
<?php echo $this->Form->create('Download'); ?>
	<fieldset>
		<legend><?php echo __('Edit Download'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('jogo_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('feedback');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Download.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Download.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Downloads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
