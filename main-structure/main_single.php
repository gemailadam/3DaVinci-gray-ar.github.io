<?php
if(have_posts()) : 
	while ( have_posts() ) : the_post();

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-adam' ); ?>>
<?php							

echo '<div class="rect">';
echo '<h1 class="qwe-page-title"><a>';
the_title();
echo '</a></h1>';
echo '<br/>';
echo '<br/>';
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}
the_content('<br/>Read more >>');
echo "</div>";
echo '<div class="postedby">';
echo '<a href="';
the_author_link();
echo '">  ';
the_author();
echo '</a>';
echo '<a href="';
the_permalink();	
echo '">  ';
the_date( get_option( 'date_format', 'F Y'));
echo '</a>';
the_category();
echo "<a style='display:none;''> , Tags :";
the_tags();
echo "</a>";
echo '</div>';

echo '</div>';//post-id and post-class

endwhile;
else :
	echo "No Content Found , or there is nothing Page By you yet";
endif;

?>	

<span class="qwe-prev-post">
	<?php previous_post_link(); ?>
</span>

<span class="qwe-next-post">
	
	<?php next_post_link(); ?>
</span>  

<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 col-vs-12">
	<div class="qwe-comments">
		<?php comments_template();//if no comment.php use wordpress default file */?> 
<?php /*get_template_part('comments'); */?>
		
	</div>
</div>

