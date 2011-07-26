<div class="posts form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php __('Admin Add Event'); ?></legend>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts', true), array('action' => 'index'));?></li>
	</ul>
</div>