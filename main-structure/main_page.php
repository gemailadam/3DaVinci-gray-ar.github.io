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
							the_content('<br/><p class="push_button">Read more </p>');
							echo "</div>";

							echo '</div>';//post-id and post-class
							endwhile;
							else :
								echo "No Content Found , or there is nothing Page By you yet";
							endif;				            
							?>	
							<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 col-vs-12">
								<div class="qwe-comments">
								<?php comments_template(true, ''); ?>
								</div>
						    </div>
						    