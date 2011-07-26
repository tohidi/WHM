<div class="posts form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php __('Admin Edit Event'); ?></legend>
	<?php
	    echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('event_date');
		echo $this->Form->input('event_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	
		<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Event.id'))); ?>
		<?php echo $this->Html->link(__('List Event', true), array('action' => 'index'));?>
	
</div>