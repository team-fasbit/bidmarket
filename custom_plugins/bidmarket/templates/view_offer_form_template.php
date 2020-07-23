<div class="container border">
<div id="container_form_offer">
  <form id="offer_form">
    <div class="row">
      <div class="col">
        <div class="form-group">
            Amount:
            <input type="text" name="offer_amount" id="offer_amount" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
            Start date:
            <input type="text" name="start_date" id="start_date" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
            Description:
            <textarea name="offer_description" id="offer_description"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
            <input type="hidden" name="offer_bid_id" id="offer_bid_id" value="<?php echo $bid_id; ?>">
            <button type="submit" class="btn btn-primary bidmarket_button"><i class="fa fa-send"></i> Send</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
jQuery(document).ready( function($) {
        jQuery('#start_date').datepicker({
        });
        CKEDITOR.replace( 'offer_description', { toolbarGroups : [
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
        jQuery("#offer_form").validate({
          ignore: [],
          rules: {
                 offer_amount:"required",
                 start_date:"required",
                 offer_description: { required: function(textarea) {
                    CKEDITOR.instances[textarea.id].updateElement();
                    var editcontent = textarea.value.replace(/<[^>]*>/gi,'');
                    return editcontent.length===0;    
                 } },
          },
          messages: {
             offer_amount: "Please enter first name",
             start_date: "Please enter last name",
             offer_description: "Please enter description",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var id=jQuery("#id").val();
            var offer_amount=jQuery("#offer_amount").val();
            var start_date=jQuery("#start_date").val();
            var offer_description=jQuery("#offer_description").val();
            var offer_bid_id=jQuery("#offer_bid_id").val();
            var data= {
                action:'send_offer',
                id: id,
                offer_amount: offer_amount,
                start_date: start_date,
                offer_bid_id: offer_bid_id,
                offer_description: offer_description,
            };
            jQuery.post(ajaxurl, data, function(response) {          
                alert('Success');
                //jQuery("#container_form_offer").html((response));
            });            
          }
        });       
});    
</script>