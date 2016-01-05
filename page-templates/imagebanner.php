
<?php
/*
 * Template Name:  banner 1 image only 
 * Description: Page template without sidebar
 */
?>
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

<?php get_template_part('page-templates/head_html'); ?>
<style>


.widget-banner {display: none;}
.qwe-slideshow {display: none;}
</style>
</head>
<body <?php body_class( ); ?> >
	<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-vs-12">

		<!-- 1) header-->
		<header>
			<div class="row">
				<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12">
<section class="site-title" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<div class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></div>'; ?>

</section>
<br/>


<section class="one-image-only banner row-xs-5 row-lg-5 row-md-5 row-sm-5 col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12" >
	<?php 
	$imageTotal=1;
	$description[1]='First article about 3DaVinci Portfolio theme designed for WordPress , its compleatly free with GPL v2 licences for more information click the button';
	$imagelink[1]='';
	$logo2=get_bloginfo('template_directory');//different than bloginfo , bloginfo make echo , echo must print on screen if there is no " "
	$logo="".$logo2 .'/images/logo.png';
	?>
	<div class="gallerycontainer">
		<div class="galleryPreviewContainer">
			<div class="galleryPreviewImage_static">
				<?php 
				echo '<img class="previewImage" src="';echo get_theme_mod('image1_id','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image1.jpg');echo '" alt=""/>';
				?>
			</div>
			<div class="logo">
				<!-- <img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""> -->
				<?php echo '<img id="logo" src="';echo get_theme_mod('logo_id',$logo);echo '" alt=""/>';
				?>
			</div>
		</div>
		<div class="gallerydescription_static">
			<?php 
			echo '<div class="description1"><div class="desbg"><a href="';echo get_theme_mod('text_description_link1_id','');echo '">';echo get_theme_mod('description1_id','هذا وصف بلينك للصوه ويمكنك الضغط على الزر للوصول للصفحه المطلوبه');echo '</a></div><a href="';echo get_theme_mod('button_description_link1_id','');echo '"><input type="submit" onClick="" name="button1" value="';echo get_theme_mod( 'button1_id','اضغط 1' );echo '"/></a></div>';
			?>
		</div>	
	</div>
</section>

			<!--img id="btn" src="<?php bloginfo('template_directory'); ?>/images/btn.png" alt="" usemap="#planetmap"-->
<div class="row-xs-5 row-lg-5 row-md-5 row-sm-5 row-vs-5"></div> 
<!-- <div class="clearfix"></div> -->
<map name="planetmap">
  <area class="circlarrow" shape="poly" coords="0,0,0,150,75,75" href="#" alt="Sun" onmouseover="this.style.Color='#FF7f00';" onmouseout="this.blur();">
  <area class="circrarrow" shape="poly" coords="150,150,150,0,75,75" href="#" alt="Mercury" onmouseover="this.focus();this.style.backgroundColor='#00FF00';" onmouseout="this.blur();">
  <area class="circtarrow" shape="poly" coords="150,0,150,150,75,75" href="venus.htm" alt="Venus">
  <area class="circbarrow" shape="poly" coords="0,0,0,1500,75,75" href="venus.htm" alt="Venus">
</map> 
<br/>
<div class="row">
<section class="qwe-nav row col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12 row-xs-2 row-lg-3" >
	<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
</section>
</div>
<br/>
<br/>



	</header>
	<!-- 2 ) main -->
	<div class="main">
		<div class="row">

			<!-- 2-1 ) page part -->
			<div class="page">
				<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 ">

					<?php get_template_part('page-templates/main_page'); ?>

				</div>
			</div>
			<!-- end page part -->   


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
<!-- End Container-->
<?php get_template_part('page-templates/script'); ?>

<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
</body>
</html>