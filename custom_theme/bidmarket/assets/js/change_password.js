jQuery(document).ready( function($) {
        // validate signup form on keyup and submit
        jQuery("#changepasswordForm").validate({
          rules: {
                 email: {
                  required: true,
                  email: true,
                 }
          },
          messages: {
             email: {
              required: "Please enter a valid email address",
              email: "Please enter a valid email address"
             }
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var email=jQuery("#email").val();
            var data= {
              action:'sendemailpwd',
              email: email
            };
            jQuery.post("https://cutepuppytime.com/wp-admin/admin-ajax.php", data, function(response) {
              jQuery("#sendemail").html((response));
              jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
          

        });
});
