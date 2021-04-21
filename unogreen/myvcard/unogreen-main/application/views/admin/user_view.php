<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<script>
   function search(page_num) {
     page_num = page_num?page_num:0;
     
     var name = $('#name').val();
     $.ajax({
      
       url: '<?php echo base_url(); ?>Admin_page/manage_user/'+page_num,
       data:{page :page_num,name1:name},
       beforeSend: function () {
          $('.loading').show();
       },
       success: function (html) {
         //alert(html);
         $('#postList').html(html); 
          $('.loading').fadeOut("slow");
       }
     });
   } 
</script>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
              
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             User List
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/Usercreation'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20" >Add</button></a>
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
                        <div class="col-lg-3">
            <input type="text" class="employ_button form-control" name="name" onkeyup="search()" id = "name" placeholder="Search User">
         </div>
                        

                        <div class="card-body p-0 att_div" id="postList">
            <?php
               if(isset($user) && !empty($user)) { ?>
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Sr</th>
                     <th>Full Name</th>
                     <th>Contact Number</th>
                     <th>Email</th>
                     <th>Company Name</th>
                     <th>Created Date </th>
                     <th>Action</th>
                  </tr>
               </thead>
                 <tbody>
                  <?php $i=1; foreach ($user as $user) { ?>
                  <tr>
                     <td><?php echo $i; ?>.</td>
                     <td><?php echo $user['fname']." ".$user['lname']; ?></td>
                     <td><?php echo $user['contact_number']; ?></td>
                     <td><?php echo $user['email']; ?></td>
                     <td><?php echo $user['company']; ?></td>
                     <td><?php echo $user['created_date']; ?></td>
                     <td><a href="<?php echo base_url('Admin_page/Usercreation/'.$user['id'].'/user'); ?>"><button type="button" class="btn btn-info waves-effect"><i class="material-icons">mode_edit</i></button></a>
                         
                                <a onclick="return confirm('Are you sure?')" href="<?php echo base_url('Admin_page/delete_record/user/'.$user['id']); ?>"><button type="button" class="btn btn-danger waves-effect"><i class="material-icons">delete</i></button></a>
                    </td>
                         
                        
                     
                  </tr>
                  <?php $i++; $sr++;
                     } ?>
               </tbody>
            </table>
             <div class="box-footer clearfix"> 
               <?php echo $this->ajax_pagination->create_links(); ?>
            </div> 
            <?php
               } else {
                 echo "No user to show";
               }
               ?>
         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
   
      function searchFilter(page_num) {
        page_num = page_num?page_num:0;
       
        var filter_by_name = $('#filter').val();
        var name = $('#name').val();
        var account_type = $('#account_type').val();
        $.ajax({
         
          url: '<?= base_url(); ?>Admin_page/manage_user/'+page_num,
          data:{page :page_num,name:filter_by_name,name1:name},
          
          success: function (html) {
            $('#postList').html(html);
          }
        });
      }
</script>
    <?php  include 'footer.php'; ?>