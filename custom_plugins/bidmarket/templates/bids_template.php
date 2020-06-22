<div class="container border">
  <div id="bids_container">
   <h1>Bids</h1>
   <form id="bid_form">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Bid ID #:
                <input type="hidden" name="owner_id" id="owner_id" value="<?php echo $owner_id; ?>">
                <input type="hidden" name="contractor_id" id="contractor_id" value="<?php echo $contractor_id; ?>">
                <input type="text" id="bid" name="bid" disable value="<?php echo $bidnumber; ?>" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                Amount:
                <input type="text" id="amount" name="amount" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Description:
                <textarea  id="description" name="description" class="form-control"></textarea>
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
        CKEDITOR.replace( 'description' );
        jQuery("#bid_form").validate({
          ignore: [],
          rules: {
                 amount:{
                  required: true,
                  number: true
                 },
                 description:{ required: function(textarea) {
                    CKEDITOR.instances[textarea.id].updateElement();
                    var editcontent = textarea.value.replace(/<[^>]*>/gi,'');
                    return editcontent.length===0;    
                 }
                },
          },
          messages: {
             amount: "Please provide amount",
             description: "Please enter description",
          },
          errorClass: "error_validate",
          inputContainer: "form-group",
          submitHandler: function(response){
            var owner_id=jQuery("#owner_id").val();
            var contractor_id=jQuery("#contractor_id").val();
            var bid=jQuery("#bid").val();
            var amount=jQuery("#amount").val();
            var description=jQuery("#description").val();
            var data= {
                action:'save_bid',
                owner_id: owner_id,
                contractor_id: contractor_id,
                bid: bid,
                amount: amount,
                description: description
            };
              jQuery.post(ajaxurl, data, function(response) {
                jQuery("#bids_container").html((response));
                jQuery('html, body').animate({scrollTop: 0}, 0);
            });            
          }
        });       
}); 
</script>