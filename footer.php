<div class="qwe-row">
<div class="qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
<br/>					



<!-- Start footer -->

<?php 
$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

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
$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

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
$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

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

<div class="qwe-col-lg-12 qwe-col-xs-12">
<section class="footer3-rtl">
	<?php $index='footer 3'; dynamic_sidebar( 'footer 3' ); ?>
</section>
</div>

<?php } ?>

<!-- End footer 3 -->

<div class="qwe-col-lg-12 qwe-col-xs-12">

<section class="blur footer-img">


</section>
</div>


<?php 
$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

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
	<p><a href="http://inspiration-inspection.ml/">copy ar rtl</a></p>
</section>

<?php } ?>

</div>
</div>
