

<div class="span-24 last">
			<div class="floatleft" style="margin-right:20px;">
						<?php echo$html->link ($html->image('whm_logo.gif'), array('controller'=>'pages', 'action'=>'about'),array('escape'=>false)) ;?>
			</div>
			<div id="sub_green">				
									<?php
												echo $html->link('<div class="subnav_text">Forms</div>', array ('controller'=> 'pages', 'action' => 'forms'),array('escape'=>false));
									?>
			</div>
			<div id="sub_purple">
									<?php
												echo $html->link('<div class="subnav_text">Calendar</div>', array('controller'=>'pages', 'action' => 'schedules'),array('escape'=>false));
									?>
			</div>
			<div id="sub_blue">				
									<?php
												echo $html->link('<div class="subnav_text">Why WHM</div>', array('controller'=>'pages', 'action' => 'why_whm'),array('escape'=>false));
									?>
			</div>
			<div id="sub_rust">
									<?php
												echo $html->link('<div class="subnav_text">Contact</div>', array('controller'=>'pages', 'action' => 'contact'),array('escape'=>false));
									?>
			</div>
</div>
