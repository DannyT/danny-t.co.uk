<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo( 'description' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'name' ); ?>">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php bloginfo( "template_url" ); ?>/js/modernizr-2.0.6.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header role="banner">
    <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo( "name" ) ?></a></h1>
    <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 
                                'container' => 'false', 
                                'menu_class' => 'wp-menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">'."\n".'%3$s    </ul>'."\n".'%0A',
                                'walker' => new MV_Cleaner_Walker_Nav_Menu()) ); ?>
    </nav>
    <a class="improveon" href="http://improve-on.com/submit/danny-t.co.uk">Improve-on this site</a>
    <div class='menu-button'><a>menu</a></div>
  </header>
  
  <div role="main" class="main">
    <div class="main-content">
