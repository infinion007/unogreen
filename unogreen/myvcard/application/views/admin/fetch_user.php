 <select class="form-control" id="person_select" name="placed_under" >
                                 <option value="">Select Person</option>    
                                    
 <?php if(!empty($fetch_user)){ foreach ($fetch_user as $user_value) { ?>
                                     <option value="<?php echo $user_value['id']; ?>"><?php echo $user_value['fname']." ".$user_value['lname']; ?></option>
                                     <?php } }?>
                                     </select>