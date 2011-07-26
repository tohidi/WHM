<?php
class MenusController extends AppController{
    var $name = 'Menus';
    
    function main ($selected = 'home'){
        return array (
            'divClass' => 'menu',
            'ulClass' => 'menu',
            'tabs' => array (
                array(
                    'controller' => 'about',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'about' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'ABOUT'                    
                ),
                array(
                    'controller' => 'programs',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'programs' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'PROGRAMS'                 
                ),
               array(
                    'controller' => 'tour',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'tour' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'TOUR'                 
            ),
                array(
                    'controller' => 'enroll',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'enroll' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'ENROLL'                 
                 )
            )
         );
    }
}
?>
<?php
class AboutController extends AppController{
    var $name = 'about_menu';
    
    function main ($selected = 'about_sub'){
        return array (
            'divClass' => 'menu',
            'ulClass' => 'menu',
            'tabs' => array (
                array(
                    'controller' => 'history',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'history' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'HISTORY'                    
                ),
                array(
                    'controller' => 'why_whm',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'why_whm' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'Why WHM'                 
                ),
               array(
                    'controller' => 'staff',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'staff' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'STAFF'                 
            ),
                array(
                    'controller' => 'facility',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'facility' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'FACILITY'                 
                 )
            )
         );
    }
}
?>
<?php
class TourController extends AppController{
    var $name = 'tour_menu';
    
    function main ($selected = 'tour_sub'){
        return array (
            'divClass' => 'menu',
            'ulClass' => 'menu',
            'tabs' => array (
                array(
                    'controller' => 'classrooms',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'classrooms' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'CLASSROOMS'                    
                ),
                array(
                    'controller' => 'playground',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'playground' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'PLAYGROUND'                 
                ),
               array(
                    'controller' => 'nature_trail',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'nature_trail' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'NATURE TRAIL'                 
            ),
                array(
                    'controller' => 'living_pond',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'living_pond' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'LIVING POND'                 
                 )
            )
         );
    }
}
?>
<?php
class ProgramsController extends AppController{
    var $name = 'programs_menu';
    
    function main ($selected = 'programs_sub'){
        return array (
            'divClass' => 'menu',
            'ulClass' => 'menu',
            'tabs' => array (
                array(
                    'controller' => 'toddler',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'toddler' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'TODDLER'                    
                ),
                array(
                    'controller' => 'Preschool',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'preschool' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'PRESCHOOL'                 
                ),
               array(
                    'controller' => 'kindergarten',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'kindergarten' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'KINDERGARTEN'                 
            ),
                array(
                    'controller' => 'elementary',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'elementary' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'ELEMENTARY'                 
                 )
            )
         );
    }
}
?>
<?php
class EnrollController extends AppController{
    var $name = 'enroll_menu';
    
    function main ($selected = 'enroll_sub'){
        return array (
            'divClass' => 'menu',
            'ulClass' => 'menu',
            'tabs' => array (
                array(
                    'controller' => 'forms',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'forms' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'FORMS'                    
                ),
                array(
                    'controller' => 'schedules',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'schedules' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'SCHEDULES'                 
                ),
               array(
                    'controller' => 'ask_us',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'ask_us' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'ASK US'                 
            ),
                array(
                    'controller' => 'contact',
                    'action' => 'index',
                    'params' => '',
                    'aClass' => $selected == 'contact' ? 'selected' : '',
                    'liClass' => '',
                    'text' => 'CONTACT'                 
                 )
            )
         );
    }
}
?>
