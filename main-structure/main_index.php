<?php
if(have_posts()) {

while ( have_posts() ) { 

the_post();

echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

echo '<div class="rect">';
echo '<h1 class="qwe-page-title"><a href="';
the_permalink();	
echo'">  ';
the_title();
echo '</a></h1>';
echo '<br/>';
echo '<br/>';
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}
the_content('<br/><p class="push_button">Read more </p>');
echo '</div>';
echo '<div class="postedby">';
echo '<a href="';
the_author_link();

//rtl ltr
$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

if ($qwe_dir=='ltr'){

	echo '">By : ';

}
elseif($qwe_dir=='rtl'){ 

	echo '">by a : ';

}

the_author();
echo "</a>";
echo '<a href="';
the_permalink();


//rtl ltr

if ($qwe_dir=='ltr'){

	echo '">Posted on : ';

}
elseif($qwe_dir=='rtl'){ 

	echo '">at a : ';

}
the_date( get_option( 'date_format', 'F Y'));
echo '</a>';
the_category();
echo '<a style="display:none;"> , Tags :';
the_tags();
echo "</a>";
echo '<br/>';
echo '</div>';
// echo '</div>';//qwe-col-xs .... qwe-col-vs



echo '</div>';//end post class
}
}else { echo "No Content Found , or there is nothing posted By you yet";}					            

?>	

<span class="qwe-prev-post">
	 <?php previous_posts_link(); ?> 
</span>
<span class="qwe-next-post">
	<?php next_posts_link(); ?>
</span>  
<div class=" qwe-col-xs-9 qwe-col-lg-9 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
<div class="qwe-comments">
 <?php comments_template('comments.php'); ?>
 </div>
</div>
