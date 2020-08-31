<?php
get_header();
if ( is_user_logged_in() ) {
  $verify_id=wp_get_current_user()->ID;
  if( 'owner' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
    $url=home_url('/index.php/dashboard-owners/');
  }
  elseif ( 'contractors' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
    $url=home_url('/index.php/dashboard-contractors/');
  }
  else{
    $url=home_url();
  }
  echo("<script>location.href = '".$url."'</script>");
}
?>
    <section id="slider_section" class="slider-section">
      <div class="container-fluid">
        <div class="row inside-row slider_padding">      
          <div class="col slider_padding">
            <div class="s-slider">
              <div class="item"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/Vermont Home - grey over.png" alt="" /></div>
              <div class="item"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/Vermont Home Blue.png" alt=""  /></div>
              <div class="item"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/Yellow House - grey over.png" alt=""  /></div>
            </div>
          </div>
          </div><!--- END COL -->
        </div><!--- END ROW -->    
    </section>
    <section id="how_it_works_section" class="how-it-works-section">
      <div class="container border">
      <div class="row inside-row">
        <div class="col-md-6">
          <div class="container border">
            <div class="youtube-video">
            video section here...
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="container border">
            <div class="owners-section">
              Home Owners section here...
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="container border">
          <div class="contractors-section">
            Contractors Section Here...
          </div>
        </div>
        </div>               
      </div>
    </div>
    </section>

<script type="text/javascript">
   jQuery(document).ready( function() {  
      $('.s-slider').owlCarousel({ 
      items:1,
      itemsDesktop:[1920,1],
      itemsDesktopSmall:[1000,1],
      itemsTablet:[768,1],
      itemsMobile:[479,1],
      pagination:false,
      navigation:true,
      navigationText:["",""],
      autoPlay:true
    });
});
</script>
<?php
get_footer();
?>

