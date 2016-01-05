<?php 

				$thumbdescription[1]='some description text 1 ';
				$thumbdescription[2]='some description text 2 ';
				$thumbdescription[3]='some description text 3  some description text 3  some description text 3 some description text 3 ';
				$thumbdescription[4]='some description text 4 ';
				$thumbdescription[5]='some description text 5 ';
				$thumbdescription[6]='some description text 6 ';
				$thumbdescription[7]='some description text 7 ';
				$thumbdescription[8]='some description text 8 ';


				$imagelink[1]='';
				$imagelink[2]='';
				$imagelink[3]='';
				$imagelink[4]='';
				$imagelink[5]='';
				$imagelink[6]='';
				$imagelink[7]='';
				$imagelink[8]='';
 ?>


<section class="sectionthumb col-xs-12 col-lg-12 col-md-12 col-sm-12">
	
			 	<div class="gallerythumContainer">
			 			<?php 
			 		
		 				// for ($t=2; $t <= 4; $t++) { 
		 				?>
<!-- 		 				<div class="thumbwrapper">
		 				<div class="galleryThumbnil">
		 			 -->
		 				<?php	
		 					// echo '<img src="';echo get_template_directory_uri();echo '/images/image'.$t.'.jpg" alt=""/></a>'; 
		 				?>
					
						<!-- </div> -->
						
						<?php
						// echo '<div class="des thumbdescription'.$t.'"><a><p>'.$thumbdescription[$t].'<p></a><br/><input type="submit" name="button'.$t.'" value="button';
						?>

						<?php  //echo get_theme_mod( 'name'.$t,'button'.$t ); ?>

						<?php
						// echo '" />';

						// echo '</div></div>';
		 				// }
		 			
		 			    ?>

		 			    <div class="thumbwrapper">
		 			    	<!-- indicator 1 -->
		 			    	<div class="galleryThumbnil">
			 				<?php echo '<img src="';echo get_theme_mod('indicator_image1_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg');echo '" alt=""/>';
		 			    	?>
		 			    	</div>

		 			    	<div class="des thumbdescription1">
		 			    
		 			    		<?php echo '<a href="';echo get_theme_mod('indicator1_description_id','');echo '"><p>';echo get_theme_mod('indicator1_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

	 			    		<br/>

	 			    			<?php echo '<a href="';echo get_theme_mod('button_indicator1_link_id','');echo '"><input type="submit" name="btn_indicator1" value="';echo get_theme_mod( 'button_indicator1_id','button1' );echo '"/></a>'; ?>

		 			    	</div>

		 			    	<!-- indicator 2 -->
		 			    	<div class="galleryThumbnil">
			 				<?php echo '<img src="';echo get_theme_mod('indicator_image2_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg');echo '" alt=""/>';
		 			    	?>
		 			    	</div>

		 			    	<div class="des thumbdescription2">
		 			    
		 			    		<?php echo '<a href="';echo get_theme_mod('indicator2_description_id','');echo '"><p>';echo get_theme_mod('indicator2_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

	 			    		<br/>

	 			    			<?php echo '<a href="';echo get_theme_mod('button_indicator2_link_id','');echo '"><input type="submit" name="btn_indicator2" value="';echo get_theme_mod( 'button_indicator2_id','button1' );echo '"/></a>'; ?>

		 			    	</div>

		 			    	<!-- indicator 3 -->
		 			    	<div class="galleryThumbnil">
			 				<?php echo '<img src="';echo get_theme_mod('indicator_image3_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/image8.jpg');echo '" alt=""/>';
		 			    	?>
		 			    	</div>

		 			    	<div class="des thumbdescription3">
		 			    
		 			    		<?php echo '<a href="';echo get_theme_mod('indicator3_description_id','');echo '"><p>';echo get_theme_mod('indicator3_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

	 			    		<br/>

	 			    			<?php echo '<a href="';echo get_theme_mod('button_indicator3_link_id','');echo '"><input type="submit" name="btn_indicator3" value="';echo get_theme_mod( 'button_indicator3_id','button1' );echo '"/></a>'; ?>

		 			    	</div>

		 			    </div>	
<!-- 			 		3 indicators rectangle images
 -->			 		
			 	</div>
			 
</section>
