

<div class="span-24 last">
			<div class="floatleft" style="margin-right:20px;">
						<?php echo$html->link ($html->image('whm_logo.gif'), array('controller'=>'pages', 'action'=>'about'),array('escape'=>false)) ;?>
			</div>
			<div id="sub_green">				
									<?php
												echo $html->link('<div class="subnav_text">Classrooms</div>', array ('controller'=> 'pages', 'action' => 'classrooms'),array('escape'=>false));
									?>
			</div>
			<div id="sub_purple">
									<?php
												echo $html->link('<div class="subnav_text">Playground</div>', array('controller'=>'pages', 'action' => 'playground'),array('escape'=>false));
									?>
			</div>
			<div id="sub_blue">				
									<?php
												echo $html->link('<div class="subnav_text" style="letter-spacing:-1px;">Living Pond</div>', array('controller'=>'pages', 'action' => 'nature_trail'),array('escape'=>false));
									?>
			</div>
			<div id="sub_rust">
									<?php
												echo $html->link('<div class="subnav_text">Athletics</div>', array('controller'=>'pages', 'action' => 'living_pond'),array('escape'=>false));
									?>
			</div>
</div>
