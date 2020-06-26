<?php
require_once('bs4navwalker.php');
function mis_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary_top' ),
    )
  );
}
add_action( 'after_setup_theme', 'mis_menus' );
function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','mis_widgets');
function my_function_admin_bar() {
    return true;
}
add_filter('show_admin_bar', 'my_function_admin_bar');
function fonts_googleapis_styles() {
	wp_enqueue_style( 'fonts_googleapis', "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700", array(), wp_get_theme()->get( 'Version' ) );
}
function bootstrap_styles() {
	 wp_enqueue_style( 'bootstrap',get_template_directory_uri() .'/assets/css/bootstrap.css');
   wp_enqueue_style( 'fonts_awesome',get_template_directory_uri() .'/lib/font-awesome/css/font-awesome.min.css');
   wp_enqueue_style( 'animate',get_template_directory_uri() .'/lib/animate/animate.min.css');
   wp_enqueue_style( 'datatable',get_template_directory_uri() .'/assets/css/jquery.dataTables.min.css');
   wp_enqueue_style( 'datatablebootstrap',get_template_directory_uri() .'/assets/css/dataTables.bootstrap.min.css');   
   wp_enqueue_style( 'datatablefont',get_template_directory_uri() .'/assets/css/dataTables.fontAwesome.css');
   wp_enqueue_style('screen', get_template_directory_uri() . '/assets/css/screen.css');
   wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
   wp_enqueue_style('cmxform', get_template_directory_uri() . '/assets/css/cmxform.css');
   wp_enqueue_style('cmxformtemplate', get_template_directory_uri() . '/assets/css/cmxformTemplate.css');
   wp_enqueue_style('core', get_template_directory_uri() . '/assets/css/core.css');
   wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
   wp_enqueue_style('owltheme', get_template_directory_uri() . '/assets/css/owl.theme.css');
   wp_enqueue_style( 'style',get_template_directory_uri() .'/assets/css/style.css');        
}
add_action( 'wp_enqueue_scripts', 'bootstrap_styles');
function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( "jquery", get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), '3.5.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
function jquery_load_scripts() {
   wp_enqueue_script( "migrate", get_template_directory_uri() . '/assets/js/jquery-migrate-3.3.0.min.js' , array( 'jquery' ) );
   wp_enqueue_script( "popper", 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array( 'jquery' ) );   
   wp_enqueue_script( "bootstrap", get_template_directory_uri() . '/assets/js/bootstrap.js' , array( 'jquery' ) );
   wp_enqueue_script( "easing", get_template_directory_uri() . '/lib/easing/easing.min.js' , array( 'jquery' ) ); 
   wp_enqueue_script( "tables", get_template_directory_uri() . '/lib/wow/wow.min.js' , array( 'jquery' ) );
   wp_enqueue_script( "waypoint", get_template_directory_uri() . '/lib/waypoints/waypoints.min.js' , array( 'jquery' ) );
   wp_enqueue_script( "counterup", get_template_directory_uri() . '/lib/counterup/counterup.min.js' , array( 'jquery' ) );
   wp_enqueue_script( "hover", get_template_directory_uri() . '/lib/superfish/hoverIntent.js' , array( 'jquery' ) );
   wp_enqueue_script( "superfish", get_template_directory_uri() . '/lib/superfish/superfish.min.js' , array( 'jquery' ) );
   wp_enqueue_script( "main", get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
   wp_enqueue_script( "validate", get_template_directory_uri() . '/assets/js/jquery.validate.js', array( 'jquery' ) );   
   wp_enqueue_script( "datatable", get_template_directory_uri() . '/assets/js/jquery.dataTables.min.js', array( 'jquery' ) );   
   wp_enqueue_script( "ckeditor", get_template_directory_uri() . '/assets/ckeditor/ckeditor.js', array( 'jquery' ) );  
   wp_enqueue_script( "owlcaro", get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ) );      
}
add_action( 'wp_enqueue_scripts', 'jquery_load_scripts');
function show_type_logged_user(){
  global $wpdb;
  $table_signups= $wpdb->prefix . "signups"; 
  $output="";
  if ( is_user_logged_in() ) {
    $user_id=wp_get_current_user()->ID;
    if(current_user_can('administrator')) {
      $output="<br><br><br><br><h2><span class='header-color'>Welcome to bidmarket </span></h2>
      <h4><span class='header-color'>You are a Administrator</span></h4>";
   }
   else {
    $sql="SELECT * FROM $table_signups WHERE user_id = $user_id;";
    $results_type = $wpdb->get_results($sql);
    foreach ($results_type as $key) {
      $firstname=$key->firstname;
      $type=$key->signup_type;
    }
    if($type==1){
      $output="<br><br><br><br><h2><span class='header-color'>Welcome to bidmarket $firstname</span></h2>
      <h4><span class='header-color'>You are a Homeowner</span></h4>";
    }
    else{
      $output="<br><br><br><br><h2><span class='header-color'>Welcome to bidmarket $firstname</span></h2>
      <h4><span class='header-color'>You are a Contractor</span></h4>";
    }    
   }
  }
  echo $output;
}
add_action('show_owner_contractor','show_type_logged_user');
function remove_menus(){
  global $wpdb;
  $table_signups= $wpdb->prefix . "signups";
  $table_access= $wpdb->prefix . "access"; 
  $table_posts= $wpdb->prefix . "posts"; 
  $output="exclude=";
  $access="";
  if ( is_user_logged_in() ) {
    $user_id=wp_get_current_user()->ID;
    if(current_user_can('administrator')) {
      echo "<ul class='top_menu'>";
      echo "<div id='bs4navbar' class='menu-menu-1-container'>";
      echo "<ul id='menu-menu-1' class='nav-menu sf-js-enabled sf-arrows'>";
      wp_list_pages(array ('title_li'     => __( 'Home' )));
      echo "</ul>";
      echo "</div>";
      echo "</ul>";       
    }
    else {
      $sql="SELECT * FROM $table_signups WHERE user_id = $user_id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $type=$key->signup_type;
      }
      $sql2="SELECT * FROM $table_access WHERE signup_type = $type;";
      $results_access = $wpdb->get_results($sql2);
      foreach ($results_access as $key_access) {
        $access.=$key_access->menu_item.',';
      }
      $access=substr($access, 0, -1);
      $sql3="SELECT * FROM `wp_posts` WHERE `post_type`='page' and ID NOT IN ($access);";
      $results_exclude = $wpdb->get_results($sql3);
      foreach ($results_exclude as $key_exclude) {
        $output.=$key_exclude->ID.',';
      }    
      echo "<ul class='top_menu'>";
      echo "<div id='bs4navbar' class='menu-menu-1-container'>";
      echo "<ul id='menu-menu-1' class='nav-menu sf-js-enabled sf-arrows'>";
      wp_list_pages(array ('title_li'     => __( 'Home' ), 'exclude' => $output));
      echo "</ul>";
      echo "</div>";
      echo "</ul>"; 
    }   
  }
}
add_action( 'show_item_menu', 'remove_menus' );
?>