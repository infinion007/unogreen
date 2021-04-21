

<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <h2> <?php echo empty($user->id) ? 'Add a New User' : 'Edit User '.$user->name; ?></h2>
     <!--  <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?> -->
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <?php echo form_open(); ?>
    	    <div class="form-group row">
    	      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    	      <div class="col-sm-10">
    		      <?php
                	echo form_input('name', set_value('name', $user->name), 'class="form-control" placeholder="Name" id="name"');
    		      ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('email', set_value('email', $user->email), 'class="form-control" placeholder="Email" id="email"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <?php
                  echo form_input('phone', set_value('phone', $user->phone), 'class="form-control" placeholder="Phone" id="Phone"');
              ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
              <?php
              echo form_dropdown('type[]', array('0' => 'Super Admin','1'=>'Admin','2'=>'Agent','3'=>'Gust'),
              $this->input->post('type') ? $this->input->post('type') : $vcard->type,'class="form-control status" id="type_1"'); ?>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Permissions</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="permission[]" id="gridRadios1" value="option1" checked>
                    Permission 1
                  </label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="permission[]" id="gridRadios2" value="option2">
                    Permission 2
                  </label>
                </div>
              </div>
            </div>
          </div>
          </div>
    	    <div class="form-group row">
    	      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    	      <div class="col-sm-10">
              <?php
              	echo form_password('password', '', 'class="form-control" placeholder="Password" id="passwpord"');
               ?>
    	      </div>
    	    </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <?php
                echo form_password('password_confirm', '', 'class="form-control" placeholder="Confirm Password" id="password_confirm"');
               ?>
            </div>
          </div>
          <hr>
    	    <div class="form-group row">
    	      <div class="offset-sm-2 col-sm-10">
              <?php echo empty($user->id) ? form_submit('submit', 'Save', 'class="btn btn-primary pull-right"') : form_submit('submit', 'Update', 'class="btn btn-primary pull-right"');?>
    	      </div>
    	    </div>
    	 <?php form_close(); ?>
    </div>
  </div>
</div>
