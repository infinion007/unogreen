<style media="screen">

  .status{
    font-family: 'LineAwesome', 'roboto';
  }
  .remove{
    position: absolute;
    z-index: 1000;
    height: 25px;
    width: 25px;
  }

  .profile{
    position: absolute;
    z-index: 1000;
    top: -237px;
    left: 20px;
    opacity: .7;
  }
</style>

<div class="container">
  <?php echo form_open(); ?>
  <h2> <?php echo empty($vcard->id) ? 'Add a New vCard' : 'Edit vCard '.$vcard->name; ?></h2>
  <div class="row" style="margin-top:50px;">
    <div class="col-lg-6">
      <?php  echo $message = ($_SESSION['error'] ) ? '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>' : '' ; ?>
    <?php  echo $message = (validation_errors()) ? '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>' : '' ; ?>
        <div class="form-group row">
          <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
          <div class="col-sm-12 input-group">
            <span class="input-group-addon" id="name"><i class="la la-user"></i> </span>
            <?php
                echo form_input('name', set_value('name', $vcard->name), 'aria-describedby="name" class="form-control" placeholder="Name" id="name"');
            ?>
          </div>
        </div>
        <div class="company-wrapper">
          <?php if(!empty($vcard->company_name)): ?>
            <?php $i=0; $com = unserialize($vcard->company_name);?>
            <span  id="company">
            <?php foreach ( $com as $key => $value): ?>
              <div class=" row co" id="<?php echo 'com_'.array_search($value, $com); ?>">
              <?php if ($i != 0): ?>
                <button onclick="remove_row(<?php echo 'com_'.array_search($value, $com); ?>);" type="button" class="remove badge badge-pill badge-danger">X</button>
              <?php endif; ?>
                <div class="col-lg-6">
                  <div class="form-group row">
                    <div class="col-sm-12 input-group">
                      <span class="input-group-addon" id="company_n_1"><i class="la la-institution"></i> </span>
                      <?php
                          echo form_input('company_name[]', set_value('company_name', $key), 'aria-describedby="company_n_1" class="form-control company_n" placeholder="Company" id="company_name_1"');
                      ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group row">
                    <div class="col-sm-12 input-group">
                      <span class="input-group-addon" id="desi_n_1"><i class="la  la-graduation-cap"></i> </span>
                      <?php
                          echo form_input('desi[]', set_value('desi', $value), 'aria-describedby="desi_n_1" class="form-control" placeholder="Designation" id="desi_1"');
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            <script type="text/javascript">
            // var rowno;
            function remove_row(id)
            {
              $(id).remove();
            }
            </script>
          <?php $i++; endforeach; ?>
        </span>
          <?php else: ?>
            <span  id="company">
              <div class="row co" id="1">
                <br><div class="col-lg-6">
                  <div class="form-group row">
                    <div class="col-sm-12 input-group">
                      <span class="input-group-addon" id="company_n_1"><i class="la la-institution"></i> </span>
                      <?php
                          echo form_input('company_name[]', set_value('company_name', $vcard->company_name), 'aria-describedby="company_n_1" class="form-control company_n" placeholder="Company" id="company_name_1"');
                      ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group row">
                    <div class="col-sm-12 input-group">
                      <span class="input-group-addon" id="desi_n_1"><i class="la  la-graduation-cap"></i> </span>
                      <?php
                          echo form_input('desi[]', set_value('desi', $vcard->desi), 'aria-describedby="desi_n_1" class="form-control" placeholder="Designation" id="desi_1"');
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </span>
        <?php endif; ?>
          <div class="row">
            <br><div class="col-lg-2 pull-right">
              <button type="button" id="add_company" class="btn btn-outline-info" onclick="add_com();" name="button">Add Another Company <span class="la la-plus"> </span></button>
            </div>
          </div>
        </div> <!--company-wrapper-->

        <div class="email-wrapper">
          <br>
          <?php if(!empty($vcard->email)): ?>
            <?php $i=0; $com = unserialize($vcard->email);?>
            <span  id="e_mail">
            <?php foreach ( $com as $key => $value): ?>
              <div class="form-group row e_mail" id="<?php echo 'e_mail_'.array_search($value, $com); ?>">
                <?php if ($i != 0): ?>
                  <button onclick="remove_email(<?php echo 'e_mail_'.array_search($value, $com); ?>);" type="button" class="remove badge badge-pill badge-danger">X</button>
                <?php endif; ?>
                <div class="col-sm-12 input-group">
                  <span class="input-group-addon" id="e_mail_1"><i class="la la-envelope-o"></i> </span>
                  <?php
                      echo form_input('email[]', set_value('email', $value), 'aria-describedby="e_mail_1" class="form-control" placeholder="Email" id="email_1"');
                  ?>
                </div>
              </div>
            <script type="text/javascript">
            // var rowno;
            function remove_email(id)
            {
              $(id).remove();
              console.log($(id));
            }
            </script>
            <?php $i++; endforeach; ?>
          </span>
            <?php else: ?>
              <span  id="e_mail">
              <div class="form-group row e_mail" id="1">
                <div class="col-sm-12 input-group">
                  <span class="input-group-addon" id="e_mail_1"><i class="la la-envelope-o"></i> </span>
                  <?php
                      echo form_input('email[]', set_value('email', $vcard->email), 'aria-describedby="e_mail_1" class="form-control" placeholder="Email" id="email_1"');
                  ?>
                </div>
              </div>
            </span>
            <?php endif; ?>
          <div class="row">
            <div class="col-lg-2 pull-right">
              <button type="button" class="btn btn-outline-info" onclick="add_email();"  name="button">Add Another Email <span class="la la-plus"> </span></button>
            </div>
          </div>
        </div><!--email-wrapper-->

        <div class="phone-wrapper">
          <?php if(!empty($vcard->phone)): ?>
            <?php $i=0; $phn = unserialize($vcard->phone);?>
            <br>
            <span id="phone">
            <?php foreach ( $phn as $key => $value): ?>
              <div class="row phn" id="<?php echo 'phn_'.array_search($value, $phn); ?>">
                <?php if ($i != 0): ?>
                  <button onclick="remove_phone(<?php echo 'phn_'.array_search($value, $phn); ?>);" type="button" class="remove badge badge-pill badge-danger">X</button>
                <?php endif; ?>
                <div class="col-lg-8">
                  <div class="form-group row">
                    <div class="col-sm-12 input-group">
                      <span class="input-group-addon" id="phn_no_1"><i class="la la-phone"></i> </span>
                      <?php
                          echo form_input('phone[]', set_value('phone', $value), 'aria-describedby="phn_no_1" class="form-control" placeholder="Phone" id="phone_1"');
                      ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group row">
                    <div class="col-sm-12 input-group">
                      <span class="input-group-addon" id="phn_type_1"><i class="la  la-street-view"></i> </span>
                      <?php
                      echo form_dropdown('phone_type[]', array('0' => '&#xf24e; Office','1'=>'&#xf354; Land Line','2'=>'&#xf237; Home','3'=>'&#xf367; Personal'),
                      $this->input->post('phone_type') ? $this->input->post('phone_type') : $key,'class="form-control status" id="phone_type_1" aria-describedby="phn_type_1"'); ?>
                    </div>
                  </div>
                </div>
              </div>
            <script type="text/javascript">
          function remove_phone(id)
            {
              $(id).remove();
              console.log($(id));
            }
            </script>
      <?php $i++; endforeach; ?>
      </span>
      <?php else: ?>
        <br>
        <span id="phone">
        <div class="row phn" id="1">
          <div class="col-lg-8">
            <div class="form-group row">
              <div class="col-sm-12 input-group">
                <span class="input-group-addon" id="phn_no_1"><i class="la la-phone"></i> </span>
                <?php
                    echo form_input('phone[]', set_value('phone', $vcard->phone), 'aria-describedby="phn_no_1" class="form-control" placeholder="Phone" id="phone_1"');
                ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group row">
              <div class="col-sm-12 input-group">
                <span class="input-group-addon" id="phn_type_1"><i class="la  la-street-view"></i> </span>
                <?php
                echo form_dropdown('phone_type[]', array('0' => '&#xf24e; Office','1'=>'&#xf354; Land Line','2'=>'&#xf237; Home','3'=>'&#xf367; Personal'),
                $this->input->post('phone_type') ? $this->input->post('phone_type') : $vcard->phone_type,'class="form-control status" id="phone_type_1" aria-describedby="phn_type_1"'); ?>
              </div>
            </div>
          </div>
        </div>
      </span>
      <?php endif; ?>
          <div class="row">
            <div class="col-lg-2 pull-right">
              <button type="button" class="btn btn-outline-info" onclick="add_phone();" name="button">Add Another Phone <span class="la la-plus"> </span></button>
            </div>
          </div>
        </div> <!--phone-wrapper-->
        <br>
        <div class="form-group row">
          <div class="col-sm-12 input-group">
            <textarea name="address" class="status"  placeholder="&#xf237; Address" style="padding:10px" rows="2" value="<?php echo $vcard->address; ?>" cols="80"></textarea>
          </div>
        </div>
        <div class="status-wrapper">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                <div class="col-sm-12 input-group">
                  <span class="input-group-addon" id="group"><i class="la la-tags"></i> </span>
                  <?php
                  echo form_dropdown('u_group', array('0' => 'Select Group','1'=>'&#xf318;&#xf318; VVIP','2'=>'&#xf318;&#xf31a; VIP','3'=>'&#xf31a; Regular'),
                  $this->input->post('u_group') ? $this->input->post('u_group') : $vcard->u_group,'class="form-control status" aria-describedby="group"'); ?>
                </div>
              </div>
            </div>
            <br>
            <div class="col-lg-6">
              <div class="form-group row">
                <!-- <label for="status" class="col-sm-4 col-form-label">Status</label> -->
                <div class="col-sm-12 input-group">
                  <span class="input-group-addon" id="status"><i class="la la-warning"></i> </span>
                  <?php
                  echo form_dropdown('status', array('0' => '&#xf17d; active','1'=>'&#xf344; suspend'),
                  $this->input->post('status') ? $this->input->post('status') : $vcard->status,'class="form-control status" aria-describedby="status"'); ?>
                </div>
              </div>
            </div>
          </div>

        </div> <!--status-wrapper-->

    </div>
    <div class="col-lg-3">
      <h5>SOCIAL</h5>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="fb"><i class="la la-facebook"></i> </span>
          <?php
          echo form_input('facebook', set_value('facebook', $vcard->facebook), 'aria-describedby="fb" class="form-control" placeholder="Facebook" id="facebook"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="tw"><i class="la la-twitter"></i> </span>
          <?php
          echo form_input('twitter', set_value('twitter', $vcard->twitter), 'aria-describedby="tw" class="form-control" placeholder="Twitter" id="twitter"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="in"><i class="la la-linkedin"></i> </span>
          <?php
          echo form_input('linkedin', set_value('linkedin', $vcard->linkedin), 'aria-describedby="in" class="form-control" placeholder="Linkedin" id="linkedin"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="q"> Q. </span>
          <?php
          echo form_input('quora', set_value('quora', $vcard->quora), 'aria-describedby="q" class="form-control" placeholder="Quora" id="quora"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="ridit"><i class="la la-reddit"></i> </span>
          <?php
          echo form_input('reddit', set_value('reddit', $vcard->reddit), 'aria-describedby="ridit" class="form-control" placeholder="Reddit" id="reddit"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="grm"><i class="la la-instagram"></i> </span>
          <?php
          echo form_input('instagram', set_value('instagram', $vcard->instagram), 'aria-describedby="grm" class="form-control" placeholder="Instagram" id="instagram"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="plus"><i class="la la-google-plus"></i> </span>
          <?php
          echo form_input('google', set_value('google', $vcard->google), 'aria-describedby="plus" class="form-control" placeholder="Google+" id="google"');
          ?>
        </div>
      </div>
      <div class="form-group row">
        <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
        <div class="col-sm-12 input-group">
          <span class="input-group-addon" id="yt"><i class="la la-youtube"></i> </span>
          <?php
          echo form_input('youtube', set_value('youtube', $vcard->youtube), 'aria-describedby="yt" class="form-control" placeholder="Youtube" id="youtube"');
          ?>
        </div>
      </div>
    </div>
    <div class="col-lg-3">

      <div class="row">
        <div class='col-sm-12'>
          <div class="img-preview"><img height="242px" src="<?php echo $photo = ($vcard->photo !== "") ? site_url('upload/'.$vcard->photo) : site_url('images/profile.png') ; ?>" id="preview" class="img img-responsive"></div>
        </div>
        <div class='col-sm-12'>
          <input type="hidden" id="img_photo" name="photo" value="<?php echo $vcard->photo ?>">
          <br>
          <button id="profile" onclick="openUploadModal('profile')" data-field="photo" data-preview="preview" type="button"  class="btn btn-outline-info profile"><i class="la la-user"></i>  Photo</button>
        </div>
      </div>
      <!-- <br><br><br> -->
        <h5>ONLINE</h5>
        <div class="form-group row">
          <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
          <div class="col-sm-12 input-group">
            <span class="input-group-addon" id="sp"><i class="la la-skype "></i> </span>
            <?php
                echo form_input('skype', set_value('skype', $vcard->skype), 'aria-describedby="sp" class="form-control" placeholder="Skype" id="skype"');
            ?>
          </div>
        </div>
        <div class="form-group row">
          <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
          <div class="col-sm-12 input-group">
            <span class="input-group-addon" id="me"><small>me</small></span>
            <?php
            echo form_input('a_me', set_value('a_me', $vcard->a_me), 'aria-describedby="me" class="form-control" placeholder="About.me" id="a_me"');
            ?>
          </div>
        </div>
        <div class="form-group row">
          <!-- <label for="name" class="col-sm-4 col-form-label">Name</label> -->
          <div class="col-sm-12 input-group">
            <span class="input-group-addon" id="wb"><i class="la la-globe"></i> </span>
            <?php
                echo form_input('web', set_value('web', $vcard->web), 'aria-describedby="wb" class="form-control" placeholder="WebSite" id="web"');
            ?>
          </div>
        </div>

    </div>

  </div>
  <hr>
  <?php $card = unserialize($vcard->card); ?>
  <div class="row">
    <div class="col-lg-3">
      <div class="form-group row">
        <!-- <label for="photo" class="col-sm-4 col-form-label">vCard</label> -->
        <div class="col-sm-8 input-group">
         <div class="row">
           <div class='col-sm-12'>
           <div class="img-preview"><img src="<?php echo $photo = ($card[0] != "") ? site_url('upload/'.$card[0]) : site_url('images/vcard.png') ; ?>" id="preview1" height="100" alt="" class="img img-responsive"></div>
           </div>
           <div class='col-sm-12'>
           <input type="hidden" id="img_card1" name="card[]" value="<?php echo $card[0] ?>">
           <br>
           <button id="card1" type="button" class="btn btn-deafult" onclick="openUploadModal('card1')" data-field="card1" data-preview="preview1"><i class="la la-photo"></i>  Add vCard</button>
         </div>
         </div>
       </div>
     </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group row">
        <!-- <label for="photo" class="col-sm-4 col-form-label">vCard</label> -->
        <div class="col-sm-8 input-group">
         <div class="row">
           <div class='col-sm-12'>
           <div class="img-preview"><img src="<?php echo $photo = ($card[1] != "") ? site_url('upload/'.$card[1]) : site_url('images/vcard.png') ; ?>" id="preview2" height="100" alt="" class="img img-responsive"></div>
           </div>
           <div class='col-sm-12'>
           <input type="hidden" id="img_card2" name="card[]" value="<?php echo $card[1] ?>">
           <br>
           <button id="card2" type="button" class="btn btn-deafult" onclick="openUploadModal('card2')" data-field="card2" data-preview="preview2" ><i class="la la-photo"></i>  Add vCard</button>
         </div>
         </div>
       </div>
     </div>
    </div>
    <div class="col-lg-3">
      <div class="form-group row">
        <!-- <label for="photo" class="col-sm-4 col-form-label">vCard</label> -->
        <div class="col-sm-8 input-group">
         <div class="row">
           <div class='col-sm-12'>
           <div class="img-preview"><img src="<?php echo $photo = ($card[2] != "") ? site_url('upload/'.$card[2]) : site_url('images/vcard.png') ; ?>" id="preview3" height="100" alt="" class="img img-responsive"></div>
           </div>
           <div class='col-sm-12'>
           <input type="hidden" id="img_card3"  name="card[]" value="<?php echo $card[2] ?>">
           <br>
           <button id="card3" onclick="openUploadModal('card3')" data-field="card3" data-preview="preview3" type="button"  class="btn btn-deafult"><i class="la la-photo"></i>  Add vCard</button>
         </div>
         </div>
       </div>
     </div>
     <script type="text/javascript">
        function openUploadModal(id){
          var button = $('#'+id);
          var upInfo =  $('#upload-info');

            var up = button.data("field");
            var view = button.data("preview");
            upInfo.attr('data-info', up);
            upInfo.attr('data-view', view);
            $('#photoUploader').modal('show');
            // console.log(up+' || '+view);
        }

//       $('.modal-body').change(
// function() {alert('something'); // ?
// });
     </script>
    </div>
    <div class="col-lg-3">
      <div class="form-group row">
        <!-- <label for="photo" class="col-sm-4 col-form-label">vCard</label> -->
        <div class="col-sm-8 input-group">
         <div class="row">
           <div class='col-sm-12'>
           <div class="img-preview"><img src="<?php echo $photo = ($card[3] != "") ? site_url('upload/'.$card[3]) : site_url('images/vcard.png') ; ?>" id="preview4" height="100" alt="" class="img img-responsive"></div>
           </div>
           <div class='col-sm-12'>
           <input type="hidden" id="img_card4" name="card[]" value="<?php echo $card[3] ?>">
           <br>
           <button id="card4" onclick="openUploadModal('card4')" data-field="card4" data-preview="preview4" type="button"  class="btn btn-deafult"><i class="la la-photo"></i>  Add vCard</button>
         </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12">
      <?php echo empty($vcard->id) ? form_submit('submit', 'Save', 'class="btn btn-outline-primary pull-right"') : form_submit('submit', 'Update', 'class="btn btn-outline-primary pull-right"');?>
    </div>
  </div>
  <?php form_close(); ?>
</div>
  <!-- Modal -->
  <div class="modal fade" id="photoUploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <!-- Upload Contant -->
          <div class="upload-console">
            <div class="upload-console-body">
              <form action="<?php site_url('admin/upload') ?>" method="post" class="row" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="form-group row">
                      <input type="file" class="col-sm-12" multiple="multiple" id="upload_file" name="files[]" >
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="submit" value="Upload" class="btn btn-outline-info" id="upload_button">
                  </div>
                </div>
              </form>
            </div>
            <span id="upload-info"></span>
            <!-- Drag and Drowp -->
            <div class="upload-console-drop" id="drop-zone">
              Just Drag and Drop <i style="color:#5bc0de" class="la la-download"> </i>  File Here
            </div>
            <div class="bar">
              <div class="bar-fill" id="bar-fill">
                <div class="bar-fill-text" id="bar-fill-text"> </div>
              </div>
            </div>
            <!--   -->
            <!-- class="hidden" -->
            <div id="upload-finished" class="hidden">
              <h5>Processed File</h5>
              <!-- <div class="upload-console-upload">
              <a href="#">FileName.jpg</a>
              <span>Success</span>
            </div> -->
          </div>
        </div>
        <!-- Upload Contant -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

function add_phone()
{

  var rowno= parseInt($(".phn").last().attr('id'));
  rowno = rowno+1;

  var phone_no = '';
  phone_no += '<div class="row phn" id="'+rowno+'">';
  phone_no += '<br><div class="col-lg-8">';
  phone_no += '<div class="form-group row">';
  phone_no += '<div class="col-sm-12 input-group">';
  phone_no += '<span class="input-group-addon" id="phn_no_'+rowno+'"><i class="la la-phone"></i> </span>';
  phone_no += '<input type="text" name="phone[]" value="" aria-describedby="phn_no_'+rowno+'" class="form-control" placeholder="Phone" id="phone_'+rowno+'">';
  phone_no += '</div>';
  phone_no += '</div>';
  phone_no += '</div>';
  phone_no += '<div class="col-lg-4">';
  phone_no += '<div class="form-group row">';
  phone_no += '<div class="col-sm-12 input-group">';
  phone_no += '<span class="input-group-addon" id="phn_type_'+rowno+'"><i class="la  la-street-view"></i> </span>';
  phone_no += '<select name="phone_type[]" class="form-control status" id="phone_type_'+rowno+'" aria-describedby="phn_type_'+rowno+'">';
  phone_no += '<option value="0">&#xf24e; Office</option>';
  phone_no += '<option value="1">&#xf354; Land Line</option>';
  phone_no += '<option value="2">&#xf237; Home</option>';
  phone_no += '<option value="3">&#xf367; Personal</option>';
  phone_no += '</select>';
  // phone_no += '<input type="text" name="desi" value="" aria-describedby="desi_n_'+rowno+'" class="form-control" placeholder="Designation" id="desi_'+rowno+'">';
  phone_no += '</div>';
  phone_no += '</div>';
  phone_no += '</div><button onclick="delete_row('+rowno+');" type="button" class="remove badge badge-pill badge-warning">X</button>';
  phone_no += '</div>';

  // console.log(rowno);
  $("#phone").append(phone_no);
}

function add_com()
{

  var rowno= parseInt($(".co").last().attr('id'));
  rowno = rowno+1;

  var company_info = '';
  company_info += '<div class="row e_mail" id="'+rowno+'">';
  company_info += '<button onclick="delete_row('+rowno+');" type="button" class="remove badge badge-pill badge-warning">X</button><div class="col-lg-6">';
  company_info += '<div class="form-group row">';
  company_info += '<div class="col-sm-12 input-group">';
  company_info += '<span class="input-group-addon" id="company_n_'+rowno+'"><i class="la la-institution"></i> </span>';
  company_info += '<input type="text" name="company_name[]" value="" aria-describedby="company_n_'+rowno+'" class="form-control company_n" placeholder="Company" id="company_name_'+rowno+'">';
  company_info += '</div>';
  company_info += '</div>';
  company_info += '</div>';
  company_info += '<div class="col-lg-6">';
  company_info += '<div class="form-group row">';
  company_info += '<div class="col-sm-12 input-group">';
  company_info += '<span class="input-group-addon" id="desi_n_'+rowno+'"><i class="la  la-graduation-cap"></i> </span>';
  company_info += '<input type="text" name="desi[]" value="" aria-describedby="desi_n_'+rowno+'" class="form-control" placeholder="Designation" id="desi_'+rowno+'">';
  company_info += '</div>';
  company_info += '</div>';
  company_info += '</div>';
  company_info += '<br></div>';

  // console.log(rowno);
  $("#company").append(company_info);
}

function add_email()
{

  var rowno= parseInt($(".e_mail").last().attr('id'));
  rowno = rowno+1;

  var email = '';
  email += '<div class="form-group row e_mail" id="'+rowno+'">';
  email += '<div class="col-sm-12 input-group">';
  email += '<span class="input-group-addon" id="e_mail_'+rowno+'"><i class="la la-envelope-o"></i> </span>';
  email += '<input type="text" name="email[]" value="" aria-describedby="e_mail_'+rowno+'" class="form-control" placeholder="Email" id="email_'+rowno+'">';
  email += '</div><button onclick="delete_row('+rowno+');" type="button" class="remove badge badge-pill badge-warning">X</button>';
  email += '<br></div>';

  // console.log(rowno);
  $("#e_mail").append(email);


}

function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>
