<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package castom-theme
 */

?>
<?php wp_head() ?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">

	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
	
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 

</head>

<body>
	
   <!-- Header
   ================================================== -->
   <header id="header">

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
            	
               	<a href="<?php echo home_url() ?>">
            		<div class=""> <?php bloginfo('name') ?></div>
               		<img alt="" src="images/logo.png">
               	</a>
            </div>

            <nav id="nav-wrap">
				
                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
				<?php wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'container' 	 => null,
						'menu_class'     => 'nav',
						'menu_id'        => 'nav',

					));
					
					?>
            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->