<?php
/*
Será la plantilla que mostrará WordPress en caso de tener activa la opción Mostrar página estática como página de inicio. Este archivo está pensado para casos en los que la página de inicio es una página estática, como puede ser la página de inicio de un site corporativo.
*/
get_header(); 

?>
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-12 content order-lg-1 order-2">
<?php
if ( have_posts() ) : ?>
           <div class="row">
             <div class="col-lg-6">
               <?php while ( have_posts() ) : the_post(); ?>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6">
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6">          
              <?php the_excerpt(); ?>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6">          
            Por <?php the_author_posts_link() ?>
            </div>
           </div>
    <?php endwhile; ?>
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
</div>
</div>
</div>
</section> 
<?

get_footer(); ?>