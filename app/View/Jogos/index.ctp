<div class="jogos index">
	<h2><?php echo __('Jogos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('img'); ?></th>
			<th><?php echo $this->Paginator->sort('equipe_id'); ?></th>
			<th><?php echo $this->Paginator->sort('faixa_etaria'); ?></th>
			<th><?php echo $this->Paginator->sort('n_downloads'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('nome_amigavel'); ?></th>
			<th><?php echo $this->Paginator->sort('info_adicional'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jogos as $jogo): ?>
	<tr>
		<td><?php echo h($jogo['Jogo']['id']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['img']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jogo['Equipe']['nome_equipe'], array('controller' => 'equipes', 'action' => 'view', $jogo['Equipe']['id'])); ?>
		</td>
		<td><?php echo h($jogo['Jogo']['faixa_etaria']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['n_downloads']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['link']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['nome_amigavel']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['info_adicional']); ?>&nbsp;</td>
		<td><?php echo h($jogo['Jogo']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jogo['Jogo']['nome_amigavel'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jogo['Jogo']['nome_amigavel'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jogo['Jogo']['id']), array(), __('Are you sure you want to delete # %s?', $jogo['Jogo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Jogo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
	</ul>
</div>
