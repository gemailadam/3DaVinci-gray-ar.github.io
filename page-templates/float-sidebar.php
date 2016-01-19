<?php 
/*
template name: float sidebar
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
<body <?php body_class(); ?> >
<div class="qwe-container">
<div class="contain qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
	<!-- 1) header-->
	<header>
			<?php get_header(); ?>
	</header>
	<!-- 2 ) main -->
	<div class="main">
		<div class="qwe-row">
		<div class=" qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">

			<!-- 2-1 ) page part -->
			<div class="page">
				<div class="qwe-col-xs-9 qwe-col-lg-9 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
				<?php get_template_part('main-structure/main_page'); ?>
				</div>
			</div>

			<!-- 2-2 ) sidebar part if you want -->
			<div class="sidebar3 sidebar3-fixed-top-0">
				<div class="qwe-col-width">

				<div class="subside">
					<p>s i d e b a r</p>
				</div>
				<div class="side">
					<?php dynamic_sidebar('sidebar3'); ?>
				</div>	
				
				</div>
			</div>
	
		</div>
		<!-- end columns -->
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