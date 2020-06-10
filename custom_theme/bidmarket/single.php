<?php
get_header();
?>
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-12 content order-lg-1 order-2">
<?php
if ( have_posts() ) : the_post(); ?>
           <div class="row">
             <div class="col-lg-6">
              <h1><?php the_title(); ?></h1>
    <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-6">
               <?php the_content(); ?>
             </div>
           </div>
           <address>Por <?php the_author_posts_link() ?></address>
<?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif;
?>
          </div>
           </div>
           </div>  
  </section>
  <?

get_footer(); ?>