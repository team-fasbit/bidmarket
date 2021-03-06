<div class="container border">
  <div id="view_contractors_container">
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Company Name:  <?php echo $company; ?>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Street: <?php echo $street; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                City: <?php echo $city; ?>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                State: <?php echo $state; ?>
            </div>
        </div>        
        <div class="col-md-6">
            <div class="form-group">
                Zip: <?php echo $zip; ?>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Email: <?php echo $email; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                Phone: <?php echo $phone; ?>
            </div>
        </div>      
    </div> 
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Web Site: <?php echo $website; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                Contact Name: <?php echo $name; ?>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Contact Phone: <?php echo $phone2; ?>
            </div>
        </div>        
        <div class="col-md-6">
            <div class="form-group" style="text-align:center;">
              <button type="button" class="btn btn-primary bidmarket_button" id="button_edit">Edit</button>
            </div>
        </div>
    </div>
</div>  
  <div id="edit_contractors_container">
   <h1>Contractors</h1>
   <form id="edit_contractors_form">
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Company Name:
                <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id; ?>">
                <input type="text" id="company" name="company" class="form-control"  value="<?php echo $company; ?>">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Street:
                <input type="text" id="street" name="street" class="form-control"  value="<?php echo $street; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                City:
                <input type="text" id="city" name="city" class="form-control"  value="<?php echo $city; ?>">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                State:
                <select name="state" id="state" class="form-control">
                    <option selected value="<?php echo $state; ?>"><?php echo $state; ?></option>
                    <?php 
                      foreach ($results_state as $key) {
                          echo "<option value='".$key->name."'>".$key->name."</option>";
                      }
                    ?>
                  </select>
            </div>
        </div>        
        <div class="col-md-6">
            <div class="form-group">
                Zip:
                <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $zip; ?>">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Email:
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                Phone:
                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $phone; ?>">
            </div>
        </div>      
    </div> 
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Web Site:
                <input type="text" id="website" name="website" class="form-control" value="<?php echo $website; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                Contact Name:
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Contact Phone:
                <input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $phone2; ?>">
            </div>
        </div>        
        <div class="col-md-6">
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
        jQuery("#edit_contractors_container").hide();
        jQuery("#view_contractors_container").show();
        jQuery("#button_edit").on("click", function(){
          jQuery("#edit_contractors_container").show();
          jQuery("#view_contractors_container").hide();          
        });
        jQuery("#edit_contractors_form").validate({
          ignore: [],
          rules: {
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
             company: "Please enter company name",
             street: "Please enter street",
             city: "Please enter city",
             zip: "Please enter zip code",
             state: "Please enter state code",
             phone: "Please enter a phone",
             phone2: "Please enter a phone",
             email: "Please enter a valid email",
             website: "Please enter web site",
             name:"Please enter contact name",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var id=jQuery("#id").val();
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
            var data= {
                action:'update_contractors',
                id: id,
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
               location.reload();
              });            
          }
        });       
}); 
</script>