<!-- admin edit screen-->

<?php 
echo $javascript->link('ckeditor/ckeditor.js');
echo $javascript->link('ckfinder/ckfinder.js'); 
?> 

<script type="text/javascript">
var editor = CKEDITOR.replace( 'bodyck' ); //html tag #ID
CKFinder.SetupCKEditor( editor, '<?php echo $ckfinderPath ?>') ;
</script> 



<div class="posts form">
<?php echo $this->Form->create('Post');?>
	<fieldset>
		<h2><?php __('Edit Post'); ?></h2>
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('body',array ('style' => 'width:800px', 'id' => 'bodyck'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
<div class="actions" style="padding:10px 0px;">

		<?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Post.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Post.id'))); ?>
		<?php echo $this->Html->link(__('List Posts', true), array('action' => 'index'));?>
	
</div>
</div>

