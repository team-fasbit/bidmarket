<div class="container border">
  <form id="priorities_form">
  <div class="row">
    <div class="col">
      <?php
        foreach ($results_priorities as $key_priorities):
      ?>
        <input type="checkbox" name="priority_check" id="priority_check_<?php echo $key_priorities->id; ?>" value="<?php echo $key_priorities->id; ?>" <?php if(stripos($priorities, $key_priorities->id) !== false) { echo "checked"; } ?> > <?php echo $key_priorities->name; ?> <br><br> 
      <?php
       endforeach;
      ?>
    </div>    
  </div>
  <div class="row">
    <div class="col">
      <input type="hidden" id="pri_owner_id" value="<?php echo $signup_key; ?>">
      <input type="hidden" id="txtprioritie" value="<?php echo $priorities; ?>">
      <button type="button" class="btn btn-primary bidmarket_button" id="save_priorities"><i class="fa fa-check-circle"></i> Save</button>
    </div>
  </div>  
</form>
</div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
jQuery(document).ready( function($) {
    jQuery("input[name='priority_check']").on("click", function() {
      var output="";
      var priorities=jQuery("#txtprioritie").val();
      jQuery(this).each(function () {
        if(jQuery(this).is(':checked')){ 
          output=priorities + jQuery(this).val() + ',';   
        }
        else {
          output=priorities.replace(jQuery(this).val()+',','');
        }
      });
      jQuery("#txtprioritie").val(output);
    });
    jQuery("#save_priorities").on("click", function(){
      var priorities= jQuery("#txtprioritie").val();
      var owner_id= jQuery("#pri_owner_id").val();
      var data={
        action: "update_priorities",
        priorities: priorities,
        owner_id: owner_id
      };
      jQuery.post(ajaxurl, data, function(response) {
        alert(response);
      }); 
    });  
});    
</script>
