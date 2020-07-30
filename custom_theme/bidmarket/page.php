<?php
get_header();
echo '<section id="hero"><div class="hero-container"></div></section>';
?>

    <section id="about">
      <div class="container">
<?php			/* Start the Loop */
			if ( have_posts() ) : the_post();
?>
           <div class="row">
             <div class="col-lg-12">
               <?php the_content(); ?>
             </div>
           </div>
<?php else : ?>
  <p><?php _e('Ups!, Page not found.'); ?></p>
<?php endif;
?>
</div>
</section>
<?php
get_footer();
?>
