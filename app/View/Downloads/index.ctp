<div class="downloads index">
	<h2><?php echo __('Downloads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('jogo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('feedback'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($downloads as $download): ?>
	<tr>
		<td><?php echo h($download['Download']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($download['Jogo']['id'], array('controller' => 'jogos', 'action' => 'view', $download['Jogo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($download['Usuario']['username'], array('controller' => 'usuarios', 'action' => 'view', $download['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($download['Download']['feedback']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $download['Download']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $download['Download']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $download['Download']['id']), array(), __('Are you sure you want to delete # %s?', $download['Download']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Download'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
