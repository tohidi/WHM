<div id="main_content" class="fade_yellow">
<div class="span-18" id="left_side">
<div id="header_image">
			<?php echo $html->image('preschool.jpg');?>
</div>

			<div id="left_content">
						<strong>Preschool</strong>
						<p>
						<?php echo $post[0]['Post']['body']; ?>
						</p>
			</div>
</div>			
			<div class="span-6 last" id="right_side">
						<div id="right_content" class="ball_purple">
									<div class="right_title">
									<?php echo $post[0]['Post']['title']; ?>
									</div>
						</div>
			</div>
<br clear="all" />
			<div id="sub_nav">
						<div class="span-24 last">
									<?php echo $this->element('programsnav'); ?>
						</div>
			</div>
</div>