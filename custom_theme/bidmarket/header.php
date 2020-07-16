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
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" title="" /></img></a>
      </div>
        
    <nav id="nav-menu-container" class="navbar navbar-expand-sm">
      <?php
      if ( is_user_logged_in() ) {
         echo "<span class='top-buttons'><a type='button' class='btn btn-primary top-button' href=".wp_logout_url(get_site_url()).">Log out</a></span>";       
       } else {
         ?>
         <span class="top-buttons"><a type="button" class="btn btn-primary top-button" href="<?php echo get_site_url(); ?>/index.php/log-in/">Log in</a></span>
         <span class="top-buttons"><a type="button" class="btn btn-primary top-button" href="<?php echo get_site_url(); ?>/index.php/sign-up/">Sign up</a>
         <?php
       }
      ?>
    </nav>

  </header><!-- #header -->
  <section id="hero">
    <div class="hero-container"  >
      <span class="header-color" style="vertical-align: middle; display: table-cell;">WELCOME TO BIDMARKET</span>
    </div>
  </section><!-- #hero -->