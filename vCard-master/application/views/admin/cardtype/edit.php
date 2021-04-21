

<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <h2> <?php echo empty($cardtype->id) ? 'Add a New User' : 'Edit User '.$cardtype->name; ?></h2>
     <!--  <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?> -->
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('name', set_value('name', $cardtype->name), 'class="form-control" placeholder="Name" id="name"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10 input-group">
              <textarea name="des" class="status"  placeholder="Description" style="padding:10px" rows="2" value="<?php echo $cardtype->address; ?>" cols="80"></textarea>
            </div>
          </div>
            <div class="form-group row">
              <label for="status" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10 input-group">
                <span class="input-group-addon" id="status"><i class="la la-warning"></i> </span>
                <?php
                echo form_dropdown('status', array('0' => 'active','1'=>'suspend'),
                $this->input->post('status') ? $this->input->post('status') : $cardtype->status,'class="form-control status" aria-describedby="status"'); ?>
              </div>
            </div>
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($cardtype->id) ? form_submit('submit', 'Save', 'class="btn btn-primary pull-right"') : form_submit('submit', 'Update', 'class="btn btn-primary pull-right"');?>
    	      </div>
    	    </div>
    	 <?php form_close(); ?>
    </div>
  </div>
</div>
