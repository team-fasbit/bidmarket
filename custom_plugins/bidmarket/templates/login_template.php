<div class="container">
  <div id="signup_container">
   <h1>Log in</h1>
   <form id="signup_form" action="<?php echo site_url( '/wp-login.php' ); ?>" method="POST">
    <input type="hidden" value="<?php echo site_url(); ?>" name="redirect_to">
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Email or User name:
                <input type="text" id="username" name="username" class="form-control" placeholder="User Name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Password:
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group" style="text-align:center;">
              <button type="submit" class="btn btn-primary" id="button_submit">Submit</button>
            </div>
        </div>
    </div>
            <?php if($login=='failed'){ ?> 
                <div class="alert alert-danger alert-dismissible">
                  <strong>Error!</strong> Wrong login or password!.
                </div>
            <?php } ?>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <a href="<?php echo get_site_url().'/index.php/recover-password'; ?>" class="text-muted"><i class="fa fa-lock"></i> Forgot your password?</a>  
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <a href="<?php echo get_site_url().'/index.php/signup/'; ?>" class="text-muted"><i class="fa fa-user"></i> Create an account</a>
        </div>
      </div>              
    </div>
  </div>
</form>
</div>
</div>
<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function($) {
        jQuery("#signup_form").validate({
          ignore: [],
          rules: {
                 username:{
                  required: true,
                  minlength: 8
                 },
                 password: {
                  required: true,
                  minlength: 8
                 },  
          },
          messages: {
             password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
             },
             username: {
              required: "Please provide an username",
              minlength: "Your password must be at least 8 characters long",
             },
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          });     
}); 

</script>

