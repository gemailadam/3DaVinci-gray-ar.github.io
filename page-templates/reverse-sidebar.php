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
                 <?php get_header(); ?>
    </header>
		<!-- 2 ) main -->
		<div class="main">
		<div class="row">
			
		    <!-- 2-2 ) left sidebar  -->
			<div class="sidebar">
                	<?php get_sidebar(); ?>
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
					<?php get_footer(); ?>
		</footer>
		<!-- End footer-->
	
	</div>
	<!-- End Container-->
	<?php get_template_part('main-structure/script'); ?>

</body>
</html>