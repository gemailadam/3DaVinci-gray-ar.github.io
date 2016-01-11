<?php 
/*woocommerce from page.php
   The page template. 
   Used when an individual Page is queried. 
*/
   ?>
<?php/*
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
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
		<div class="contain col-lg-12 col-md-12 col-sm-12 col-xs-12 col-vs-12">

			<!-- 1) header-->
			<header>
					<?php get_header(); ?>
			</header>
			<!-- 2 ) main -->
			<div class="main">
				<div class="row">
				<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12 col-vs-12">

					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-9 col-vs-12">
							
						<?php woocommerce_content(); ?>

						</div>
					</div>

					<!-- 2-2 ) sidebar part if you want -->

				
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
	
	<?php get_template_part('page-templates/script'); ?>

	</body>
	</html>