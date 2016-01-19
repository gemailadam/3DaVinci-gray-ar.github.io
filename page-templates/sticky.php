<div class="qwe-row">
<div class="qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
<section>
<img style="margin:0;"src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</section>
<section class="site-title" >
	<?php echo '<p><a href="'; the_permalink();echo '">'; bloginfo('title');echo '</a></p><br/>'; ?>
	<?php echo '<div class="title-description"><a href="'; the_permalink();echo '">'; bloginfo('description');echo '</a></div>'; ?>

</section>
<br/>


<section class="qwe-slideshow banner qwe-row-xs-5 qwe-row-lg-5 qwe-row-md-5 qwe-row-sm-5 qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12" >

	<?php 
	//total number of images you will add to slideshow
	$imageTotal=8;
	$description[1]='First article about 3DaVinci Portfolio theme designed for WordPress , its compleatly free with GPL v2 licences for more information click the button';
	$description[2]='some description text 2 ';
	$description[3]='some description text 3 ';
	$description[4]='some description text 4 ';
	$description[5]='some description text 5 ';
	$description[6]='some description text 6 ';
	$description[7]='some description text 7 ';
	$description[8]='some description text 8 ';

	$imagelink[1]='';
	$imagelink[2]='';
	$imagelink[3]='';
	$imagelink[4]='';
	$imagelink[5]='';
	$imagelink[6]='';
	$imagelink[7]='';
	$imagelink[8]='';

	$logo2=get_template_directory_uri() ;

	$logo=$logo2 .'/images/logo.png';

	$image11=get_template_directory_uri();
	$image21=get_template_directory_uri();
	$image31=get_template_directory_uri();
	$image41=get_template_directory_uri();
	$image51=get_template_directory_uri();
	$image61=get_template_directory_uri();
	$image71=get_template_directory_uri();
	$image81=get_template_directory_uri();

	$image1=$image11 .'/images/image1.jpg';
	$image2=$image21 .'/images/image2.jpg';
	$image3=$image31 .'/images/image3.jpg';
	$image4=$image41 .'/images/image4.jpg';
	$image5=$image51 .'/images/image5.jpg';
	$image6=$image61 .'/images/image6.jpg';
	$image7=$image71 .'/images/image7.jpg';
	$image8=$image81 .'/images/image8.jpg';

	?>
	<div class="gallerycontainer">


		<div class="galleryPreviewContainer">
			<div class="galleryPreviewImage">
				<?php 

				echo '<img class="previewImage1" src="';echo get_theme_mod('image1_qwe',$image1);echo '" alt=""/>';
				echo '<img class="previewImage2" src="';echo get_theme_mod('image2_qwe',$image2);echo '" alt=""/>';
				echo '<img class="previewImage3" src="';echo get_theme_mod('image3_qwe',$image3);echo '" alt=""/>';
				echo '<img class="previewImage4" src="';echo get_theme_mod('image4_qwe',$image4);echo '" alt=""/>';
				echo '<img class="previewImage5" src="';echo get_theme_mod('image5_qwe',$image5);echo '" alt=""/>';
				echo '<img class="previewImage6" src="';echo get_theme_mod('image6_qwe',$image6);echo '" alt=""/>';
				echo '<img class="previewImage7" src="';echo get_theme_mod('image7_qwe',$image7);echo '" alt=""/>';
				echo '<img class="previewImage8" src="';echo get_theme_mod('image8_qwe',$image8);echo '" alt=""/>';

				?>
			</div>

			<div class="logo">
				<?php echo '<img id="logo" src="';echo get_theme_mod('logo_qwe',$logo);echo '" alt=""/>';
				?>
			</div>


			<?php 
			$qwe_dir=get_theme_mod( 'qwe-rtl', 'rtl' );

			if ($qwe_dir=='ltr'){
				?>

				<div class="galleryPreviewarrow">
					<a class="previousslidearrow qwe-row-static-1" href="#" >&lt;</a>
					<a href="#" class="nextslidearrow qwe-row-static-1">&gt;</a>
				</div>

				<?php 
			}
			elseif($qwe_dir=='rtl')
			{ 
				?>

				<div class="galleryPreviewarrow">
					<a class="previousslidearrow qwe-row-static-1" href="#" >&gt;</a>
					<a href="#" class="nextslidearrow qwe-row-static-1">&lt;</a>
				</div>


				<?php } ?>

			</div>
			<div class="gallerydescription">
				<?php 
				echo '<div class="description1"><div class="desbg"><a href="';echo get_theme_mod('text_description_link1_qwe','');echo '">';echo get_theme_mod('description1_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link1_qwe','');echo '"><input type="submit" onClick="" name="button1" value="';echo get_theme_mod( 'button1_qwe','button 1' );echo '"/></a></div>';
				echo '<div class="description2"><div class="desbg"><a href="';echo get_theme_mod('text_description_link2_qwe','');echo '">';echo get_theme_mod('description2_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link2_qwe','');echo '"><input type="submit" onClick="" name="button2" value="';echo get_theme_mod( 'button2_qwe','button 2' );echo '"/></a></div>';
				echo '<div class="description3"><div class="desbg"><a href="';echo get_theme_mod('text_description_link3_qwe','');echo '">';echo get_theme_mod('description3_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link3_qwe','');echo '"><input type="submit" onClick="" name="button3" value="';echo get_theme_mod( 'button3_qwe','button 3' );echo '"/></a></div>';
				echo '<div class="description4"><div class="desbg"><a href="';echo get_theme_mod('text_description_link4_qwe','');echo '">';echo get_theme_mod('description4_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link4_qwe','');echo '"><input type="submit" onClick="" name="button4" value="';echo get_theme_mod( 'button4_qwe','button 4' );echo '"/></a></div>';
				echo '<div class="description5"><div class="desbg"><a href="';echo get_theme_mod('text_description_link5_qwe','');echo '">';echo get_theme_mod('description5_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link5_qwe','');echo '"><input type="submit" onClick="" name="button5" value="';echo get_theme_mod( 'button5_qwe','button 5' );echo '"/></a></div>';
				echo '<div class="description6"><div class="desbg"><a href="';echo get_theme_mod('text_description_link6_qwe','');echo '">';echo get_theme_mod('description6_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link6_qwe','');echo '"><input type="submit" onClick="" name="button6" value="';echo get_theme_mod( 'button6_qwe','button 6' );echo '"/></a></div>';
				echo '<div class="description7"><div class="desbg"><a href="';echo get_theme_mod('text_description_link7_qwe','');echo '">';echo get_theme_mod('description7_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link7_qwe','');echo '"><input type="submit" onClick="" name="button7" value="';echo get_theme_mod( 'button7_qwe','button 7' );echo '"/></a></div>';
				echo '<div class="description8"><div class="desbg"><a href="';echo get_theme_mod('text_description_link8_qwe','');echo '">';echo get_theme_mod('description8_qwe','write your description here');echo '</a></div><a href="';echo get_theme_mod('button_description_link8_qwe','');echo '"><input type="submit" onClick="" name="button8" value="';echo get_theme_mod( 'button8_qwe','button 8' );echo '"/></a></div>';

				?>
			</div>	

			<div class="galleryNavigationBullets">
				<?php 

				if ($qwe_dir=='ltr'){
					for ($b=1; $b <=$imageTotal ; $b++) { 
						echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
					}
				}
				elseif($qwe_dir=='rtl'){
					for ($b=8; $b >=1 ; $b--) { 
						echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
					}
				} 

				?>


			</div>

		</div>
	</section>



	<div class="qwe-row-xs-5 qwe-row-lg-5 qwe-row-md-5 qwe-row-sm-5 qwe-row-vs-5"></div> 
	<br/>


	<div class="qwe-row">

		<?php 
		$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

		if ($qwe_dir=='ltr'){
			?>

			<section class="qwe-nav qwe-row qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12" >
				<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

			</section>

			<?php 
		}
		elseif($qwe_dir=='rtl')
		{ 
			?>

			<section class="qwe-nav-rtl qwe-row qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-vs-12" >
				<nav ><?php wp_nav_menu(array('theme_location'=>'Primary') ); ?></nav>

			</section>


			<?php } ?>

		</div>
		<br/>
		<br/>


		<section class="sectionthumb qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">

			<div class="gallerythumContainer">

				<div class="thumbwrapper">
					<!-- indicator 1 -->
					<div class="galleryThumbnil">
						<?php echo '<img src="';echo get_theme_mod('indicator_image1_qwe',$image1);echo '" alt=""/>';?>
					</div>

					<div class="des thumbdescription1">

						<?php echo '<a href="';echo get_theme_mod('indicator1_description_link_qwe','#');echo '"><p>';echo get_theme_mod('indicator1_qwe','this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

						<br/>

						<?php echo '<a href="';echo get_theme_mod('button_indicator1_link_qwe','#');echo '"><input type="submit" name="btn_indicator1_qwe" value="';echo get_theme_mod( 'button_indicator1_qwe','button1' );echo '"/></a>'; ?>

					</div>
				</div>
				<div class="thumbwrapper">

					<!-- indicator 2 -->
					<div class="galleryThumbnil">
						<?php echo '<img src="';echo get_theme_mod('indicator_image2_qwe','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image3.jpg');echo '" alt=""/>';
						?>
					</div>

					<div class="des thumbdescription2">

						<?php echo '<a href="';echo get_theme_mod('indicator2_description_link_qwe','#');echo '"><p>';echo get_theme_mod('indicator2_qwe','this whhh is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

						<br/>

						<?php echo '<a href="';echo get_theme_mod('button_indicator2_link_qwe','#');echo '"><input type="submit" name="btn_indicator2_qwe" value="';echo get_theme_mod( 'button_indicator2_qwe','button2' );echo '"/></a>'; ?>

					</div>
				</div>
				<div class="thumbwrapper">

					<!-- indicator 3 -->
					<div class="galleryThumbnil">
						<?php echo '<img src="';echo get_theme_mod('indicator_image3_qwe','https://raw.githubusercontent.com/gemailadam/inspiration-inspection.github.io/master/images/images/image4.jpg');echo '" alt=""/>';?>
					</div>

					<div class="des thumbdescription3">

						<?php echo '<a href="';echo get_theme_mod('indicator3_description_link_qwe','#');echo '"><p>';echo get_theme_mod('indicator3_qwe','koloioi this is a descripion for an article or Portfolio or page you like , this description is just a fast link indicator');echo '</p></a>'; ?>

						<br/>

						<?php echo '<a href="';echo get_theme_mod('button_indicator3_link_qwe','#');echo '"><input type="submit" name="btn_indicator3_qwe" value="';echo get_theme_mod( 'button_indicator3_qwe','button3' );echo '"/></a>'; ?>

					</div>

				</div>	

			</div>

		</section>
	</div>
</div>