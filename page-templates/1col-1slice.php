<?php
/*
 * Template Name:  1 column 1 image banner 
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

	<?php get_template_part('main-structure/head_html'); ?>
	
</head>
<body <?php body_class( ); ?> >
	<div class="container">
		<div class="contain col-lg-12 col-md-12 col-sm-12 col-xs-12 col-vs-12">

			<!-- 1) header-->
			<header>
				<div class="row">
					<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12">
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

						<div class="row-xs-5 row-lg-5 row-md-5 row-sm-5 row-vs-5"></div> 
						<!-- <div class="clearfix"></div> -->
						<br/>
						<div class="row">

							<?php 
					 		$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

							if ($qwe_dir=='ltr'){
								?>

								<section class="qwe-nav row col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12 " >
									<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

								</section>

								<?php 
							}
							elseif($qwe_dir=='rtl')
							{ 
								?>

								<section class="qwe-nav-rtl row col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12 " >
									<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

								</section>


								<?php } ?>

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

										<?php get_template_part('main-structure/main_page'); ?>

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
									<?php get_footer(); ?>
						</footer>
						<!-- End footer-->

					</div>
					<!-- End Container-->
					<?php get_template_part('main-structure/script'); ?>

					<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
				</body>
				</html>