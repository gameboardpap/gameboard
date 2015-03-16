<div class="generos view">
<h2><?php echo __('Genero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genero['Genero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Genero'); ?></dt>
		<dd>
			<?php echo h($genero['Genero']['nome_genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($genero['Genero']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($genero['Genero']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Genero'), array('action' => 'edit', $genero['Genero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Genero'), array('action' => 'delete', $genero['Genero']['id']), array(), __('Are you sure you want to delete # %s?', $genero['Genero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jogos'); ?></h3>
	<?php if (!empty($genero['Jogo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Img'); ?></th>
		<th><?php echo __('Equipe Id'); ?></th>
		<th><?php echo __('Faixa Etaria'); ?></th>
		<th><?php echo __('N Downloads'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th><?php echo __('Nome Amigavel'); ?></th>
		<th><?php echo __('Info Adicional'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($genero['Jogo'] as $jogo): ?>
		<tr>
			<td><?php echo $jogo['id']; ?></td>
			<td><?php echo $jogo['nome']; ?></td>
			<td><?php echo $jogo['img']; ?></td>
			<td><?php echo $jogo['equipe_id']; ?></td>
			<td><?php echo $jogo['faixa_etaria']; ?></td>
			<td><?php echo $jogo['n_downloads']; ?></td>
			<td><?php echo $jogo['link']; ?></td>
			<td><?php echo $jogo['nome_amigavel']; ?></td>
			<td><?php echo $jogo['info_adicional']; ?></td>
			<td><?php echo $jogo['descricao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jogos', 'action' => 'view', $jogo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jogos', 'action' => 'edit', $jogo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jogos', 'action' => 'delete', $jogo['id']), array(), __('Are you sure you want to delete # %s?', $jogo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
