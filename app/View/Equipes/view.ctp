<?php debug($equipe); ?>
div class="equipes view">
<h2><?php echo __('Equipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipe['Equipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Equipe'); ?></dt>
		<dd>
			<?php echo h($equipe['Equipe']['nome_equipe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc Equipe'); ?></dt>
		<dd>
			<?php echo h($equipe['Equipe']['desc_equipe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($equipe['Equipe']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($equipe['Equipe']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($equipe['Equipe']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipe'), array('action' => 'edit', $equipe['Equipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipe'), array('action' => 'delete', $equipe['Equipe']['id']), array(), __('Are you sure you want to delete # %s?', $equipe['Equipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($equipe['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nickname'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Primeiro Nome'); ?></th>
		<th><?php echo __('Avatar'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Ultimo Nome'); ?></th>
		<th><?php echo __('Data Nascimento'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($equipe['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['nickname']; ?></td>
			<td><?php echo $usuario['email']; ?></td>
			<td><?php echo $usuario['password']; ?></td>
			<td><?php echo $usuario['primeiro_nome']; ?></td>
			<td><?php echo $usuario['avatar']; ?></td>
			<td><?php echo $usuario['descricao']; ?></td>
			<td><?php echo $usuario['ultimo_nome']; ?></td>
			<td><?php echo $usuario['data_nascimento']; ?></td>
			<td><?php echo $usuario['created']; ?></td>
			<td><?php echo $usuario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array(), __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
