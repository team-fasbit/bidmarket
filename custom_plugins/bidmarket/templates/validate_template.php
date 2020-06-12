        <div class="container">
            <div class="row">
              <div class="col-md-12 col-text-center">
               <span>
                <h4>
                   <?php
                   if ( ! is_wp_error( $user_id ) ) {
                    ?>                  
                   <i class="fa fa-check"></i><br>
                   <strong>Success!</strong> <br><br>
                      The regitration has been completed successfully!<br><br>
                      <a type="button" class="btn-primary" href="<?php echo get_site_url(); ?>">Home</a>
                      <?php
                    } else {
                      ?>
                   <i class="fa fa-warning"></i><br>
                   <strong>Fail!</strong> <br><br>
                        <?php echo $user_id->get_error_message(); ?>
                        <br><br>
                      <a type="button" class="btn-primary" href="<?php echo get_site_url(); ?>">Home</a>                      
                      <?php
                    }
                    ?>

                </h4>
               </span>
              </div>
            </div>
        </div>

