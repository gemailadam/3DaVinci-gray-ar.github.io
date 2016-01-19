	<!-- Latest compiled and minified CSS -->
	<!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->

	<!-- Optional theme -->
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"-->

	<!-- Latest compiled and minified JavaScript -->
	<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script-->



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
	
	<title><?php wp_title('');?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-col-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-row-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/elements.css"/>



	<?php wp_head(); ?>
