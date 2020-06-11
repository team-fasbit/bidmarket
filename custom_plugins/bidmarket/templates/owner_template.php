<div class="container">
  <div id="owner_container">
   <h1>Owners</h1>
   <form id="owners_form">
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                First Name:
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                Last Name:
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
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
                <input type="text" id="state" name="state" class="form-control" placeholder="State">
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
                Email #1:
                <input type="text" id="email1" name="email1" class="form-control" placeholder="Email #1">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Email #2:
                <input type="text" id="email2" name="email2" class="form-control" placeholder="Email #2">
            </div>
        </div>        
    </div> 
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Phone 1:
                <input type="text" id="phone1" name="phone1" class="form-control" placeholder="Phone 1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                Phone 2:
                <input type="text" id="phone2" name="phone2" class="form-control" placeholder="Phone 2">
            </div>
        </div>
    </div>             
     <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                Customer ID:
                <input type="text" id="customerid" name="customerid" class="form-control" disabled value="<?php echo $customerid; ?>">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Project Type:
                <select id="project" name="project" class="form-control">
                    <option value="">Choose project type</option>
                    <?php
                    foreach ($results_project as $key) {
                       echo "<option value=".$key->id.">".$key->name."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                Priorities:
                <select id="priorities" name="priorities" class="form-control">
                    <option value="">Choose priorities</option>
                    <?php
                    foreach ($results_priorities as $key) {
                       echo "<option value=".$key->name.">".$key->name."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>        
    </div>  
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Description:
                <textarea id="description" name="description" class="form-control" placeholder="Description"></textarea>
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

<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function($) {
        jQuery("#owners_form").validate({
          ignore: [],
          rules: {
                 firstname:"required",
                 lastname:"required",
                 street:"required",
                 city: "required",
                 zip:"required",
                 state:"required",                 
                 phone1:"required",                 
                 phone2:"required",                 
                 email1: {
                  required: true,
                  email: true,
                 },
                 email2: {
                  required: true,
                  email: true,
                 },
                 customerid: "required",
                 project:"required",
                 description: "required",
                 priorities: "required",                
          },
          messages: {
             firstname: "Please enter first name",
             lastname: "Please enter last name",
             street: "Please enter street",
             city: "Please enter city",
             zip: "Please enter zip code",
             state: "Please enter state code",
             phone1: "Please enter a phone",
             phone2: "Please enter a phone",
             email1: "Please enter a valid email",
             email2: "Please enter a valid email",
             customerid: "Please enter customerid",
             project:"Please choose the project",
             description: "Please enter description",
             priorities: "Please choose priorities",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var firstname=jQuery("#firstname").val();
            var lastname=jQuery("#lastname").val();
            var street=jQuery("#street").val();
            var city=jQuery("#city").val();
            var zip=jQuery("#zip").val();
            var state=jQuery("#state").val();
            var phone1=jQuery("#phone1").val();
            var phone2=jQuery("#phone2").val();
            var email1=jQuery("#email1").val();
            var email2=jQuery("#email2").val();
            var customerid=jQuery("#customerid").val();
            var project=jQuery("#project").val();
            var description=jQuery("#description").val();
            var priorities=jQuery("#priorities").val(); 
            var data= {
                action:'save_owner',
                firstname: firstname,
                lastname: lastname,
                street: street,
                city: city,
                zip: zip,
                state: state,
                phone1: phone1,
                phone2: phone2,
                email1: email1,
                email2: email2,
                customerid: customerid,
                project:project,
                description: description,
                priorities: priorities
            };
              jQuery.post(ajaxurl, data, function(response) {
                jQuery("#owner_container").html((response));
                jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });       
}); 
</script>