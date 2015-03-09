<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nickname'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primeiro Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['primeiro_nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avatar'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['avatar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimo Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ultimo_nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Nascimento'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['data_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
