<div class="container border">
  <div id="contractors_container">
   <h1>Contractors</h1>
   <form id="contractors_form">
      <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Username:
                <input type="text" id="username" name="username" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Password:
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Re type password:
                <input type="password" id="repassword" name="repassword" class="form-control">
            </div>
        </div>        
    </div>    
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Company Name:
                <input type="text" id="company" name="company" class="form-control" placeholder="Company Name">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Street:
                <input type="text" id="street" name="street" class="form-control" placeholder="Street">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                City:
                <input type="text" id="city" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                State:
                <select name="state" id="state" class="form-control">
                    <option value="">Choose state</option>
                    <?php 
                      foreach ($results_state as $key) {
                          echo "<option value='".$key->name."'>".$key->name."</option>";
                      }
                    ?>
                  </select>
            </div>
        </div>        
    </div>
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Zip:
                <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip code">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Email:
                <input type="text" id="email" name="email" class="form-control" placeholder="Email #1">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Phone:
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
            </div>
        </div>      
    </div> 
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Web Site:
                <input type="text" id="website" name="website" class="form-control" placeholder="Web Site">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Contact Name:
                <input type="text" id="name" name="name" class="form-control" placeholder="Contact Name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Contact Phone:
                <input type="text" id="phone2" name="phone2" class="form-control" placeholder="Contact Phone">
            </div>
        </div>        
    </div>             
    <div class="row">
        <div class="col-md-12">
            <div class="form-group" style="text-align:center;">
              <button type="submit" class="btn btn-primary bidmarket_button" id="button_submit">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>

<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function() {
        jQuery("#contractors_form").validate({
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
                 company:"required",
                 street:"required",
                 city: "required",
                 zip:"required",
                 state:"required",
                 phone:"required",
                 phone2:"required",
                 email: {
                  required: true,
                  email: true,
                 },
                 website: "required",
                 name:"required",
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
             username: {
              required: "Please provide an username",
              minlength: "Your password must be at least 8 characters long",
             },
             company: "Please enter company name",
             street: "Please enter street",
             city: "Please enter city",
             zip: "Please enter zip code",
             state: "Please enter state code",
             phone1: "Please enter a phone",
             phone2: "Please enter a phone",
             email: "Please enter a valid email",
             website: "Please enter web site",
             name:"Please enter contact name",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var company=jQuery("#company").val();
            var street=jQuery("#street").val();
            var city=jQuery("#city").val();
            var zip=jQuery("#zip").val();
            var state=jQuery("#state").val();
            var phone=jQuery("#phone").val();
            var phone2=jQuery("#phone2").val();
            var email=jQuery("#email").val();
            var website=jQuery("#website").val();
            var name=jQuery("#name").val();
            var username=jQuery("#username").val();
            var password=jQuery("#password").val();            
            var data= {
                action:'save_contractors',
                username: username,
                password: password,
                company: company,
                street: street,
                city: city,
                zip: zip,
                state: state,
                phone: phone,
                phone2: phone2,
                email: email,
                website: website,
                name: name,
            };
              jQuery.post(ajaxurl, data, function(response) {
                jQuery("#contractors_container").html((response));
                jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });       
}); 
</script>