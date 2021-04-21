<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<!-- <section>
	
	<div class="container-fluid">
            <div class="block-header">
            	<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    	 <div class="header">
                            <h2>
                               Profile
                            </h2>
                        </div>
                    </div>
                </div>
            	</div>
        	</div>
    </div>
                       
</section> -->

 <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                            <img src="<?php echo base_url('assets/admin'); ?>/images/user.png"  alt="User" />

                            </div>
                            <div class="content-area">
                                <h3><?php echo $this->session->userdata('fname')." ". $this->session->userdata('lname'); ?></h3>
                               <!--  <p>Web Software Developer</p> -->
                                <p><?php echo $role=roles($arrayName = array('id' => $this->session->userdata('user_type')))[0]['role_name'];  ?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Followers</span>
                                    <span>1.234</span>
                                </li>
                                <li>
                                    <span>Following</span>
                                    <span>1.201</span>
                                </li>
                                <li>
                                    <span>Friends</span>
                                    <span>14.252</span>
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                        </div>
                    </div>

                  
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="home" role="tab" data-toggle="tab">Profile</a></li>
                                    
                                </ul>

                                 <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-4 control-label">Name </label>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                    <h5><?php echo $this->session->userdata('fname')." ". $this->session->userdata('lname'); ?></h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-4 control-label">Email</label>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                    <h5><?php echo $this->session->userdata('email'); ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputExperience" class="col-sm-4 control-label">Contact Number</label>

                                                <div class="col-sm-8">
                                                   <div class="">
                                                    <h5><?php echo $this->session->userdata('contact_number'); ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php  include 'footer.php'; ?>