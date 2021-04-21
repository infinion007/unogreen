<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
              
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
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
                    
                        <div class="header">
                            <h2>
                               Generate Links 
                            </h2>

                        </div>
                        <br>
                           <div class="body">
                            <form   action="<?php echo base_url('Admin_page/generate_link_add'); ?>" method="post" >

                            <div class="form-group">
                                <div class="form-line"><b style="color: black">Number Of Links</b>
                                    <input type="text" class="form-control"   name="no_of_link" id="mobile"  required="" onkeypress="return isNumberKey(event)" maxlength="10"   />
                                    
                                </div>
                            </div>
                           
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect" >Save</button>
                        </div>
                         </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php  include 'footer.php'; ?>