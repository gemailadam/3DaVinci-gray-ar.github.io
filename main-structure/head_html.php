	<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-migrate-1.2.1.min.js"></script>



	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		


	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/selectivizr-min.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]>
  	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
  	<noscript><link rel="stylesheet" href="fallback_css" /></noscript>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/rem.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/PIE.js"></script>
	<![endif]--> 

	
	<!-- instead of the above if there is server internet connection only-->
	<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script-->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php the_permalink(); wp_title('');bloginfo('name' );?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-col-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-row-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/elements.css"/>



	<?php wp_head(); ?>
