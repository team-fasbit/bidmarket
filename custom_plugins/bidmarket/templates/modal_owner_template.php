<div class="container">
  <div id="owner_container">
   <h1>Owners</h1>
   <form id="edit_owners_form">
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                First Name:
                <input type="hidden" id="id" name="id" class="form-control" disabled  value="<?php echo $id; ?>">
                <input type="text" id="firstname" name="firstname" class="form-control" disabled  value="<?php echo $firstname; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Last Name:
                <input type="text" id="lastname" name="lastname" class="form-control" disabled  value="<?php echo $lastname; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Street:
                <input type="text" id="street" name="street" class="form-control" disabled  value="<?php echo $street; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                City:
                <input type="text" id="city" name="city" class="form-control" disabled  value="<?php echo $city; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                State:
                <input type="text" id="state" name="state" class="form-control" disabled  value="<?php echo $state; ?>">
            </div>
        </div>        
    </div>
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Zip:
                <input type="text" id="zip" name="zip" class="form-control" disabled  value="<?php echo $zip; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Email #1:
                <input type="text" id="email1" name="email1" class="form-control" disabled  value="<?php echo $email1; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Email #2:
                <input type="text" id="email2" name="email2" class="form-control" disabled  value="<?php echo $email2; ?>">
            </div>
        </div>        
    </div> 
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Phone 1:
                <input type="text" id="phone1" name="phone1" class="form-control" disabled  value="<?php echo $phone1; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Phone 2:
                <input type="text" id="phone2" name="phone2" class="form-control" disabled value="<?php echo $phone2; ?>">
            </div>
        </div>
    </div>             
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Customer ID:
                <input type="text" id="customerid" name="customerid" class="form-control" disabled disabled value="<?php echo $customerid; ?>">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Project Type:
                <select id="project" name="project" class="form-control" disabled>
                    <option selected value="<?php echo $idproject; ?>"><?php echo $project; ?></option>
                </select>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Priorities:
                <select id="priorities" name="priorities" class="form-control" disabled>
                    <option selected value="<?php echo $priorities; ?>"><?php echo $priorities; ?></option>
                </select>
            </div>
        </div>        
    </div>  
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                Description:
                <textarea id="description" name="description" class="form-control" disabled placeholder="Description"> <?php echo $description; ?></textarea>
            </div>
        </div>
    </div>
