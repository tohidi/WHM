

<div class="span-24 last">
			<div class="floatleft" style="margin-right:20px;">
						<?php echo$html->link ($html->image('whm_logo.gif'), array('controller'=>'pages', 'action'=>'about'),array('escape'=>false)) ;?>
			</div>
			<div id="sub_green">				
									<?php
												echo $html->link('<div class="subnav_text">History</div>', array ('controller'=> 'pages', 'action' => 'history'),array('escape'=>false));
									?>
			</div>
			<div id="sub_purple">
									<?php
												echo $html->link('<div class="subnav_text">FAQs</div>', array('controller'=>'pages', 'action' => 'ask_us'),array('escape'=>false));
									?>
			</div>
			<div id="sub_blue">				
									<?php
												echo $html->link('<div class="subnav_text">Staff</div>', array('controller'=>'pages', 'action' => 'staff'),array('escape'=>false));
									?>
			</div>
			<div id="sub_rust">
									<?php
												echo $html->link('<div class="subnav_text">Contact</div>', array('controller'=>'pages', 'action' => 'contact'),array('escape'=>false));
									?>
			</div>
</div>
