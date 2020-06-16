<div class="container">
  <div id="change_container">
   <h1>Change your password</h1>
   <form id="set_password_form">
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Please Enter your new password:
                <input type="hidden" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <input type="password" id="password" name="password" class="form-control" placeholder="Your new password">
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Please confirm your new password:
                <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Your new password">
            </div>
        </div>
     </div>     
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" style="text-align:center;">
              <button type="submit" class="btn btn-primary" id="button_submit">Submit</button>
            </div>
        </div>
    </div>
   </form>
  </div>
</div>
<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function($) {
        jQuery("#set_password_form").validate({
          ignore: [],
          rules: {
                 password: {
                  required: true,
                  minlength: 8
                 },
                 repassword: {
                   required: true,
                   minlength: 8,
                   equalTo: "#password"
                 },
          },
          messages: {
             password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password",
             },
             repassword: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password",
             },
          },
          submitHandler: function(response){
            var password=jQuery("#password").val();
            var email=jQuery("#email").val();
            var data= {
                action:'set_pwd',
                password: password,
                email: email,
            };
              jQuery.post(ajaxurl, data, function(response) {
                jQuery("#change_container").html((response));
                jQuery('html, body').animate({scrollTop: 0}, 0);
            });             
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          });     
}); 
</script>