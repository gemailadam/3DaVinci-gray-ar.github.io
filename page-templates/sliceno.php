<div class="qwe-row">
<div class=" qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
<section>
	<img style="margin:0;"src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</section>
<section class="site-title" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<div class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></div>'; ?>
</section>
<br/>
<section class="qwe-banner banner qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12" >
	<?php dynamic_sidebar('banner'); ?>
</section>
<div class="qwe-row-xs-5 qwe-row-lg-5 qwe-row-md-5 qwe-row-sm-5 qwe-row-vs-5"></div> 
<!-- <div class="clearfix"></div> -->
<br/>
<div class="qwe-row">
	<?php 
	$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );
	if ($qwe_dir=='ltr'){
		?>
		<section class="qwe-nav row qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12 " >
			<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
		</section>
		<?php 
	}
	elseif($qwe_dir=='rtl')
	{ 
		?>
		<section class="qwe-nav-rtl row qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12 " >
			<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>
		</section>
		<?php } ?>
	</div>
	<br/>
	<br/>
</div>
