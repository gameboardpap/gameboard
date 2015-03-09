<div class="usuarios form">
<?php echo $this->Form->create('Usuario',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('primeiro_nome');
		echo $this->Form->input('avatar',array('type' => 'file'));
		echo $this->Form->input('descricao');
		echo $this->Form->input('ultimo_nome');
		echo $this->Form->input('data_nascimento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
