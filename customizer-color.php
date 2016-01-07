<style type="text/css">


/*background-color*/
/*background-color*/
/*background-color*/
/*background-color*/
/*background-color*/

/*main background change*/

body {background-color:<?php echo get_theme_mod('body_id','#222'); ?>;}

/*change row_id to container_id*/
.container {background-color:<?php echo get_theme_mod('container_id','#222'); ?>;} 

/*page*/

.page .rect {
    background-color:<?php echo get_theme_mod('page_id','#222'); ?>;
    border-bottom:1px solid <?php echo get_theme_mod('page_border_id','#fff'); ?>;
}

.page .postedby {background-color:<?php echo get_theme_mod('postedby_id','#000'); ?>;
    
    box-shadow:inset 0px -1px 1px #777;
}



/*sidebar*/

div.sidebar aside {background-color:<?php echo get_theme_mod('sidebar_id','#222'); ?>;}



/* footer */
/*change foter1_id foter2_id foter3_id to footer_id*/
section.footer1 {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}
section.footer2 {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}
section.footer3 {background-color:<?php echo get_theme_mod('footer_id','#222'); ?>;}



/* 3 indicators */
/* add */
.gallerythumContainer input {background-color:<?php echo get_theme_mod('3indicators_id','#222'); ?>;}



/* end main background change*/


/*
.galleryPreviewarrow a {background-color:rgba(0,0,0,0.3);}

.galleryPreviewarrow a:hover {background-color: #000;}

.gallerydescription .desbg{background-color:rgba(0, 0, 0, 0.4);}
*/

/*add button_id color */
.gallerydescription > div input {<?php echo get_theme_mod('button_bg_id','#222'); ?>;}

/*add bullets_id color */
.galleryNavigationBullets a {<?php echo get_theme_mod('bullets_id','#222'); ?>;}

/*add bullets_active_id color */
.galleryNavigationBullets a:hover ,.galleryNavigationBullets a.active {<?php echo get_theme_mod('bullets_active_id','#555'); ?>;}
    

/*.gallerydescription_static .desbg{background-color:rgba(0, 0, 0, 0.4);}*/

.gallerydescription_static > div input {<?php echo get_theme_mod('button_bg_id','#222'); ?>;}

/*add upper widget banner bg if used */
section.qwe-banner {<?php echo get_theme_mod('widjet_id','#222'); ?>;}


/*
***********************
**     **********   ***
**      *********   ***
**   *   ********   ***
**   **   *******   ***
**   ***   ******   ***
**   ****   *****   ***
**   *****   ****   ***
**   ******   ***   ***
**   *******   **   ***
**   ********   *   ***
**   *********      ***
***********************
*/

/*
.qwe-nav > nav > div > ul > li:nth-child(odd)  {background-color:orange;}
.qwe-nav > nav > div > ul > li:nth-child(even) {background-color:white; }
.qwe-nav > nav > div > ul > li > a {background-color:#444;}

.qwe-nav > nav > div > ul > li > ul {background-color:transparent; }
.qwe-nav > nav > div > ul > li > ul  > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul  > li > a {background-color:#444;}



.qwe-nav > nav > div > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > a {background-color:#444;}


.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}


.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}



.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}



.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li {background-color:#444;}
.qwe-nav > nav > div > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {background-color:#444;}

*/

/* nav background colors*/
.qwe-nav > nav > div > ul > li:nth-child(odd)  {background-color:orange;}
.qwe-nav > nav > div > ul > li:nth-child(even) {background-color:white; }
.qwe-nav > nav > div > ul > li > a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav > nav > div > ul > li > ul {background-color:transparent; }
.qwe-nav > nav > div > ul > li > ul  li {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav > nav > div > ul > li > ul  li  a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}

.qwe-nav-rtl > nav > div > ul > li:nth-child(odd)  {background-color:orange;}
.qwe-nav-rtl > nav > div > ul > li:nth-child(even) {background-color:white; }
.qwe-nav-rtl > nav > div > ul > li > a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav-rtl > nav > div > ul > li > ul {background-color:transparent; }
.qwe-nav-rtl > nav > div > ul > li > ul  li {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}
.qwe-nav-rtl > nav > div > ul > li > ul  li  a {background-color:<?php echo get_theme_mod('nav_bg_id','#444'); ?>;}


/* 3 indicator button bg*/
.gallerythumContainer input {background:<?php echo get_theme_mod('button_bg_id','#222');}



@media (max-width: 768px){

}

/* media_part_lte_500__qwe */

@media (max-width: 500px){


}



/*text color*/
/*text color*/
/*text color*/
/*text color*/
/*text color*/

/* all links color */

a{color:#fff;/*<?php echo get_theme_mod('a_id','#fff'); ?>;*/}
a:visited {color:#aaa;/*<?php echo get_theme_mod('a_visited_id','#aaa'); ?>;*/}
a:hover {color:#999;/*<?php echo get_theme_mod('a_hover_id','#999'); ?>;*/}

html {
  color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}

p{color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/}
h1{color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/}
h2{color:#fff;/*<?php echo get_theme_mod('html_id','#fff'); ?>;*/}



/* site title color*/

section.site-title p a {<?php echo get_theme_mod('site_title_id','#fff'); ?>;}
section.site-title p {<?php echo get_theme_mod('site_title_id','#fff'); ?>;}

/* site description color*/
section .title-description a {<?php echo get_theme_mod('site_description_id','#fff'); ?>;}


/* slideshow description and button colors*/

.gallerydescription > div a {<?php echo get_theme_mod('slide_id','#fff'); ?>;}

.gallerydescription > div input {<?php echo get_theme_mod('button_id','#fff'); ?>;}

.gallerydescription_static > div a {<?php echo get_theme_mod('slide_id','#fff'); ?>;}

.gallerydescription_static > div input {<?php echo get_theme_mod('button_id','#fff'); ?>;}



/*
***********************
**     **********   ***
**      *********   ***
**   *   ********   ***
**   **   *******   ***
**   ***   ******   ***
**   ****   *****   ***
**   *****   ****   ***
**   ******   ***   ***
**   *******   **   ***
**   ********   *   ***
**   *********      ***
***********************
*/

.qwe-nav li a {<?php echo get_theme_mod('nav_id','#fff');}
.qwe-nav li a:hover {<?php echo get_theme_mod('nav_hover_id','#ddd');}
/*.qwe-nav li a:visited {<?php echo get_theme_mod('nav_visited_id','#aaa');} */

.qwe-nav-rtl li a {<?php echo get_theme_mod('nav_id','#fff');}
.qwe-nav-rtl li a:hover {<?php echo get_theme_mod('nav_hover_id','#ddd');}
/*.qwe-nav-rtl li a:visited {<?php echo get_theme_mod('nav_visited_id','#aaa');} */


/* 3 indicators */

/*sticky indicator 3 images*/


.gallerythumContainer input {<?php echo get_theme_mod('button_id','#fff');}




/*page*/


.page div.archive {color: #fff;}

.page .rect .push_button a {color: #fff;}

.page .rect .push_button a:hover {color:#ccc;}


.page .rect h1 a{color:<?php echo get_theme_mod('page_titles_id','#fff'); ?>;}


/****************************************************
 *  Push Button
 *****************************************************/
.push_button{
    color:#FFF;
    border-radius:5px;
    border:solid 1px #D94E3B;
    background:#cb3b27;
  
    -webkit-box-shadow: 0px 9px 0px #84261a;
        -moz-box-shadow: 0px 9px 0px #84261a;
        box-shadow: 0px 9px 0px #84261a;
}
/*****************************************************/


/*sidebar*/

.sidebar li.widget {border-bottom:5px solid #fff;}
.sidebar .widgettitle {color:<?php echo get_theme_mod('sidebar_titles_id','#fff'); ?>;}

/*important components appear at widget >> search and find more */
.sidebar select {color: #000;}
.sidebar input {color: #000;}
.sidebar #searchsubmit {color: #222;}
.sidebar #s {color: #222;}





/* ooopppsss */
.oops h1 {color:<?php echo get_theme_mod('404_id','#D94E3B;'); ?>;}




</style>    