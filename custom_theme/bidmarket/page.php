<?php
get_header();
?>
    <section id="about">
      <div class="container">
<?php			/* Start the Loop */
			if ( have_posts() ) : the_post();
?>
          <div class="row">
             <div class="col-lg-12">
              <h1><?php the_title(); ?></h1>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12">
               <?php the_content(); ?>
             </div>
           </div>
<?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif;
?>
</div>
</section>
<?php
get_footer();
?>
