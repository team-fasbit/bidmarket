  <div id="signup_container" class="col-text-center">
   <h1>Log in</h1>
   <form id="signup_form" action="<?php echo site_url( '/wp-login.php' ); ?>" method="POST">
    <input type="hidden" value="<?php echo site_url(); ?>" name="redirect_to">
    <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col">    
     <div class="row">
        <div class="col">
            <div class="form-group">
                <input type="text" id="log" name="log" class="form-control" placeholder="Email">
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col">
            <div class="form-group">
                <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password">
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <button type="submit" class="btn btn-primary bidmarket_button" id="button_submit">Submit</button>
            </div>
        </div>
    </div>
            <?php if($login=='failed'){ ?> 
                <div class="alert alert-danger alert-dismissible">
                  <strong>Error!</strong> Wrong login or password!.
                </div>
            <?php } ?>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <a href="<?php echo get_site_url().'/index.php/recover-password'; ?>" class="text-links"><i class="fa fa-lock"></i> Forgot your password?</a>  
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <a href="<?php echo get_site_url().'/index.php/sign-up/'; ?>" class="text-links"><i class="fa fa-user"></i> Create an account</a>
        </div>
      </div>              
    </div>
  </div>
      <div class="col-md-3">
      </div>  
  </div>
</form>
</div>
<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function($) {
        jQuery("#signup_form").validate({
          ignore: [],
          rules: {
                 log:{
                  required: true,
                  email: true
                 },
                 pwd: {
                  required: true,
                  minlength: 8
                 },  
          },
          messages: {
             pwd: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
             },
             log: {
              required: "Please provide an username",
              email: "Enter a valid email",
             },
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          });     
}); 

</script>

