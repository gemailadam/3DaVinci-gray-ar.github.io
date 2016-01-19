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
		<?php echo '<meta http-equiv="refresh" content="10;url=';echo get_home_url();echo '" />'; ?>
		<?php get_template_part('main-structure/head_html'); ?>
</head>
<body <?php body_class( ); ?> >
<div class="qwe-container">
<div class="contain qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
		<!-- 1) header-->
		<header>
			<div class="qwe-row">
				<div class="qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
					<?php get_header(); ?>
				</div>
			</header>
			<div class="oops">
				<div class="qwe-row">
					<div class="qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
						<!-- yon add a function to get user searched page to redirect to google with the same name -->
					<?php 
					$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );
					if ($qwe_dir=='ltr'){
					 ?>
						<h1>Oops The Page You Request Is not Found , You will be redirected To Home Page after 5 secands , or click google button to search for this missing page at google cache</h1> 
						<a href="http://www.google.com/"><button style="color:#fff;background:orange;width:100px;height:50px;padding:10px;margin:10px;box-shadow:4px 4px 8px #000;">Google</button></a>
					<?php 
					}
					elseif($qwe_dir=='rtl'){ 
					?>
						<h1>oops rtl</h1> 
						<a href="http://www.google.com/"><button style="color:#fff;background:orange;width:100px;height:50px;padding:10px;margin:10px;box-shadow:4px 4px 8px #000;">Google</button></a>
					<?php } ?>
					</div>
				</div>
			</div>   
			<!-- 2 ) main -->
			<div class="main">
				<div class="qwe-row">
				<div class=" qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
					<!-- 2-1 ) page part -->
					<div class="page">
						<div class="qwe-col-xs-9 qwe-col-lg-9 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
							<div class="rect">
									<?php //get_template_part('main-structure/main_index'); ?>
							</div>	
						</div>
					</div>
					<!-- 2-2 ) sidebar part if you want -->
					<div class="sidebar">
						<div class="qwe-col-lg-3 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-3">
		                	<?php get_sidebar(); ?>
		                </div>	
					</div>
				</div>
				<!-- end columns -->
				</div>
				<!--End Row -->
			</div>
			<!--End main -->
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