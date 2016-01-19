<div class="qwe-row">
<div class="qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12">
<section>
	<img style="margin:0;"src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</section>
<section class="site-title" >
<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
<?php echo '<div class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></div>'; ?>
</section>
<br/>
<section class="one-image-only banner qwe-row-xs-5 qwe-row-lg-5 qwe-row-md-5 qwe-row-sm-5 qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12" >
<?php 
$imageTotal=1;
$description[1]='First article about 3DaVinci Portfolio theme designed for WordPress , its compleatly free with GPL v2 licences for more information click the button';
$imagelink[1]='';
$logo2=get_template_directory_uri();//different than bloginfo , bloginfo make echo , echo must print on screen if there is no " "
$logo="".$logo2 .'/images/logo.png';
$image11=get_template_directory_uri();
$image1=$image11 .'/images/image1.jpg';
?>
<div class="gallerycontainer">
	<div class="galleryPreviewContainer">
		<div class="galleryPreviewImage_static">
			<?php 
			echo '<img class="previewImage1" src="';echo get_theme_mod('image1_qwe',$image1);echo '" alt=""/>';
			?>
		</div>
		<div class="logo">
			<?php echo '<img id="logo" src="';echo get_theme_mod('logo_qwe',$logo);echo '" alt=""/>';
			?>
		</div>
	</div>
	<div class="gallerydescription_static">
		<?php 
		echo '<div class="description1"><div class="desbg"><a href="';echo get_theme_mod('text_description_link1_qwe','');echo '">';echo get_theme_mod('description1_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link1_qwe','');echo '"><input type="submit" onClick="" name="button1" value="';echo get_theme_mod( 'button1_qwe','button 1' );echo '"/></a></div>';
		?>
	</div>	
</div>
</section>
<div class="qwe-row-xs-5 qwe-row-lg-5 qwe-row-md-5 qwe-row-sm-5 qwe-row-vs-5"></div> 
<!-- <div class="clearfix"></div> -->
<br/>
<div class="qwe-row">

<?php 
$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

if ($qwe_dir=='ltr'){
	?>

	<section class="qwe-nav qwe-row qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12 " >
		<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

	</section>

	<?php 
}
elseif($qwe_dir=='rtl')
{ 
	?>

	<section class="qwe-nav-rtl qwe-row qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12 " >
		<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

	</section>


	<?php } ?>

</div>
<br/>
<br/>



