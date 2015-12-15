<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta property="og:title" content="Anthony Peruzzo: Web Design and Illustration">
    <meta property="og:image" content="link_to_image">
    <meta property="og:description" content="Anthony Peruzzo is a web designer, developer and illustrator.
    Publishers and clients include: Image Comics, Griffin Gallery, Charter Media, Ace in 1 Media, and many more.
    Check out his work here!">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
   <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
   <link href='http://fonts.googleapis.com/css?family=Londrina+Sketch|Londrina+Solid|Neucha' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>

  </head>
  <body>
    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navbar-collapse collapse" id="top-navbar">
            <?php /* Primary navigation */
            wp_nav_menu( array(
              'menu' => 'top_menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav nav-justified',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
            );
            ?>
        </div><!--/.nav-collapse -->
      </div><!--/container -->
    </nav><!-- end navigation -->

    
    <div class="container-fluid">
      
            