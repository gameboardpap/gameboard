<div class="equipesUsuarios index">
	<h2><?php echo __('Equipes Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('equipe_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($equipesUsuarios as $equipesUsuario): ?>
	<tr>
		<td><?php echo h($equipesUsuario['EquipesUsuario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipesUsuario['Equipe']['id'], array('controller' => 'equipes', 'action' => 'view', $equipesUsuario['Equipe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($equipesUsuario['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $equipesUsuario['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($equipesUsuario['EquipesUsuario']['created']); ?>&nbsp;</td>
		<td><?php echo h($equipesUsuario['EquipesUsuario']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipesUsuario['EquipesUsuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipesUsuario['EquipesUsuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipesUsuario['EquipesUsuario']['id']), array(), __('Are you sure you want to delete # %s?', $equipesUsuario['EquipesUsuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Equipes Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
