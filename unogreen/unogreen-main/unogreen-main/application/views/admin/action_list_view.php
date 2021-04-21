<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/select2/select2/master/dist/css/select2.min.css">
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             Action 
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/action_form_view'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20">Add</button></a>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Role Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                          $i=1;
                                          foreach ($action as $key => $value) {
                                          
                                         ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $value['role_name']; ?></td>
                                            
                                            <td><a href="<?php echo base_url('Admin_page/action_form_view/'.$value['id']); ?>"><button type="button" class="btn btn-info waves-effect"><i class="material-icons">mode_edit</i></button></a></td>
                                            <td><a href="<?php echo base_url('Admin_page/delete_action/'.$value['id']); ?>" onclick="return confirm('Are you sure?');" ><button type="button" class="btn btn-danger waves-effect"><i class="material-icons">delete</i></button></a></td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    <?php  include 'footer.php'; ?>