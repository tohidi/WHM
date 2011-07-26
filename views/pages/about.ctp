<div id="main_content" class="fade_rust">
<div class="span-18" id="left_side">
<div id="header_image">
			<?php echo $html->image('about.jpg');?>
</div>

						<div id="left_content">
<?php 
echo $post[0]['Post']['body']; 
?>
						</div>
</div>
			<div class="span-6 last" id="right_side">
						<div id="right_content" class="ball_green">
									<div class="right_title">
												<?php echo $post[0]['Post']['title']; ?>
									</div>
						</div>
			</div>
<br clear="all" />
			<div id="sub_nav">
						<div class="span-24 last">
									<?php echo $this->element('aboutnav'); ?>
						</div>
			</div>
</div>