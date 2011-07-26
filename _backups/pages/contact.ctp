<div id="main_content" class="fade_green">
<div class="span-18" id="left_side">

<div id="header_image">
			<?php echo $html->image('enroll.jpg');?>
</div>

			
			
<div id="left_content" style="width:400px;">
			
<?php echo $this->Form->create('Contact');?>
	<div class="contactform">
									<?php	echo $form->input('name', array ('label' => 'Your Name', 'div'=>'formfield')); ?>
									<?php	echo $form->input('email', array ('label' => 'Your Email', 'div'=>'formfield')); ?>
									<?php	echo $form->input('subject',array ('label' => 'Subject', 'div'=>'formfield')); ?>
									<?php	echo $form->textarea('message',array ('value' => 'Enter Your Comments', 'div'=>'formfield')); ?>
				<br clear="all"/>
<?php echo $this->Form->end(__('Submit', true));?>
		

				<div style="padding:20px 0px 0px;"">
			West Hills Montessori<br/>
			21 Sweet Hollow Road<br/>
			Huntington, NY 11743<br/>
       631-385-3342<br/>
			<a href="mailto:info@westhillsmontessori.org">info@westhillsmontessori.org</a><br/>						
			</div>
			
				
				
	</div>		
			
</div>
</div>
			
<div class="span-6 last" id="right_side">
			<div id="right_content" class="ball_rust">
						<div class="right_title">
									<?php echo $post[0]['Post']['title']; ?>
						</div>
			</div>
</div>

			<br clear="all" />
			<div id="sub_nav">
						<div class="span-24 last">
									<?php echo $this->element('enrollnav'); ?>
						</div>
			</div>
</div>			