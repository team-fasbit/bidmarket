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
      <?php
      if ( is_user_logged_in() ) {
        echo '<header id="header" class="header_logged_in"><div class="container-fluid">';
        echo '<div id="logo" class="logo_logged_in">';
        echo '<div class="social-links"><a href="'.get_site_url().'" class="bidmarket_icon"><i class="fa fa-home"></i> </a> <a href="'.get_site_url().'" class="bidmarket_icon_text">BidMarket.net</a></div></div>';
        echo '</div><div id="welcome" class="welcome_logged_in">WELCOME TO BIDMARKET</div>';
        echo '<nav id="nav-menu-container" class="navbar navbar-expand-sm nav_logged_in">';
        echo "<span class='top-buttons'><a class='top-links' href=".wp_logout_url(get_site_url()).">Log out</a></span>";       
        echo '</nav></div></header>';
      } else {
        echo '<header id="header"><div class="container-fluid">';
        echo '<div id="logo">';
        echo '<div class="social-links"><a href="'.get_site_url().'" class="bidmarket_icon"><i class="fa fa-home"></i> </a> <a href="'.get_site_url().'" class="bidmarket_icon_text">BidMarket.net</a></div></div>';
        echo '</div><div id="welcome">WELCOME TO BIDMARKET</div>';
        echo '<nav id="nav-menu-container" class="navbar navbar-expand-sm">';
        echo '<span class="top-buttons"><a class="top-links" href="'.get_site_url().'/index.php/log-in/">Log in</a></span>';
        echo '<span class="top-buttons"><a class="top-links" href="'.get_site_url().'/index.php/sign-up/">Sign up</a>';
        echo '</nav></div></header>';
      }
      ?>
 <!--   #hero -->
