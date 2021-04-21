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
                               Bulk Upload Customer List 
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/customer'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20" >Customer List</button></a>
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
                        <div class="body">
                            <form action="<?php echo base_url('Admin_page/bulk_upload_contact'); ?>" method="post" enctype="multipart/form-data">
                             
                             <div class="row">
                                  <div class="form-group col-sm-3"> 
                                <div class="form-line">
                                    <input type="file" name="csv" class="form-control" required="" accept=".csv" />
                                </div>
                                <input type="hidden" name="created_date" class="form-control" value="<?php echo date("Y-m-d H:i:s"); ?> " />
                              </div>
                            
                        <div class=" col-sm-3">
                            <button type="submit" class="btn btn-primary waves-effect">Upload</button>
                            <a href="<?php echo base_url('assets/sample/contact_csv_demo.csv'); ?>" download="" ><button type="button" class="btn btn-title waves-effect" style="background: red;color: white">Sample CSV</button></a>
                        </div>
                             </div>
                         </form>


                        </div>
                        <div class="header">
                            <h2>
                               Add Customer 
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/customer'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Customer List</button></a>
                            </ul> -->

                        </div>
                        <br>
                           <div class="body">
                            <form   action="<?php echo base_url('Admin_page/addcustomer'); ?>" method="post" >
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Name</b>
                                    <input type="text" class="form-control name"   name="name" id="name" value="<?php if(!empty($user[0]['name'])){ echo $user[0]['name']; } ?>"  />
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Company Name</b>
                                    <input type="text" class="form-control name"   name="company_name" id="company_name" value="<?php if(!empty($user[0]['company_name'])){ echo $user[0]['company_name']; } ?>"  />
                                    <input type="hidden" class="form-control name"   name="id" id="id" value="<?php if(!empty($user[0]['id'])){ echo $user[0]['id']; } ?>"  />
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Mobile Number</b>
                                    <input type="text" class="form-control"   name="mobile" id="mobile" value="<?php if(!empty($user[0]['mobile'])){ echo $user[0]['mobile']; } ?>" required="" onkeypress="return isNumberKey(event)" maxlength="10"   />
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Email</b>
                                    <input type="email" class="form-control "   name="emailid" id="emailid" value="<?php if(!empty($user[0]['emailid'])){ echo $user[0]['emailid']; } ?>"  />
                                    
                                </div>
                                <?php if(empty($user[0])){ ?>
                                    <input type="hidden" name="created_date" class="form-control" value="<?php echo date("Y-m-d H:i:s"); ?> " />
                                <?php } ?>    
                            </div>
                           
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect" >Save</button>

                            <a href="<?php echo base_url('Admin_page/customer'); ?>"><button type="button" class="btn btn-title waves-effect">CLOSE</button></a>
                        </div>
                         </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php  include 'footer.php'; ?>