<div class="generosJogos index">
	<h2><?php echo __('Generos Jogos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('genero_id'); ?></th>
			<th><?php echo $this->Paginator->sort('jogo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($generosJogos as $generosJogo): ?>
	<tr>
		<td><?php echo h($generosJogo['GenerosJogo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($generosJogo['Genero']['nome_genero'], array('controller' => 'generos', 'action' => 'view', $generosJogo['Genero']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($generosJogo['Jogo']['id'], array('controller' => 'jogos', 'action' => 'view', $generosJogo['Jogo']['id'])); ?>
		</td>
		<td><?php echo h($generosJogo['GenerosJogo']['created']); ?>&nbsp;</td>
		<td><?php echo h($generosJogo['GenerosJogo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $generosJogo['GenerosJogo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $generosJogo['GenerosJogo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $generosJogo['GenerosJogo']['id']), array(), __('Are you sure you want to delete # %s?', $generosJogo['GenerosJogo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Generos Jogo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
	</ul>
</div>
