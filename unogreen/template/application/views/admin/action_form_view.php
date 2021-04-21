<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Action Form view
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/action_list'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Action List</button></a>
                            </ul>
                        </div>
                            <?php if($this->session->flashdata('msg')) {?>
              
            			<div class="alert bg-green alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <?php echo $this->session->flashdata('msg');?>
                        </div>
                		<?php }?>
                			<?php if($this->session->flashdata('msg1')) {?>
                		<div class="alert bg-pink alert-dismissible" role="alert">
                          	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                          	</button>
                            <?php echo $this->session->flashdata('msg1');?>
                        </div>
                			<?php }?>
                        <div class="body">
                        	<form action="<?php echo base_url('Admin_page/action'); ?>" method="post" >
                        		<div class="col-sm-12">
                              <div class="form-line"><b>User Role</b>
                                <select class="form-control" name="user_role" id="assign_to" required="" onchange="checkuser(this.value)">
                                     <option value="">Select Role</option>
                               <?php foreach ($roles as $user_value) {?>
                                <option value="<?php echo $user_value['id']; ?>" <?php if(!empty($action)){ if ($action['user_role']==$user_value['id']) { echo "selected"; } } ?>><?php echo $user_value['role_name']; ?></option>
                                 
                              <?php } ?>
                             </select>
                              </div>
                          </div>
							<div class="row"><span class="material-icons">person_add</span>
								<input type="checkbox" name="users" value="0" class="filled-in chk-col-teal" id="users" <?php if(!empty($action)){ if (!$action['users']) { echo "checked"; } } ?> >
								<label class="form-check-label" for="users"><h5><b>User</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11" >
								<input type="checkbox" name="Usercreation" value="0" class="chk-col-red" id="Usercreation" <?php if(!empty($action)){ if (!$action['Usercreation']) { echo "checked"; } } ?> ><label class="chk-col-red" for="Usercreation">Add User</label>
								<input type="checkbox" name="user" value="0" class="chk-col-red" id="user" <?php if(!empty($action)){ if (!$action['user']) { echo "checked"; } } ?>>
								<label class="chk-col-red" for="user">User List</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">group_add</span>
								<input type="checkbox" name="customers" value="0" class="filled-in chk-col-teal" id="customers" <?php if(!empty($action)){ if (!$action['customers']) { echo "checked"; } } ?>><label class="form-check-label" for="customers"><h5><b>Customer</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="add_customer" value="0" class="chk-col-red" id="add_customer"  <?php if(!empty($action)){ if (!$action['add_customer']) { echo "checked"; } } ?>><label class="chk-col-red" for="add_customer" >Add Customer</label>
								<input type="checkbox" name="customer" value="0" <?php if(!empty($action)){ if (!$action['customer']) { echo "checked"; } } ?> class="chk-col-red" id="customer" >
								<label class="chk-col-red" for="customer">customer List</label>
								<input type="checkbox" name="rejected_customer" value="0" <?php if(!empty($action)){ if (!$action['rejected_customer']) { echo "checked"; } } ?> class="chk-col-red" id="rejected_customer"><label class="chk-col-red" for="rejected_customer">Rejected customer List</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">groups</span>
								<input type="checkbox" name="lead" value="0" <?php if(!empty($action)){ if (!$action['lead']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="lead"><label class="form-check-label" for="lead"><h5><b>Lead</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="lead_assigned_by" value="0" <?php if(!empty($action)){ if (!$action['lead_assigned_by']) { echo "checked"; } } ?> class="chk-col-red" id="lead_assigned_by"><label class="chk-col-red" for="lead_assigned_by">Lead Assigned By</label>
								<input type="checkbox" name="lead_assigned_by_self" value="0" <?php if(!empty($action)){ if (!$action['lead_assigned_by_self']) { echo "checked"; } } ?> class="chk-col-red" id="lead_assigned_by_self"><label class="chk-col-red" for="lead_assigned_by_self">Lead Assigned By Self</label>
								<input type="checkbox" name="lead_assigned_to" value="0" <?php if(!empty($action)){ if (!$action['lead_assigned_to']) { echo "checked"; } } ?> class="chk-col-red" id="lead_assigned_to"><label class="chk-col-red" for="lead_assigned_to">Lead Assigned To</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">email</span>
								<input type="checkbox" name="emailtemplate" value="0" <?php if(!empty($action)){ if (!$action['emailtemplate']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="emailtemplate"><label class="form-check-label" for="emailtemplate"><h5><b>Email Template</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="email_template" value="0" <?php if(!empty($action)){ if (!$action['email_template']) { echo "checked"; } } ?> class="chk-col-red" id="email_template"><label class="chk-col-red" for="email_template">Email Template</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">6_ft_apart</span>
								<input type="checkbox" name="reportingperson" value="0" <?php if(!empty($action)){ if (!$action['reportingperson']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="reportingperson"><label class="form-check-label" for="reportingperson"><h5><b>Reporting Person</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="reporting_person" value="0" <?php if(!empty($action)){ if (!$action['reporting_person']) { echo "checked"; } } ?> class="chk-col-red" id="reporting_person"><label class="chk-col-red" for="reporting_person">Reporting Person</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">local_grocery_store</span>
								<input type="checkbox" name="services" value="0" <?php if(!empty($action)){ if (!$action['services']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="services"><label class="form-check-label" for="services"><h5><b>Services</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="products" value="0" <?php if(!empty($action)){ if (!$action['products']) { echo "checked"; } } ?> class="chk-col-red" id="products"><label class="chk-col-red" for="products">Services</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">people_alt</span>
								<input type="checkbox" name="meetings" value="0" <?php if(!empty($action)){ if (!$action['meetings']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="meetings"><label class="form-check-label" for="meetings"><h5><b>Meeting</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="meeting" value="0" <?php if(!empty($action)){ if (!$action['meeting']) { echo "checked"; } } ?> class="chk-col-red" id="meeting"><label class="chk-col-red" for="meeting">Meeting</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">notifications_active</span>
								<input type="checkbox" name="set_reminder" value="0" <?php if(!empty($action)){ if (!$action['set_reminder']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="set_reminder"><label class="form-check-label" for="set_reminder"><h5><b>Set Remainder List</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="set_remainder_list" value="0" <?php if(!empty($action)){ if (!$action['set_remainder_list']) { echo "checked"; } } ?> class="chk-col-red" id="set_remainder_list"><label class="chk-col-red" for="set_remainder_list">Set Remainder List</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">account_box</span>
								<input type="checkbox" name="clients" value="0" <?php if(!empty($action)){ if (!$action['clients']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="clients"><label class="form-check-label" for="clients"><h5><b>Clients</b></h5></label>
								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="clients_list" value="0" <?php if(!empty($action)){ if (!$action['clients_list']) { echo "checked"; } } ?> class="chk-col-red" id="clients_list"><label class="chk-col-red" for="clients_list">Clients</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">power</span>
								<input type="checkbox" name="demolist" value="0" <?php if(!empty($action)){ if (!$action['demolist']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="demolist"><label class="form-check-label" for="demolist"><h5><b>Demo Account Request</b></h5></label>
								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="demo_list" value="0" <?php if(!empty($action)){ if (!$action['demo_list']) { echo "checked"; } } ?> class="chk-col-red" id="demo_list"><label class="chk-col-red" for="demo_list">Demo Account Request</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">call</span>
								<input type="checkbox" name="calls" value="0" <?php if(!empty($action)){ if (!$action['calls']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="calls"><label class="form-check-label" for="calls"><h5><b>Calls</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="support_calls" value="0" <?php if(!empty($action)){ if (!$action['support_calls']) { echo "checked"; } } ?> class="chk-col-red" id="support_calls"><label class="chk-col-red" for="support_calls">Calls List</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">text_snippet</span>
								<input type="checkbox" name="quotations" value="0" <?php if(!empty($action)){ if (!$action['quotations']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="quotations"><label class="form-check-label" for="quotations"><h5><b>Quotation</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="quotation" value="0" <?php if(!empty($action)){ if (!$action['quotation']) { echo "checked"; } } ?> class="chk-col-red" id="quotation"><label class="chk-col-red" for="quotation">Quotation List</label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons"> build </span>
								<input type="checkbox" name="changepassword" value="0" <?php if(!empty($action)){ if (!$action['changepassword']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="changepassword"><label class="form-check-label" for="changepassword"><h5><b>Change Password</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="change_password" value="0" <?php if(!empty($action)){ if (!$action['change_password']) { echo "checked"; } } ?> class="chk-col-red" id="change_password"><label class="chk-col-red" for="change_password">Change Password </label>
								</div>
								</div>
								<hr style="height:1px;border-width:0; margin-top: 0em;background-color:teal">

								<div class="row"><span class="material-icons">file_copy</span>
								<input type="checkbox" name="performa" value="0" <?php if(!empty($action)){ if (!$action['performa']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="performa"><label class="form-check-label" for="performa"><h5><b>Performa Invoice</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="Performanvoice" value="0" <?php if(!empty($action)){ if (!$action['Performanvoice']) { echo "checked"; } } ?> class="chk-col-red" id="Performanvoice"><label class="chk-col-red" for="Performanvoice">Performa Invoice</label>
								</div>
								</div>
								<div class="row"><span class="material-icons">groups</span>
								<input type="checkbox" name="travelling_req" value="0" <?php if(!empty($action)){ if (!$action['travelling_req']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="travelling_req"><label class="form-check-label" for="travelling_req"><h5><b>Travelling Allowance Req</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="view_req" value="0" <?php if(!empty($action)){ if (!$action['view_req']) { echo "checked"; } } ?> class="chk-col-red" id="view_req"><label class="chk-col-red" for="view_req">View Request</label>
								<input type="checkbox" name="paid_req" value="0" <?php if(!empty($action)){ if (!$action['paid_req']) { echo "checked"; } } ?> class="chk-col-red" id="paid_req"><label class="chk-col-red" for="paid_req">Paid Request</label>
								</div>
								</div>
								<div class="row"><span class="material-icons">groups</span>
								<input type="checkbox" name="vendor" value="0" <?php if(!empty($action)){ if (!$action['vendor']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="vendor"><label class="form-check-label" for="vendor"><h5><b>Vendor</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="add_vendor" value="0" <?php if(!empty($action)){ if (!$action['add_vendor']) { echo "checked"; } } ?> class="chk-col-red" id="add_vendor"><label class="chk-col-red" for="add_vendor">Add Vendor</label>
								<input type="checkbox" name="view_vendor" value="0" <?php if(!empty($action)){ if (!$action['view_vendor']) { echo "checked"; } } ?> class="chk-col-red" id="view_vendor"><label class="chk-col-red" for="view_vendor">View Vendor</label>
								</div>
								</div>
								
								<div class="row"><span class="material-icons">groups</span>
								<input type="checkbox" name="expenditure" value="0" <?php if(!empty($action)){ if (!$action['expenditure']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="expenditure"><label class="form-check-label" for="expenditure"><h5><b>Expenditure</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="add_exp" value="0" <?php if(!empty($action)){ if (!$action['add_exp']) { echo "checked"; } } ?> class="chk-col-red" id="add_exp"><label class="chk-col-red" for="add_exp">Add Expenditure</label>
								<input type="checkbox" name="view_exp" value="0" <?php if(!empty($action)){ if (!$action['view_exp']) { echo "checked"; } } ?> class="chk-col-red" id="view_exp"><label class="chk-col-red" for="view_exp">View Expenditure</label>
								</div>
								</div>

								<div class="row"><span class="material-icons">groups</span>
								<input type="checkbox" name="sale_target" value="0" <?php if(!empty($action)){ if (!$action['sale_target']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="sale_target"><label class="form-check-label" for="sale_target"><h5><b>Sale Target</b></h5></label>

								<div class="col-sm-offset-1 col-sm-11">
								<input type="checkbox" name="set_sale_target" value="0" <?php if(!empty($action)){ if (!$action['set_sale_target']) { echo "checked"; } } ?> class="chk-col-red" id="set_sale_target"><label class="chk-col-red" for="set_sale_target">Sales Target</label>
								<input type="checkbox" name="list_sale_target" value="0" <?php if(!empty($action)){ if (!$action['list_sale_target']) { echo "checked"; } } ?> class="chk-col-red" id="list_sale_target"><label class="chk-col-red" for="list_sale_target">View Expenditure</label>
								</div>
								</div>
								<div class="row"><span class="material-icons">groups</span>

<input type="checkbox" name="targetlist" value="0" <?php if(!empty($action)){ if (!$action['targetlist']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="targetlist"><label class="form-check-label" for="targetlist"><h5><b>Target List</b></h5></label>

<div class="col-sm-offset-1 col-sm-11">
<input type="checkbox" name="sales_target_list" value="0" <?php if(!empty($action)){ if (!$action['sales_target_list']) { echo "checked"; } } ?> class="chk-col-red" id="sales_target_list"><label class="chk-col-red" for="sales_target_list">Target List </label>
</div>
</div>






<div class="row"><span class="material-icons"> build </span>
<input type="checkbox" name="placedunder" value="0" <?php if(!empty($action)){ if (!$action['placedunder']) { echo "checked"; } } ?> class="filled-in chk-col-teal" id="placedunder"><label class="form-check-label" for="placedunder"><h5><b>Placed Under</b></h5></label>

<div class="col-sm-offset-1 col-sm-11">
<input type="checkbox" name="placed_under" value="0" <?php if(!empty($action)){ if (!$action['placed_under']) { echo "checked"; } } ?> class="chk-col-red" id="placed_under"><label class="chk-col-red" for="placed_under">Placed Under </label>
</div>
</div>
								<input type="hidden" name="id" value="<?php if(!empty($action)){ echo $action['id']; } ?>">
							<button type="submit" class="btn btn-info btn-lg" >Save</button>
						</form>
							

                    	</div>
				  </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
function checkuser(arg) {
 $.ajax({
          url: '<?= base_url(); ?>Admin_page/checkuser',
          method:'post',
          data:{user_role :arg},
         
          success: function (html) {
          var obj = JSON.parse(html);
         
          if (obj.status== 'failed') {
          $(':input[type="submit"]').prop('disabled', true);
          }
          if (obj.status== 'success') {
          $(':input[type="submit"]').prop('disabled', false);
          }
   
          }
        });
}
</script>

<?php  include 'footer.php'; ?>