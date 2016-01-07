<!-- Start footer -->

<?php 
$qwe_dir=get_theme_mod( 'qwe-rtl', 'rtl' );

if ($qwe_dir=='ltr'){
 ?>

<section class="footer1">
	<?php dynamic_sidebar( 'footer 1' ); ?>
</section>

<?php 
}
elseif($qwe_dir=='rtl')
	{ 
?>

<section class="footer1-rtl">
	<?php dynamic_sidebar( 'footer 1' ); ?>
</section>

<?php } ?>

<!-- End footer 1-->

<!-- Start footer 2 -->

<?php 
$qwe_dir=get_theme_mod( 'qwe-rtl', 'rtl' );

if ($qwe_dir=='ltr'){
 ?>

<section class="footer2">
	<?php dynamic_sidebar( 'footer 2' ); ?>
</section>
<?php 
}
elseif($qwe_dir=='rtl')
	{ 
?>

<section class="footer2-rtl">
	<?php dynamic_sidebar( 'footer 2' ); ?>
</section>

<?php } ?>


<!-- End footer 2 -->

<!-- Start footer 3-->

<?php 
$qwe_dir=get_theme_mod( 'qwe-rtl', 'rtl' );

if ($qwe_dir=='ltr'){
 ?>


<section class="footer3">
	<?php $index='footer 3'; dynamic_sidebar( 'footer 3' ); ?>
</section>
<?php 
}
elseif($qwe_dir=='rtl')
	{ 
?>

<div class="col-lg-12 col-xs-12">
<section class="footer3-rtl">
	<?php $index='footer 3'; dynamic_sidebar( 'footer 3' ); ?>
</section>
</div>

<?php } ?>

<!-- End footer 3 -->

<div class="col-lg-12 col-xs-12">

<section class="blur footer-img">

 <!--img  style="margin-top:20px;" src="<?php bloginfo('template_directory'); ?>/images/blur4.png " alt=""-->	

</section>
</div>


<?php 

if ($qwe_dir=='ltr'){
 ?>

<section class="copyright">
	<p><a href="http://inspiration-inspection.ml/">&copy;copyright adam</a></p>
</section>
<?php 
}
elseif($qwe_dir=='rtl')
	{ 
?>
<section class="copyright">
	<p><a href="http://inspiration-inspection.ml/">حقوق التأليف والنشر هشام حسين</a></p>
</section>

<?php } ?>

