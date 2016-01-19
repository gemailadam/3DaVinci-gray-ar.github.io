<?php
/*
 * Template Name:  2 column 1 image banner 
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
<div class="qwe-container">
<div class="contain qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
	<!-- 1) header-->
	<header>
		<?php get_template_part('page-templates/slice'); ?>
	</header>
	<!-- 2 ) main -->
	<div class="main">
		<div class="qwe-row">
			<!-- 2-1 ) page part -->
			<div class="page">
				<div class=" qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 ">
					<?php get_template_part('main-structure/main_page'); ?>
				</div>
			</div>
			<!-- end page part -->   
			<!--End page-->
			<!-- 2-2 ) sidebar part if you want -->
			<div class="sidebar">
				<div class="qwe-col-lg-3 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-3">
					<?php get_sidebar(); ?>
				</div>	
			</div>
			<!--End sidebar-->
		</div>
		<!--End qwe-row -->
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
<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->
</body>
</html>	