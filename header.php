<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo( 'description' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'name' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/dannyt.css">
  <script src="<?php bloginfo( "template_url" ); ?>/js/libs/modernizr-2.0.6.min.js"></script>
  <?php wp_head(); ?>  
</head>

<body>
  <div class="grid">
  
    <header class="grid__item one-whole desk-one-fifth">
      <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 
                                  'container' => 'false', 
                                  'menu_class' => 'main-nav',
                                  'items_wrap' => '<ul id="%1$s" class="%2$s">'."\n".'%3$s    </ul>'."\n".'%0A',
                                  'walker' => new MV_Cleaner_Walker_Nav_Menu()) ); ?>
      </nav>
    </header>