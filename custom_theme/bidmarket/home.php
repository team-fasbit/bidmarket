<?php
/*
Es la plantilla que WordPress carga por defecto como página de inicio. Está especialmente pensada para que sea un listado de posts, es decir, la portada de un blog.
*/
get_header();
?>
    <!--==========================
      Portfolio Section
    ============================-->
  
    <section id="slider_section" class="slider-section">
      <div class="container">
        <div class="row">
          <div class="section-title text-center wow zoomIn">
            <h2>Slide Section Title</h2>
            <div class="line"></div>
            <p>Our slide here....</p>
          </div>        
          <div class="col-md-12">
            <div class="s-slider">
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/1.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/2.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/3.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/4.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/5.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/6.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/7.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slides/1.jpg" alt=""/></div>
            </div>
          </div>
          </div><!--- END COL -->
        </div><!--- END ROW -->    
    </section>
    <section id="how_it_works_section" class="how-it-works-section">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="youtube-video">
          video section here...
          </div>
        </div>
        <div class="col-md-3">
          <div class="owners-section">
            Home Owners section here...
          </div>
        </div>
        <div class="col-md-3">
          <div class="contractors-section">
            Contractors Section Here...
          </div>
        </div>               
      </div>
    </div>
    </section>

<script type="text/javascript">
   jQuery(document).ready( function() {  
      $('.s-slider').owlCarousel({ 
      items:4,
      itemsDesktop:[1000,2],
      itemsDesktopSmall:[979,2],
      itemsTablet:[768,2],
      itemsMobile:[650,1],
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
