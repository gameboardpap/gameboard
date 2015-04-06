<div class="downloads view">
<h2><?php echo __('Download'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($download['Download']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jogo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($download['Jogo']['id'], array('controller' => 'jogos', 'action' => 'view', $download['Jogo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($download['Usuario']['username'], array('controller' => 'usuarios', 'action' => 'view', $download['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feedback'); ?></dt>
		<dd>
			<?php echo h($download['Download']['feedback']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Download'), array('action' => 'edit', $download['Download']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Download'), array('action' => 'delete', $download['Download']['id']), array(), __('Are you sure you want to delete # %s?', $download['Download']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Downloads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jogos'), array('controller' => 'jogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jogo'), array('controller' => 'jogos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
