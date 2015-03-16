<div class="jogos view">
<h2><?php echo __('Jogo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jogo['Equipe']['nome_equipe'], array('controller' => 'equipes', 'action' => 'view', $jogo['Equipe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faixa Etaria'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['faixa_etaria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Downloads'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['n_downloads']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Amigavel'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['nome_amigavel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info Adicional'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['info_adicional']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($jogo['Jogo']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jogo'), array('action' => 'edit', $jogo['Jogo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jogo'), array('action' => 'delete', $jogo['Jogo']['id']), array(), __('Are you sure you want to delete # %s?', $jogo['Jogo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Generos'); ?></h3>
	<?php if (!empty($jogo['Genero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome Genero'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jogo['Genero'] as $genero): ?>
		<tr>
			<td><?php echo $genero['id']; ?></td>
			<td><?php echo $genero['nome_genero']; ?></td>
			<td><?php echo $genero['created']; ?></td>
			<td><?php echo $genero['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'generos', 'action' => 'view', $genero['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'generos', 'action' => 'edit', $genero['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'generos', 'action' => 'delete', $genero['id']), array(), __('Are you sure you want to delete # %s?', $genero['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
