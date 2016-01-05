<?php 
/*

1- sidebare
2- footer
3- nav_menu
4- banner

*/

/* register widgets for sidebare*/

/////////////////////////////////////////////
///////////// sidebare 1 ////////////////////
/////////////////////////////////////////////

function qwe_register_right_sidebar() {
$args = array('name' =>'sidebar1',
	'id'=>'sidebar1' ,
	'description'=> 'add wigjet to right sidebar',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_right_sidebar');


/////////////////////////////////////////////
///////////// sidebare 2 ////////////////////
/////////////////////////////////////////////

function qwe_register_left_sidebar() {
$args = array('name' => 'sidebar2',
	'id'=>'sidebar2' ,
	'description'=> 'add wigjet to left sidebar if any',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_left_sidebar');


/////////////////////////////////////////////
///////////// banner     ////////////////////
/////////////////////////////////////////////

function qwe_register_banner() {
$args = array('name' => 'banner',
	'id'=>'banner' ,
	'description'=> 'add wigjet to left sidebar if any',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_banner');



/////////////////////////////////////////////
///////////// add Footers ////////////////////
/////////////////////////////////////////////

function qwe_register_footers() {
$args2 = array('name' =>__('Footer %d'),
    'id'=>'footer' ,
    'description'=> 'add another footer',
    'class'  => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' ); 

register_sidebars(3,$args2);

}

add_action('widgets_init','qwe_register_footers');


function qwe_register_nav_menu(){

    $location='Primary';
    $description='Primary menu';
    register_nav_menu( $location, $description );

}
add_action('after_setup_theme','qwe_register_nav_menu' );


 ?>