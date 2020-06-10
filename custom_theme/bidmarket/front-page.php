<?php
/*
Es la plantilla que WordPress carga por defecto como página de inicio. Está especialmente pensada para que sea un listado de posts, es decir, la portada de un blog.
*/
get_header();
?>
    <!--==========================
      Portfolio Section
    ============================-->
  <div class="container">

    <section id="projects" class="col-text-center">
      <h2>OUR PROJECTS</h2>
      <div class="row">
        <div class="col col-text-center">
          <i class="fa fa-paint-brush icon-size"></i><br>        
          Painting
        </div>        
        <div class="col col-text-center">
          <i class="fa fa-reorder icon-size"></i><br>        
          Flooring
        </div>
        <div class="col col-text-center">
          <i class="fa fa-cutlery icon-size"></i><br>        
          Kitchen Remodel
        </div>   
        <div class="col col-text-center">
          <i class="fa fa-home icon-size"></i><br>
          Whole House Remodel
        </div>                               
        <div class="col col-text-center">
          <i class="fa fa-home icon-size"></i><br>
          Roofing
        </div> 
        <div class="col col-text-center">
          <i class="fa fa-bath icon-size"></i><br>        
          Bath Room Remodel
        </div>             
    </div>  
    </section><!-- #project -->
    <section id="priorities" class="col-text-center">
      <h2>YOUR PRIORITIES</h2>
      <div class="row">
        <div class="col col-text-center">
          <i class="fa fa-line-chart icon-size"></i><br>        
          Quality
        </div>        
        <div class="col col-text-center">
          <i class="fa fa-star icon-size"></i><br>        
          Reputation          
        </div>
        <div class="col col-text-center">
          <i class="fa fa-clock-o icon-size"></i><br>        
          Project Completion Time
        </div>        
        <div class="col col-text-center">
          <i class="fa fa-calendar icon-size"></i><br>        
          Project Start Date         
        </div>
        <div class="col col-text-center">
          <i class="fa fa-money icon-size"></i><br>        
          Price
        </div> 
     </div>       
    </section><!-- #project -->  
  </div>
<?php
get_footer();
?>