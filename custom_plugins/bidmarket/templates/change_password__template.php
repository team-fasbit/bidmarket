<div class="container">
  <div id="change_container">
   <h1>Change your password</h1>
   <form id="change_password_form">
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Please Enter your Email:
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
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
        jQuery("#change_password_form").validate({
          ignore: [],
          rules: {
                 email: {
                    required: true,
                    email: true,
                 },
          },
          messages: {
             email: "Please enter a valid email",
          },
          submitHandler: function(response){
            var email=jQuery("#email").val();
            var data= {
                action:'change_pwd',
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