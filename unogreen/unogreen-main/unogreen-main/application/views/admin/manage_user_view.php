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
                     <td><?php echo $i+$sr; ?>.</td>
                     <td><?php echo $user['fname']." ".$user['lname']; ?></td>
                     <td><?php echo $user['contact_number']; ?></td>
                     <td><?php echo $user['email']; ?></td>
                     <td><?php echo $user['company']; ?></td>
                     <td><?php echo $user['created_date']; ?></td>
                     <td><a href="<?php echo base_url('Admin_page/Usercreation/'.$user['id'].'/user'); ?>"><button type="button" class="btn btn-info waves-effect"><i class="material-icons">mode_edit</i></button></a>
                         
                                <a onclick="return confirm('Are you sure?')" href="<?php echo base_url('Admin_page/delete_record/user/'.$user['id']); ?>"><button type="button" class="btn btn-danger waves-effect"><i class="material-icons">delete</i></button></a>
                    </td>
                         
                        
                     
                  </tr>
                  <?php $i++; 
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