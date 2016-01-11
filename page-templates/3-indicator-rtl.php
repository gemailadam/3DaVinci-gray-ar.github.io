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

<section class="site-title" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<div class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></div>'; ?>

</section>
<br/>


<section class="qwe-slideshow banner row-xs-5 row-lg-5 row-md-5 row-sm-5 col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12" >

	<?php 
    //total number of images you will add to slideshow
	$imageTotal=8;
	$description[1]='First article about 3DaVinci Portfolio theme designed for WordPress , its compleatly free with GPL v2 licences for more information click the button';
	$description[2]='some description text 2 ';
	$description[3]='some description text 3 ';
	$description[4]='some description text 4 ';
	$description[5]='some description text 5 ';
	$description[6]='some description text 6 ';
	$description[7]='some description text 7 ';
	$description[8]='some description text 8 ';

	$imagelink[1]='';
	$imagelink[2]='';
	$imagelink[3]='';
	$imagelink[4]='';
	$imagelink[5]='';
	$imagelink[6]='';
	$imagelink[7]='';
	$imagelink[8]='';

	$logo2=get_template_directory_uri() ;

	$logo="".$logo2 .'/images/logo.png';

	?>
	<div class="gallerycontainer">


 	<div class="galleryPreviewContainer">
 		<div class="galleryPreviewImage">
 			<?php 
 
 			echo '<img class="previewImage1" src="';echo get_theme_mod('image1_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image1.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage2" src="';echo get_theme_mod('image2_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image2.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage3" src="';echo get_theme_mod('image3_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image3.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage4" src="';echo get_theme_mod('image4_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image4.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage5" src="';echo get_theme_mod('image5_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image5.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage6" src="';echo get_theme_mod('image6_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image6.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage7" src="';echo get_theme_mod('image7_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image7.jpg');echo '" alt=""/>';
 			echo '<img class="previewImage8" src="';echo get_theme_mod('image8_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image8.jpg');echo '" alt=""/>';

 			?>
 		</div>

 		<div class="logo">
 			<?php echo '<img id="logo" src="';echo get_theme_mod('logo_id',$logo);echo '" alt=""/>';
 			?>
 		</div>


 		<?php 
 		$qwe_dir=get_theme_mod( 'qwe-rtl', 'rtl' );

 		if ($qwe_dir=='ltr'){
 			?>

 			<div class="galleryPreviewarrow">
 				<a class="previousslidearrow row-static-1" href="#" >&lt;</a>
 				<a href="#" class="nextslidearrow row-static-1">&gt;</a>
 			</div>

 			<?php 
 		}
 		elseif($qwe_dir=='rtl')
 		{ 
 			?>

 			<div class="galleryPreviewarrow">
 				<a class="previousslidearrow row-static-1" href="#" >&gt;</a>
 				<a href="#" class="nextslidearrow row-static-1">&lt;</a>
 			</div>


 			<?php } ?>

 		</div>
 		<div class="gallerydescription">
 			<?php 
 			echo '<div class="description1"><div class="desbg"><a href="';echo get_theme_mod('text_description_link1_id','');echo '">';echo get_theme_mod('description1_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link1_id','');echo '"><input type="submit" onClick="" name="button1" value="';echo get_theme_mod( 'button1_id','اضغط 1' );echo '"/></a></div>';
 			echo '<div class="description2"><div class="desbg"><a href="';echo get_theme_mod('text_description_link2_id','');echo '">';echo get_theme_mod('description2_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link2_id','');echo '"><input type="submit" onClick="" name="button2" value="';echo get_theme_mod( 'button2_id','اضغط 2' );echo '"/></a></div>';
 			echo '<div class="description3"><div class="desbg"><a href="';echo get_theme_mod('text_description_link3_id','');echo '">';echo get_theme_mod('description3_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link3_id','');echo '"><input type="submit" onClick="" name="button3" value="';echo get_theme_mod( 'button3_id','اضغط 3' );echo '"/></a></div>';
 			echo '<div class="description4"><div class="desbg"><a href="';echo get_theme_mod('text_description_link4_id','');echo '">';echo get_theme_mod('description4_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link4_id','');echo '"><input type="submit" onClick="" name="button4" value="';echo get_theme_mod( 'button4_id','اضغط 4' );echo '"/></a></div>';
 			echo '<div class="description5"><div class="desbg"><a href="';echo get_theme_mod('text_description_link5_id','');echo '">';echo get_theme_mod('description5_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link5_id','');echo '"><input type="submit" onClick="" name="button5" value="';echo get_theme_mod( 'button5_id','اضغط 5' );echo '"/></a></div>';
 			echo '<div class="description6"><div class="desbg"><a href="';echo get_theme_mod('text_description_link6_id','');echo '">';echo get_theme_mod('description6_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link6_id','');echo '"><input type="submit" onClick="" name="button6" value="';echo get_theme_mod( 'button6_id','اضغط 6' );echo '"/></a></div>';
 			echo '<div class="description7"><div class="desbg"><a href="';echo get_theme_mod('text_description_link7_id','');echo '">';echo get_theme_mod('description7_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link7_id','');echo '"><input type="submit" onClick="" name="button7" value="';echo get_theme_mod( 'button7_id','اضغط 7' );echo '"/></a></div>';
 			echo '<div class="description8"><div class="desbg"><a href="';echo get_theme_mod('text_description_link8_id','');echo '">';echo get_theme_mod('description8_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link8_id','');echo '"><input type="submit" onClick="" name="button8" value="';echo get_theme_mod( 'button8_id','اضغط 8' );echo '"/></a></div>';

 			?>
 		</div>	

 		<div class="galleryNavigationBullets">
 			<?php 

 			if ($qwe_dir=='ltr'){
 				for ($b=1; $b <=$imageTotal ; $b++) { 
 					echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
 				}
 			}
 			elseif($qwe_dir=='rtl'){
 				for ($b=8; $b >=1 ; $b--) { 
 					echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
 				}
 			} 

 			?>


 		</div>

 	</div>
 </section>



 <div class="row-xs-5 row-lg-5 row-md-5 row-sm-5 row-vs-5"></div> 
 <br/>
 

 	<div class="row">

 	<?php 
 		$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

 	if ($qwe_dir=='ltr'){
 		?>

 		<section class="qwe-nav row col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12" >
 			<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

 		</section>

 		<?php 
 	}
 	elseif($qwe_dir=='rtl')
 	{ 
 		?>

 		<section class="qwe-nav-rtl row col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12" >
 			<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

 		</section>


 		<?php } ?>

 	</div>
 	<br/>
 	<br/>


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
			</div>
			</header>
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
					<!-- 2-2 ) sidebar part if you want -->
					<div class="sidebar">
							<?php get_sidebar(); ?>
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
						<?php get_footer(); ?>
			</footer>
			<!-- End footer-->
</div>			
</div>
<!-- End Container-->
	
	<?php get_template_part('main-structure/script'); ?>

	</body>
	</html>