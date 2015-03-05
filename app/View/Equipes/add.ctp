<div class="equipes form">
<?php echo $this->Form->create('Equipe',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Equipe'); ?></legend>
	<?php
		echo $this->Form->input('nome_equipe');
		echo $this->Form->input('desc_equipe');
		echo $this->Form->input('logo',array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Equipes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
