<div class="container border">
  <div id="view_address_owner_container">
   <form id="view_address_owners_form">
     <div class="row">
        <div class="col">
            <div class="form-group">
                Street: <?php echo $street; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                City: <?php echo $city; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                State: <?php echo $state; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Zip: <?php echo $zip; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <button type="button" class="btn btn-primary bidmarket_button" id="edit_address_owner"><i class="fa fa-pencil"></i> Edit</button>
            </div>
        </div>
    </div>
</form>
</div>  
  <div id="edit_address_owner_container">
   <form id="edit_address_owners_form">
     <div class="row">
        <div class="col">
            <div class="form-group">
                Street:
                <input type="text" id="profile_street" name="profile_street" class="form-control"  value="<?php echo $street; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                City:
                <input type="text" id="profile_city" name="profile_city" class="form-control"  value="<?php echo $city; ?>">
            </div>
        </div>
      </div>
      <div class="row">  
        <div class="col">
            <div class="form-group">
                State:
                <select name="profile_state" id="profile_state" class="form-control">
                    <option selected value="<?php echo $state; ?>"><?php echo $state; ?></option>
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
        <div class="col">
            <div class="form-group">
                Zip:
                <input type="text" id="profile_zip" name="profile_zip" class="form-control"  value="<?php echo $zip; ?>">
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <input type="hidden" id="address_owner_id" value="<?php echo $signup_key; ?>">
              <button type="submit" class="btn btn-primary bidmarket_button" >Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function($) {
        jQuery("#view_address_owner_container").show();
        jQuery("#edit_address_owner_container").hide();
        jQuery("#edit_address_owner").on("click", function(){
          jQuery("#view_address_owner_container").hide();
          jQuery("#edit_address_owner_container").show();
        });
   jQuery("#edit_address_owners_form").validate({
          ignore: [],
          rules: {
                 profile_street:"required",
                 profile_city: "required",
                 profile_zip:"required",
                 profile_state:"required",
          },
          messages: {
             profile_street: "Please enter street",
             profile_city: "Please enter city",
             profile_zip: "Please enter zip code",
             profile_state: "Please enter state code",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var id=jQuery("#address_owner_id").val();
            var street=jQuery("#profile_street").val();
            var city=jQuery("#profile_city").val();
            var zip=jQuery("#profile_zip").val();
            var state=jQuery("#profile_state").val();
            var data= {
                action:'update_owner_address',
                id: id,
                street: street,
                city: city,
                zip: zip,
                state: state,
            };
            jQuery.post(ajaxurl, data, function(response) {
                jQuery("#view_address_owner_container").show();
                jQuery("#edit_address_owner_container").hide();
                alert('Success');
                jQuery("#view_address_owner_container").html((response));
            });
          }
        });
  }); 
</script>