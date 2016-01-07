
<?php
/*
 * Template Name: 2 column no slideshow
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
							<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12">
								<section class="site-title" >
									<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
									<?php echo '<div class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></div>'; ?>

								</section>
								<br/>

								<section class="one-image-only banner col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12" >
									<?php dynamic_sidebar('banner'); ?>
								</section>
								
								<div class="row-xs-5 row-lg-5 row-md-5 row-sm-5 row-vs-5"></div> 
								<!-- <div class="clearfix"></div> -->
								<br/>
								<div class="row">

									<?php 
							 		$qwe_dir=get_theme_mod( 'qwe-rtl', 'rtl' );

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

								</div>
							</header>
							<!-- 2 ) main -->
							<div class="main">
								<div class="row">

									<!-- 2-1 ) page part -->
									<div class="page">
										<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 ">

											<?php get_template_part('main-structure/main_page'); ?>

										</div>
									</div>
									<!-- end page part -->   

									<!-- 2-3 ) right sidebar  -->
									<div class="sidebar">
										<div class=" col-xs-3 col-lg-3 col-md-12 col-sm-12 ">
											<?php get_sidebar(); ?>
											<br/>
										</div>
									</div>
									<!-- end right sidebar part -->

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
						<?php get_template_part('main-structure/script'); ?>

						<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
					</body>
					</html>