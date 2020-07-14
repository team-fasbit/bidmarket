<div class="container-fluid">
  <div id="owner_container">
    <form id="create_project_form">
    <input type="hidden" id="bid_number" name="bid_number" value="<?php echo $bidnumber; ?>">
    <input type="hidden" id="owner_id" name="owner_id" value="<?php echo $signup_key; ?>">
      <div class="row">
        <div class="col">
            <div class="form-group">
              Type of Project:
              <select name="project" id="project" class="form-control">
                <option value="">Choose Type</option>
                <?php
                foreach ($results_project as $key_project) {
                  echo "<option value='".$key_project->name."'>".$key_project->name."</option>";
                }
                ?>
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              Priority:
              <select name="priorities" id="priorities" class="form-control">
                <option value="">Choose Priority</option>
                <?php
                  foreach ($results_priorities as $key_priority) {
                    echo "<option value='".$key_priority->name."'>".$key_priority->name."</option>";
                  }
                ?>
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              Amount:
              <input type="text" name="amount" id="amount" class="form-control">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
            <div class="form-group">
              Description:
              <textarea name="description" id="description"></textarea>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
            <div class="form-group">
              Picture:
              <input type="text" id="picturepreview" name="picturepreview" class="form-control" >
              <div id="previewimage"></div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              Location:
              <input type="text" id="projectlocation" name="projectlocation" class="form-control"  >
              <div id="map" style="height: 200px"></div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
   jQuery(document).ready( function() {
        jQuery("#previewimage").uploadFile({
                url: ajaxurl,
                formData: { action: 'uploadpreview' },
                fileName:"myfile",
                allowedTypes: "jpg,png,gif",
                maxFileSize: "5358562",
                allowDuplicates: false,
                duplicateStrict: true,
                showFileCounter: false,
                maxFileCount:1,
                showStatusAfterSuccess: true,
                showProgress: true,  
                onSuccess:function(data)
                 {
                   jQuery("#picturepreview").val(data); 
                 }
        });       
        CKEDITOR.replace( 'description', { toolbarGroups : [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
            { name: 'forms', groups: [ 'forms' ] },
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'indent', 'list', 'blocks', 'align', 'bidi', 'paragraph' ] },
            { name: 'links', groups: [ 'links' ] },
            { name: 'styles', groups: [ 'styles' ] },
            { name: 'colors', groups: [ 'colors' ] },
            { name: 'insert', groups: [ 'insert' ] },
            { name: 'tools', groups: [ 'tools' ] },
            { name: 'others', groups: [ 'others' ] },
            { name: 'about', groups: [ 'about' ] }
          ],      
          removeButtons : 'Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Link,Unlink,Anchor,Maximize,ShowBlocks,About,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Source,Save,NewPage,Preview,Print,Templates'
        });
        jQuery("#create_project_form").validate({
          ignore: [],
          rules: {
                 project: "required",
                 priorities: "required",
                 picturepreview: "required",
                 projectlocation: "required",
                 amount:{
                  required: true,
                  number: true
                 },
                 description:{ required: function(textarea) {
                    CKEDITOR.instances[textarea.id].updateElement();
                    var editcontent = textarea.value.replace(/<[^>]*>/gi,'');
                    return editcontent.length===0;    
                 },
                },
          },
          messages: {
            project: "Please Choose a Type of Project",
            priorities: "Please Choose a Priority",
            amount:{
              required: "Please enter amount",
              number: "Amount must be a number"
            },
            description: "Please enter description",
            picturepreview: "Please upload an preview picture",
            projectlocation: "Please choose location on the map"
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var owner_id=jQuery("#owner_id").val();
            var bid_number=jQuery("#bid_number").val();
            var amount=jQuery("#amount").val();
            var description=jQuery("#description").val();
            var project=jQuery("#project").val();
            var priorities=jQuery("#priorities").val();
            var projectlocation=jQuery("#projectlocation").val();
            var picturepreview=jQuery("#picturepreview").val();            
            var data= {
                action:'save_project',
                owner_id: owner_id,
                bid_number: bid_number,
                amount: amount,
                description: description,
                project: project,
                priorities: priorities,
                projectlocation: projectlocation,
                picturepreview: picturepreview,
            };
            jQuery.post(ajaxurl, data, function(response) {
              alert(response);
              location.reload();
            });            
          }
        });       
});  
</script>
