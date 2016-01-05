<?php 
/*
index.php
    The main template. If your Theme provides its own templates, index.php must be present. 
*/
 ?>
<?php/*
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=downloaded.pdf");

// The PDF source is in original.pdf
readfile("original.pdf");
*/?>
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

</head>
<body <?php body_class( ); ?> >
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-vs-12">

	<!-- 1) header-->
	<header>
		<div class="row">
			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12">
                 <?php get_header(); ?>
            </div>
    </header>
		<!-- 2 ) main -->
		<div class="main ">
		<div class="row">
			<!-- 2-1 ) page part -->
			<div class="page">
				<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 col-vs-12">
					
				<?php get_template_part('page-templates/main_index'); ?>
										

				</div>
		    </div>

                	<?php /*get_template_part('comments');*/?>
		    <!-- 2-2 ) sidebar part if you want -->
			<div class="sidebar">
				<div class=" col-xs-3 col-lg-3 col-md-12 col-sm-12 col-vs-12">
                	<?php get_sidebar(); ?>
                	<br/>
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-vs-12">
					<br/>
					<?php get_footer(); ?>
				</div>
			</div>
		</footer>
		<!-- End footer-->
	</div>	
</div>
	<!-- End Container-->

		<?php get_template_part('page-templates/script'); ?>

</body>
</html>