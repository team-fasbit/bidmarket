<div class="container border">
  <div id="view_account_contractor_container">
     <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 1: <?php echo $phone1; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 2: <?php echo $phone2; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Email : <?php echo $email1; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-twitter"></i> <?php if(!empty($twitter)){ echo $twitter; } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-facebook"></i> <?php if(!empty($facebook)){ echo $facebook; } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-instagram"></i> <?php if(!empty($instagram)){ echo $instagram; } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <button type="button" class="btn btn-primary bidmarket_button" id="edit_account_contractor"><i class="fa fa-pencil"></i> Edit</button>
            </div>
        </div>
    </div>
</div>  
  <div id="edit_account_contractor_container">
   <form id="edit_account_contractors_form">    
     <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 1: <?php echo $phone1; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Phone 2: <?php echo $phone2; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                Email : <?php echo $email1; ?>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-twitter"></i>
                <input type="text" id="twitter" name="twitter" class="form-control"  value="<?php if(!empty($twitter)){ echo $twitter; } ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-facebook"></i>
                <input type="text" id="facebook" name="facebook" class="form-control"  value="<?php if(!empty($facebook)){ echo $facebook; } ?>">
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <i class="fa fa-instagram"></i> 
                <input type="text" id="instagram" name="instagram" class="form-control"  value="<?php if(!empty($instagram)){ echo $instagram; } ?>">
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col">
            <div class="form-group" style="text-align:center;">
              <input type="hidden" id="account_contractor_id" value="<?php echo $signup_key; ?>">
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
        jQuery("#view_account_contractor_container").show();
        jQuery("#edit_account_contractor_container").hide();
        jQuery("#edit_account_contractor").on("click", function(){
          jQuery("#view_account_contractor_container").hide();
          jQuery("#edit_account_contractor_container").show();
        });
   jQuery("#edit_account_contractors_form").validate({
          ignore: [],
          rules: {
                 twitter:"required",
                 facebook: "required",
                 instagram:"required",
          },
          messages: {
             twitter: "Please enter twitter",
             facebook: "Please enter facebook",
             instagram: "Please enter instagram",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var id=jQuery("#account_contractor_id").val();
            var twitter=jQuery("#twitter").val();
            var facebook=jQuery("#facebook").val();
            var instagram=jQuery("#instagram").val();
            var data= {
                action:'update_scontractor_account',
                id: id,
                twitter: twitter,
                facebook: facebook,
                instagram: instagram,
            };
            jQuery.post(ajaxurl, data, function(response) {
                jQuery("#view_account_contractor_container").show();
                jQuery("#edit_account_contractor_container").hide();
                alert('Success');
                jQuery("#view_account_contractor_container").html((response));
            });
          }
        });
  }); 
</script>