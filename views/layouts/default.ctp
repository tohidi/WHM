<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php echo $html->docType('xhtml-trans'); ?>
<html>
    <head>
        <title>
            <?php echo $title_for_layout;?>
        </title>
				<?php echo $html->css('screen');?>
				<?php echo $html->css('ie');?>
    </head>
<body>        
<div class="container">
			<div id="navigation">
						<?php echo $this->element('mainnav'); ?>
			</div>												

							
<div>
									<?php echo $session->flash(); ?><!--Displays flash messages to browser (setflash)-->
									<?php echo $content_for_layout; ?><!--Views Content comes into browser-->
</div>        
			

<br clear="all" />			

</div><!--container-->
</body>   
</html>
