<div class="container border">
  <form id="projects_form">  
  <div class="row">
    <div class="col">
      <?php
        foreach ($results_project as $key_project):
      ?>
        <input type="checkbox" name="project_check" id="project_check_<?php echo $key_project->id; ?>" value="<?php echo $key_project->id; ?>" <?php if(stripos($projects, $key_project->id) !== false) { echo "checked"; } ?> > <?php echo $key_project->name; ?> <br><br> 
      <?php
       endforeach;
      ?>      
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="hidden" id="prj_owner_id" value="<?php echo $signup_key; ?>">
      <input type="hidden" id="txtprojects" value="<?php echo $projects; ?>">
      <button type="button" class="btn btn-primary bidmarket_button" id="save_projects"><i class=" fa fa-gavel"></i> Save</button>
    </div>
  </div>  
</form>
</div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
jQuery(document).ready( function($) {
    jQuery("input[name='project_check']").on("click", function() {
      var output="";
      var projects=jQuery("#txtprojects").val();
      jQuery(this).each(function () {
        if(jQuery(this).is(':checked')){ 
          output=projects + jQuery(this).val() + ',';   
        }
        else {
          output=projects.replace(jQuery(this).val()+',','');
        }
      });
      jQuery("#txtprojects").val(output);
    });
    jQuery("#save_projects").on("click", function(){
      var projects= jQuery("#txtprojects").val();
      var owner_id= jQuery("#prj_owner_id").val();
      var data={
        action: "update_projects",
        projects: projects,
        owner_id: owner_id
      };
      jQuery.post(ajaxurl, data, function(response) {
        alert(response);
      }); 
    });  
});    
</script>