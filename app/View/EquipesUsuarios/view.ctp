<div class="equipesUsuarios view">
<h2><?php echo __('Equipes Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipesUsuario['EquipesUsuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipesUsuario['Equipe']['id'], array('controller' => 'equipes', 'action' => 'view', $equipesUsuario['Equipe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipesUsuario['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $equipesUsuario['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($equipesUsuario['EquipesUsuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($equipesUsuario['EquipesUsuario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipes Usuario'), array('action' => 'edit', $equipesUsuario['EquipesUsuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipes Usuario'), array('action' => 'delete', $equipesUsuario['EquipesUsuario']['id']), array(), __('Are you sure you want to delete # %s?', $equipesUsuario['EquipesUsuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipes Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
