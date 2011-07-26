<div class="posts index">
	<h2><?php __('Posts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>title</th>
			<th>body</th>
			<th>created</th>
			<th>modified</th>
			<th class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($posts as $post):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $post['Post']['id']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['title']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['body']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['created']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true),array('controller'=>'posts', 'action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller'=>'posts', 'action' => 'edit', $post['Post']['id'])); ?>
			</td>
	</tr>
<?php endforeach; ?>
	</table>
	