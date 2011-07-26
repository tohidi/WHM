

<div class="span-24 last">
			<div class="floatleft" style="margin-right:20px;">
						<?php echo$html->link ($html->image('whm_logo.gif'), array('controller'=>'pages', 'action'=>'about'),array('escape'=>false)) ;?>
			</div>
			<div id="sub_green">				
									<?php
												echo $html->link('<div class="subnav_text">Toddler</div>', array ('controller'=> 'pages', 'action' => 'toddler'),array('escape'=>false));
									?>
			</div>
			<div id="sub_purple">
									<?php
												echo $html->link('<div class="subnav_text">Preschool</div>', array('controller'=>'pages', 'action' => 'preschool'),array('escape'=>false));
									?>
			</div>
			<div id="sub_blue">				
									<?php
												echo $html->link('<div class="subnav_text" style="letter-spacing:-1px;">Kindergarten</div>', array('controller'=>'pages', 'action' => 'kindergarten'),array('escape'=>false));
									?>
			</div>
			<div id="sub_rust">
									<?php
												echo $html->link('<div class="subnav_text">Elementary</div>', array('controller'=>'pages', 'action' => 'elementary'),array('escape'=>false));
									?>
			</div>
</div>
