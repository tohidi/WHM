<div id="main_content" class="fade_green">
<div class="span-18" id="left_side">
<div id="header_image">
			<?php echo $html->image('kindergarten.jpg');?>
</div>

			<div id="left_content">
						<strong>Why WHM?</strong>
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
									<?php echo $this->element('aboutnav'); ?>
						</div>
			</div>
</div>