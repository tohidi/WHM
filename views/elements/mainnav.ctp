
<div class="span-24 last">
			<div id="main_green">				
									<?php
												echo $html->link('<div class="nav_text">About</div>', array ('controller'=> 'pages', 'action' => 'about'),array('escape'=>false));
									?>
			</div>
			<div id="main_purple">
									<?php
												echo $html->link('<div class="nav_text" style="letter-spacing:-1px;">Programs</div>', array('controller'=>'pages', 'action' => 'programs'),array('escape'=>false));
									?>
			</div>
			<div id="main_blue">
									<?php
												echo $html->link('<div class="nav_text">Tour</div>', array('controller'=>'pages', 'action' => 'tour'),array('escape'=>false));
									?>
			</div>
			<div id="main_rust">
									<?php
												echo $html->link('<div class="nav_text">Enroll</div>', array('controller'=>'pages', 'action' => 'enroll'),array('escape'=>false));
									?>
			</div>
			<div class="tagline">
						All Children Grow.  West Hills Children Thrive.
			</div>
</div>
			