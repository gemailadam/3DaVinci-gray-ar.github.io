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
							echo '<br/>';

							echo '</div>';
							
							echo '</div>';//post-id and post-class


							endwhile;
							else :
								echo "No Content Found , or there is nothing Page By you yet";
							endif;

							?>	

							<span class="">
								<?php previous_post_link(); ?>
							</span>

							<span class="fl-ri">
								
								<?php next_post_link(); ?>
							</span>  

			<?php // get_template_part('/page-templates/comments.php' ); ?>
			<?php // comments_template( 'page-templates/comments.php' ); ?> 
			<?php comment_form( ); ?> 
