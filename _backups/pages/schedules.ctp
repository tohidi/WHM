<div id="main_content" class="fade_green">
<div class="span-18" id="left_side">
<div id="header_image">
			<?php echo $html->image('enroll.jpg');?>
</div>

			<div id="left_content">
						<strong>Calendar of Events for <?php echo $sch[0][0]['month'];?> <?php echo $sch[0][0]['year'];?></strong>
<br>
						<table cellpadding="0" cellspacing="0">
						<?php foreach ($sch as $event):?>
	    <tr><td cellpadding="0" cellspacing="0"><strong><?php echo $event['events']['title']; ?></strong>&nbsp;</td></tr>

		<tr><td cellpadding="0" cellspacing="0"><?php echo $event[0]['dayname']; ?>, <?php echo $event[0]['month']; ?> <?php echo $event[0]['date']; ?> <br/>
		<div style="font-size:11px;"><?php echo $event['events']['description']; ?>&nbsp;</div></td></tr>
		<tr><td style="font-size:11px; font-style:italic;"><?php echo $event['events']['location']; ?>&nbsp; | <?php echo $event[0]['etime']; ?>&nbsp;</td></tr>
<?php endforeach; ?>
</table>
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
									<?php echo $this->element('enrollnav'); ?>
						</div>
			</div>
</div>