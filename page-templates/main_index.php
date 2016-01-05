	<?php
					if(have_posts()) {

					while ( have_posts() ) { 

					the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-adam' ); ?>>
<?php
					echo '<div class="rect">';
					echo '<h1 class="qwe-page-title"><a href="';
					the_permalink();	
					echo'">  ';
					the_title();
					echo '</a></h1>';
					echo '<br/>';
					
					echo '<br/>';
					
					the_content('<br/><p class="push_button">Read more </p>');
					echo '</div>';
					echo '<div class="postedby">';
					echo '<a href="';
					the_author_link();
					echo '">By : ';
					the_author();
					echo "</a>";
					echo '<a href="';
					the_permalink();	
					echo '">Posted on : ';
					the_date('F Y');
					echo '</a>';
					the_category();
					echo '<br/>';
					echo '</div>';

					echo '</div>';//post-id and post-class

					}
					}else { echo "No Content Found , or there is nothing posted By you yet";}					            
	?>	