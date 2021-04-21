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
                               Blog Category
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Add</button>
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
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                          $i=1;
                                          foreach ($category as $key => $value) {
                                          
                                         ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php 

                                             if ($value['status']=='1') {
                                                 # code...
                                                 echo 'Active';
                                             }else{
                                                 echo 'De-Active';
                                             }
                                             ?></td>
                                            <td><button type="button" class="btn btn-info waves-effect" onclick="get(<?php echo $value['id']; ?>)"><i class="material-icons">mode_edit</i></button></td>
                                            <td><a href="<?php echo base_url('news/delete/category/'.$value['id']); ?>" onclick="return confirm('Are you sure?');" ><button type="button" class="btn btn-danger waves-effect"><i class="material-icons">delete</i></button></a></td>
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
                            <h4 class="modal-title" id="defaultModalLabel">Add Cetegory</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('news/add/category'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <div class="form-line">
                                  <input type="text" name="name" class="form-control" placeholder="Category Name" id="name" required="" />
                                  <input type="hidden" name="id" class="form-control" id="id" />
                                  <input type="hidden" name="seo" class="form-control" id="seo" />
                              </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect">Save</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        </form>
                    </div>
                </div>
     </div>
      <script type="text/javascript">
                function get(argument) {
                    // body...
                    
                    $.ajax({
    url: "<?php  echo base_url('news/fetch_category'); ?>",
    type: "POST",
    data:"id=" +argument ,
    dataType:"text",
    success: function(data){
      var json = JSON.parse(data);
      $('#name').val(json["name"]);
      $('#seo').val(json["seo"]);
    document.getElementById('id').value=argument;
    $('#defaultModal').modal('show');
    }

    }) 

                }
            </script>      
    <?php  include 'footer.php'; ?>