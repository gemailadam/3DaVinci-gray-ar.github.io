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
the_date('F Y');
echo '</a>';
the_category();
echo "<a> , Tags :</a>";
the_tags();							
echo '<br/>';

echo '</div>';

echo '</div>';//post-id and post-class


endwhile;
else :
	echo "No Content Found , or there is nothing Page By you yet";
endif;

?>	

<span class="qwe-prev-post">
	<?php previous_post_link();previous_posts_link(); ?>
</span>

<span class="qwe-next-post">
	
	<?php next_post_link();next_posts_link(); ?>
</span>  


<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 col-vs-12">
	<div class="qwe-comments">
		<?php comments_template();//if no comment.php use wordpress default file ?> 
	</div>
</div>

