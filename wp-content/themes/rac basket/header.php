<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet" type="text/css" />
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="row">
          <a  href="<?php echo home_url(); ?>"><img class="col-md-3 col-sm-3  " id="logo" src="<?php bloginfo('template_url') ?>/images/logo.png" title="logo"/></a>
          <a >
          <nav id="nav" class=" col-md-9 col-sm-9" role="navigation">
            <div class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header visible-xs">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Menu</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <?php wp_nav_menu(array(
              'container_class' => 'menu-header',
              'theme_location' => 'primary',
            'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
            'walker' => new BS3_Walker_Nav_Menu,
            )); ?>
            </div><!-- /.navbar-collapse -->
          </div>
          </nav>
        </div>
      </header>