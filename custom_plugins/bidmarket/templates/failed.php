        <div class="container">
            <div class="row">
              <div class="col-md-12 col-text-center">
               <span>
                <h4>
                   <i class="fa fa-warning"></i><br>
                   <strong>Fail!</strong> <br><br>
                   <?php echo $wpdb->last_error; ?>
                              <br><br>
                      <a type="button" class="btn btn-primary bidmarket_button" href="<?php echo get_site_url(); ?>">Home</a>
                </h4>
               </span>
              </div>
            </div>
        </div>