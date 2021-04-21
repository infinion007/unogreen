<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Change Password
                            </h2>

                        </div>
                             <?php if($this->session->flashdata('msg')) {?>
              

		                <div class="alert bg-green alert-dismissible" role="alert">
			                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                <?php echo $this->session->flashdata('msg');?>
		                </div>
               			<?php }?>
                		<?php if($this->session->flashdata('msg1')) {?>
              

               			<div class="alert bg-pink alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <?php echo $this->session->flashdata('msg1');?>
                        </div>
                		<?php }?>

                		<div class="body">
                		 	<div class= "row" id="email_div">
                		 	<div class="col-sm-6">
	                		 	<div class="form-line"><b style="color: black">Email Id</b>
	                                <input type="text" name="Email Id" id="email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" readonly />
	                            </div>
	                        </div>
                         	<div class="col-sm-6">
                		 	 	<div class="form-line"><br>
                                 <button type="button" id="send_otp" class="btn btn-info" onclick="loadData()">Send OTP</button>
                              	</div>
                      		</div>
                      		
                       		</div>
                       		<div class="row" id="otp_div">
                       			<div class="col-sm-6">
	                		 	<div class="form-line"><b style="color: black">OTP(<span id="msg" style="color:green"></span>)</b>
	                                <input type="text" name="otp" id="otp" class="form-control" value=""   />
	                            </div>
	                        </div>
                         	<div class="col-sm-6">
                		 	 	<div class="form-line"><br>
                                 <button type="button" class="btn btn-success"  onclick="varify_otp()">Varify otp</button>
                              	</div>
                      		</div>
                       		</div>
                       		<div class="row" id="change_pass">
                       			<form action="<?php echo base_url('Admin_page/change_pass'); ?>" method="post">
                       			<div class="col-sm-6">
	                		 	<div class="form-line"><b style="color: black">Enter Your New Password</b>
	                                <input type="password" name="password" id="password" class="form-control" value=""  />
	                            </div>
	                        </div>
                         	<div class="col-sm-6">
                		 	 	<div class="form-line"><br>
                                 <button type="submit" class="btn btn-success">Save</button>
                              	</div>
                      		</div>
                      		</form>
                       		</div>
                    	</div>
                </div>
            </div>
            </div>
        </div>
  </section>

  <script type="text/javascript">

  	function loadData(argument) {
  		              $.ajax({
    url: "<?php  echo base_url('Admin_page/add_otp'); ?>",
    type: "POST",
    data:"email=" +$("#email").val() ,
    dataType:"text",
    success: function(data){
    	$('#otp_div').show();
    	$('#msg').html('OTP send with respected email id.');
      $("#send_otp").html("Re-Send OTP");
    }

    }) 
  	}
  	function varify_otp(argument) {
  		if ($('#otp').val()) {

  		$.ajax({
    url: "<?php  echo base_url('Admin_page/varify_otp'); ?>",
    type: "POST",
    data:"email=" +$("#email").val()+"&otp=" +$("#otp").val() ,
    dataType:"text",
    success: function(data){
    	if (data==1) {
    		$('#otp_div').hide();
    		$('#email_div').hide();
    		$('#change_pass').show();

    	}else{
    		alert('Please enter valid otp.');
    	}
    }

    }) 
    }else{
    	alert("Please Enter OTP");
    }
  	}
</script>
<?php  include 'footer.php'; ?>
<script type="text/javascript">
		$(document).ready(function (argument) {
  		$('#otp_div').hide();
  		$('#change_pass').hide();
  	});
</script>