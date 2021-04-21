<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<style type="text/css">
  /* Loader GIF*/
  .loaderImage{
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin: auto; 
    width: 10%;
    height: 20%;
    z-index: 9999;
    position: fixed;
    color: #fff; 

  }
  .bodyLoaderWithOverlay{
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
    background-color: #000;
    filter: alpha(Opacity=80);
    opacity: .8;
    display: none;
  }
</style>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
              
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               User Form  
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/user'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">User List</button></a>
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
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <?php echo $this->session->flashdata('msg1');?>
                            </div>
                <?php }?>
                <div class="bodyLoaderWithOverlay">
                          <div class="loaderImage text-center">
                            <img src="<?php echo base_url(); ?>/assets/img/loader.gif" width="100%" height="100%">
                            <p><center>Please Wait</center></p>
                          </div></div>
                        <div class="body">
                            <form  name="myForm" action="<?php echo base_url('Admin_page/useradd'); ?>"  method="post" onsubmit="return validateForm()" >
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">First Name</b>
                                    <input type="text" name="fname" class="form-control name" placeholder="First Name"  value="<?php if(!empty($user[0]['fname'])){ echo $user[0]['fname']; } ?>"  />
                                    <input type="hidden" id="id" name="id" value="<?php if(!empty($user[0]['id'])){ echo $user[0]['id']; } ?>">
                                    
                                </div>
                              <br>
                            </div>
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Last Name</b>
                                    <input type="text" name="lname" class="form-control name" placeholder="Last Name"  value="<?php if(!empty($user[0]['lname'])){ echo $user[0]['lname']; } ?>"  />
                                    
                                </div>
                              <br>
                            </div>
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Company Name</b>
                                    <input type="text" name="company" class="form-control" placeholder="Company Name"  value="<?php if(!empty($user[0]['company'])){ echo $user[0]['company']; } ?>"  />
                                    
                                </div>
                              <br>
                            </div>
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Contact Number</b>
                                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number"  value="<?php if(!empty($user[0]['contact_number'])){ echo $user[0]['contact_number']; } ?>" onkeypress="return isNumberKey(event)" maxlength="10"  />
                                    
                                </div>
                              <br>
                            </div>
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Email</b>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email"  value="<?php if(!empty($user[0]['email'])){ echo $user[0]['email']; } ?>" <?php if(!empty($user[0]['email'])){ echo "readonly"; } ?>  />
                                    
                                </div>
                              <br>
                            </div>
                            <div class="form-group"> 
                                <div class="form-line"><b style="color: black">Address</b>
                                 <textarea class="form-control" name="address" ><?php if(!empty($user[0]['address'])){ echo $user[0]['address']; } ?></textarea>
                                </div>
                            </div>
                
                             <?php if(empty($user[0]['created_date'])){ ?>
                                      <input type="hidden"  name="created_date" value="<?php echo date("Y-m-d"); ?>">
                             <?php } ?> 
                              <input type="hidden" id="email_check" value="">
                        <div class="modal-footer">
                            <button type="button" onclick="validateForm()" class="btn btn-primary waves-effect" >Save</button>
                            <button type="button" class="btn btn-title waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      
function validateForm(argument) {
  if(document.forms["myForm"]["id"].value == ""){
    $.ajax({
                  type:'POST',
                  url:'<?php echo base_url('Admin_page/email_check'); ?>',
                  data:{email: document.forms["myForm"]["email"].value },
                  success:function(data){
                    var obj = JSON.parse(data);
                    if(obj.status == '1'){
                                  $('#email_check').val(obj.status);
                                  
                    }
                   }
                });
  }
  
  if (document.forms["myForm"]["fname"].value == "") {
    alert("Name must be filled out");
    // $("input[name='fname']").focus();

    return false;
  }else if (document.forms["myForm"]["lname"].value == "") {
    alert("Last name must be filled out");
    return false;
  }else if (document.forms["myForm"]["company"].value == "") {
    alert("Company name must be filled out");
    return false;
  }else if (document.forms["myForm"]["contact_number"].value == "") {
    alert("Contact number must be filled out");
    return false;
  }else if (document.forms["myForm"]["email"].value == "") {
    alert("Email name must be filled out");
    return false;
  }else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.forms["myForm"]["email"].value)) {
    alert("Enter valid email id");
    return false;
  }else if($('#email_check').val()==1){
      alert('email already exit');
      return false;
  }else{
    $.ajax({
                  type:'POST',
                  url:'<?php echo base_url('Admin_page/useradd'); ?>',
                  data:$('form').serialize(),
                  beforeSend:function(){
                   $(".bodyLoaderWithOverlay").show();
                  },
                  success:function(data){
                    var obj = JSON.parse(data);
                    if(obj.status == 'error')
                                {
                                 alert(obj.message);
                                    
                                }
                                if(obj.status == 'success')
                                {
                                 alert(obj.message);
                                
                          location.reload();
                        
                             }
                   },complete:function(){
                
                    $(".bodyLoaderWithOverlay").hide();
                   }
                });
  }

}

</script>

    <?php  include 'footer.php'; ?>

      