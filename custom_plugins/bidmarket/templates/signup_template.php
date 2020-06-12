<div class="container">
  <div id="signup_container">
   <h1>Sign up</h1>
   <form id="signup_form">
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                User Name:
                <input type="text" id="username" name="username" class="form-control" placeholder="User Name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Password:
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Re type password:
                <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Re type password">
            </div>
        </div>        
    </div>    
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                First Name:
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Last Name:
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Email:
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>    
    </div> 
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Sign up as:
                <select id="signup_type" name="signup_type" class="form-control">
                  <option value="">Choose sign up type</option>
                  <option value="1">Owner</option>
                  <option value="2">Contractor</option>
                </select>
            </div>
        </div> 
    </div>     
    <div class="row">
        <div class="col-md-12">
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
                 repassword: {
                   required: true,
                   minlength: 8,
                   equalTo: "#password"
                 },
                 firstname:"required",
                 lastname:"required",
                 email: {
                  required: true,
                  email: true,
                 }, 
                 signup_type:"required",             
          },
          messages: {
             firstname: "Please enter first name",
             lastname: "Please enter last name",
             password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password as above",
             },
             repassword: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              equalTo: "Please enter the same password as above",
             },
             username: {
              required: "Please provide an username",
              minlength: "Your password must be at least 8 characters long",
             },
             email: "Please enter a valid email",
             signup_type: "Please choose sign up type",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var firstname=jQuery("#firstname").val();
            var lastname=jQuery("#lastname").val();
            var username=jQuery("#username").val();
            var password=jQuery("#password").val();
            var email=jQuery("#email").val();
            var signup_type=jQuery("#signup_type").val();
            var data= {
                action:'sign_up_users',
                firstname: firstname,
                lastname: lastname,
                username: username,
                password: password,
                email: email,
                signup_type: signup_type
            };
              jQuery.post(ajaxurl, data, function(response) {
                jQuery("#signup_container").html((response));
                jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });       
}); 
</script>

