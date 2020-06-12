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
      if ( is_user_logged_in() ) {
       wp_nav_menu( array( 'theme_location' => 'primary',
                           'container'       => 'div',
                           'container_id'    => 'bs4navbar',
                           'menu_id'         => false,
                           'menu_class'      => 'nav-menu',
                           'depth'           => 2,
                           'fallback_cb'     => 'bs4navwalker::fallback',
                           'walker'          => new bs4navwalker() ));
         echo "<span class=top-buttons'><a type='button' class='btn btn-primary login-button' href=".wp_logout_url(get_site_url()).">Log out</a></span>";       
       } else {
         ?>
         <span class="top-buttons"><a type="button" class="btn btn-primary login-button" href="<?php echo get_site_url(); ?>/index.php/log-in/">Log in</a></span>
         <span class="top-buttons"><a type="button" class="btn btn-primary sign-up" href="<?php echo get_site_url(); ?>/index.php/sign-up/">Sign up</a>
         <?php
       }
      ?>
    </nav>

  </header><!-- #header -->
  <section id="hero">
    <div class="hero-container">       
      <h1><span class="header-color">Welcome to bidmarket</span></h1>
    </div>
  </section><!-- #hero -->