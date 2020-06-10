<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <div class="wrapper">

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" title="" /></img></a>
      </div>
        
    <nav id="nav-menu-container" class="navbar navbar-expand-sm">
      <?php
       wp_nav_menu( array( 'theme_location' => 'primary',
                           'container'       => 'div',
                           'container_id'    => 'bs4navbar',
                           'menu_id'         => false,
                           'menu_class'      => 'nav-menu',
                           'depth'           => 2,
                           'fallback_cb'     => 'bs4navwalker::fallback',
                           'walker'          => new bs4navwalker() ));
      ?>
    </nav>

  </header><!-- #header -->
  <section id="hero">
    <div class="hero-container">       
      <h1><span class="header-color">Welcome to bidmarket</span></h1>
      <div class="container mt-3">
      <div class="row">
        <div class="col-lg-12">
          <h4><span class="header-color">Find your projects here!</span></h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section><!-- #hero -->