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
                               about_us's
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Add about_us</button>
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
                                            <th>Photo</th>
                                            
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>Photo</th>
                                            
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                           
                                           $query = $this->db->query('select * from about_us');

                                          $row= $query->result_array();
                                          $i=1;
                                          foreach ($row as $key => $value) {
                                              # code...
                                         

                                         ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><img src="<?php echo base_url('uploads/'.$value['photo']); ?>" style="height: 50px;width: 50px"></td>
                                            
                                           
                                            <td><button type="button" class="btn btn-info waves-effect" onclick="get(<?php echo $value['id']; ?>)"><i class="material-icons">mode_edit</i></button></td>
                                            <td><a href="<?php echo base_url('Admin_page/delete_about_us/'.$value['id']); ?>" onclick="return confirm('Are you sure?');" ><button type="button" class="btn btn-danger waves-effect"><i class="material-icons">delete</i></button></a></td>
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
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add about_us</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('Admin_page/add_about_us'); ?>" method="post" enctype="multipart/form-data">
                              
                            

                              <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="photo" class="form-control" required="" />
                                        </div>
                            </div>
                           <div class="form-group">
                                        <div class="form-line">
                                           
                                            <textarea name="des"  class="form-control ckeditor" placeholder="Description" required="" ></textarea>
                                        </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect">Save</button>
                            <button type="button" class="btn btn-title waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                         </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function get(argument) {
                    // body...
                    
                    $.ajax({
    url: "<?php  echo base_url('Admin_page/fetch_about_us'); ?>",
    type: "POST",
    data:"id=" +argument ,
    dataType:"text",
    success: function(data){
     
// alert(data);
     // $("#load_video").html(data)
     document.getElementById('id').value=argument;
    $('#myModal').modal('show');
    $("#edit").html(data)
    }

    }) 

                }
            </script>

            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
                            <form action="<?php echo base_url('Admin_page/edit_about_us'); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id" value="">
                                <div id="edit">
                          
                           </div>
                        </div>
       <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect">Save</button>
                            <button type="button" class="btn btn-title waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                         </form>
    </div>

  </div>
</div>

    <?php  include 'footer.php'; ?>