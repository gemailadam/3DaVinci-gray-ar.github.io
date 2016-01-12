<?php 
/*

1- sidebare
2- footer
3- nav_menu
4- banner

*/

/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

 	$defaults_2 = array(
		'before'           => '<p>' . 'Pages:',
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $defaults_2 );

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
///////////// Float sidebar /////////////////
/////////////////////////////////////////////

function qwe_register_float_sidebar() {
$args = array('name' =>'sidebar3',
	'id'=>'sidebar3' ,
	'description'=> 'add wigjet to float sidebar',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_float_sidebar');




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
$args2 = array('name' =>'Footer %d',
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


function theme_queue_js_qwe(){
  if (!is_admin()){
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
      wp_enqueue_script( 'comment-reply' );
  }
}
add_action('get_header', 'theme_queue_js_qwe');


function qwe_custom_comments($comment,$args,$depth){

	$GLOBALS['comment']=$comment;

	?>

		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div id="comment-<?php comment_ID(); ?>">
				<div class="comment-author vcard">
					<?php /*$default2=get_bloginfo('template_directory');$default=$default2.'/images/o.ico';*/ echo get_avatar( $comment, $size='48', $default, $alt  ); ?>

					<?php printf('<city class="fn">%s</city> <span class="says">says:</span>',get_comment_author_link()); ?>
				</div>

				<?php if ($comment->comment_approved=='0') { ?> <!-- to approved waiting admin moderator befor it be visible-->
					<em><?php _e('your comment is awaiting moderation' , 'default'); ?> </em>
					<br />
				<?php } ?>
				
				<div class="comment-meta comment-metadata">
					<a href="<?php echo htmlspecialchars(get_comment_link( $comment->comment_ID )) ?>"><?php printf('%1$s at %2$s',get_comment_date( ),get_comment_time( )); ?></a><?php edit_comment_link( ); ?>
				</div>

				<?php comment_text( ); ?>

				<div class="replay">
					<?php comment_reply_link(array_merge($args,array('depth'=>$depth,'max_depth'=>$args['max_depth']))); ?>
				</div>

			</div>
		

	<?php

}
function custom_theme_setup_qwe() {
	// add_theme_support( $feature, $arguments );
	add_theme_support( 'post-thumbnails', array( 'post', 'movie' ,'page') ); // Posts and Movies
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe' );




function custom_theme_setup_qwe2() {
add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe2' );





function custom_theme_setup_qwe3() {

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe3' );






function custom_theme_setup_qwe4() {
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe4' );






function custom_theme_setup_qwe5() {
add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe5' );




function custom_theme_setup_qwe6() {
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe6' );





function custom_theme_setup_qwe7() {
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup_qwe7' );


/* to add style sheet to editor make your own style-sheet.css and pass it through $stylesheet > add_editor_style( $stylesheet ); */

add_editor_style(  );
 ?>