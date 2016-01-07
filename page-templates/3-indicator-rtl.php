<?php 
/*
Template Name: 3 indicator & reverse sidebar
*/ ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->
<head>


		<?php get_template_part('main-structure/head_html'); ?>
<style>

.one-image-only{display: none;}
.widget-banner {display: none;}
</style>
</head>
<body <?php body_class( ); ?> >
<div class="container ">
	<div class="contain col-lg-12 col-md-12 col-sm-12 col-xs-12 col-vs-12">

		<!-- 1) header-->
		<header>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php get_header();	?>

					<section class="sectionthumb col-xs-12 col-lg-12 col-md-12 col-sm-12">
		
				 	<div class="gallerythumContainer">

			 		<div class="thumbwrapper">
 			    	<!-- indicator 1 -->
 			    	<div class="galleryThumbnil">
	 				<?php echo '<img src="';echo get_theme_mod('indicator_image1_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image1.jpg');echo '" alt=""/>';?>
 			    	</div>

 			    	<div class="des thumbdescription1">
 			    
 			    		<?php echo '<a href="';echo get_theme_mod('indicator1_description_link_id','#');echo '"><p>';echo get_theme_mod('indicator1_id','this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

			    		<br/>

			    			<?php echo '<a href="';echo get_theme_mod('button_indicator1_link_id','#');echo '"><input type="submit" name="btn_indicator1_id" value="';echo get_theme_mod( 'button_indicator1_id','button1' );echo '"/></a>'; ?>

 			    	</div>
</div>
<div class="thumbwrapper">

 			    	<!-- indicator 2 -->
 			    	<div class="galleryThumbnil">
	 				<?php echo '<img src="';echo get_theme_mod('indicator_image2_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image3.jpg');echo '" alt=""/>';
 			    	?>
 			    	</div>

 			    	<div class="des thumbdescription2">
 			    
 			    		<?php echo '<a href="';echo get_theme_mod('indicator2_description_link_id','#');echo '"><p>';echo get_theme_mod('indicator2_id','this whhh is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

			    		<br/>

			    			<?php echo '<a href="';echo get_theme_mod('button_indicator2_link_id','#');echo '"><input type="submit" name="btn_indicator2_id" value="';echo get_theme_mod( 'button_indicator2_id','button2' );echo '"/></a>'; ?>

 			    	</div>
</div>
<div class="thumbwrapper">

 			    	<!-- indicator 3 -->
 			    	<div class="galleryThumbnil">
	 				<?php echo '<img src="';echo get_theme_mod('indicator_image3_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image4.jpg');echo '" alt=""/>';?>
 			    	</div>

 			    	<div class="des thumbdescription3">
 			    
 			    		<?php echo '<a href="';echo get_theme_mod('indicator3_description_link_id','#');echo '"><p>';echo get_theme_mod('indicator3_id','koloioi this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

			    		<br/>

			    		<?php echo '<a href="';echo get_theme_mod('button_indicator3_link_id','#');echo '"><input type="submit" name="btn_indicator3_id" value="';echo get_theme_mod( 'button_indicator3_id','button3' );echo '"/></a>'; ?>

 			    	</div>

 				    </div>	

				 	</div>
				 
				</section>
				</div>
			</header>
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
					<!-- 2-2 ) sidebar part if you want -->
					<div class="sidebar">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-3">
							<?php get_sidebar(); ?>
							<br/>
						</div>
					</div>
					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-9">
							

						<?php get_template_part('main-structure/main_page'); ?>

						</div>
					</div>



				</div>
				<!--End Row -->
			</div>
			<!--End main -->
			<br>
			<!-- 3 ) footer-->
			<footer>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<br/>					
						<?php get_footer(); ?>
					</div>
				</div>
			</footer>
			<!-- End footer-->
</div>			
</div>
<!-- End Container-->
	
	<?php get_template_part('main-structure/script'); ?>

	</body>
	</html>