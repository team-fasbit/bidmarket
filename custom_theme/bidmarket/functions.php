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
function fonts_googleapis_styles() {
	wp_enqueue_style( 'fonts_googleapis', "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700", array(), wp_get_theme()->get( 'Version' ) );
}
function bootstrap_styles() {
	 wp_enqueue_style( 'bootstrap',get_template_directory_uri() .'/assets/css/bootstrap.min.css');
   wp_enqueue_style( 'fonts_awesome',get_template_directory_uri() .'/lib/font-awesome/css/font-awesome.min.css');
   wp_enqueue_style( 'animate',get_template_directory_uri() .'/lib/animate/animate.min.css');
   wp_enqueue_style( 'datatable',get_template_directory_uri() .'/assets/css/jquery.dataTables.min.css');
   wp_enqueue_style('screen', get_template_directory_uri() . '/assets/css/screen.css');
   wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
   wp_enqueue_style('cmxform', get_template_directory_uri() . '/assets/css/cmxform.css');
   wp_enqueue_style('cmxformtemplate', get_template_directory_uri() . '/assets/css/cmxformTemplate.css');
   wp_enqueue_style('core', get_template_directory_uri() . '/assets/css/core.css');
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
   wp_enqueue_script( "bootstrap", get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' , array( 'jquery' ) );
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
   wp_enqueue_script( "popper", 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array( 'jquery' ) );    
}
add_action( 'wp_enqueue_scripts', 'jquery_load_scripts');
?>