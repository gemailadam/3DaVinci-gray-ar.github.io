	<!--script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script-->
	<!--script src="//code.jquery.com/jquery-1.11.3.min.js"></script-->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>
	<!--script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script-->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-migrate-1.2.1.min.js"></script>
	<!--script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.4/themes/ui-darkness/jquery-ui.css"></script-->



	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="fallback_css" /></noscript>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/rem.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/PIE.js"></script>
<![endif]--> 

	<!--[if lt IE 9]>
	
	<![endif]-->


	<!--[if gt IE 9]>
	
	<![endif]-->

	<!-- instead of the above if there is server internet connection only-->
	<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script-->

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        
    <title><?php the_permalink(); the_title( '' , ' || ', 'left' );bloginfo('name' );?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skeleton-col-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-static.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skeleton-row-dynamic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skelaton-static-row.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/elements.css"/>



    <?php wp_head(); ?>
