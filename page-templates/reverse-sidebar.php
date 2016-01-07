<?php
/*
 * Template Name: 2 column reverse Sidebar
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
                 <?php get_header(); ?>
            </div>
    </header>
		<!-- 2 ) main -->
		<div class="main">
		<div class="row">
			
		    <!-- 2-2 ) left sidebar  -->
			<div class="sidebar">
				<div class=" col-xs-3 col-lg-3 col-md-12 col-sm-12 ">
                	<?php get_sidebar(); ?>
                	<br/>
				</div>
			</div>
			<!-- end sidebar part -->

			<!-- 2-1 ) page part -->
			<div class="page">
				<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 ">
					
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

</body>
</html>