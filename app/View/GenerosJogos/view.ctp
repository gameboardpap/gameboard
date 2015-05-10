<div class="generosJogos view">
<h2><?php echo __('Generos Jogo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($generosJogo['GenerosJogo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($generosJogo['Genero']['nome_genero'], array('controller' => 'generos', 'action' => 'view', $generosJogo['Genero']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jogo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($generosJogo['Jogo']['id'], array('controller' => 'jogos', 'action' => 'view', $generosJogo['Jogo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($generosJogo['GenerosJogo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($generosJogo['GenerosJogo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Generos Jogo'), array('action' => 'edit', $generosJogo['GenerosJogo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Generos Jogo'), array('action' => 'delete', $generosJogo['GenerosJogo']['id']), array(), __('Are you sure you want to delete # %s?', $generosJogo['GenerosJogo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos Jogos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Generos Jogo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
	</ul>
</div>
