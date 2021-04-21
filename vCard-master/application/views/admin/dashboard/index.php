<!-- <h3 style="text-align:center;"><i class="la la-dashboard"></i>  Welcome to Dashboard</h3> -->
<style media="screen">
  body{
    /*background: #126e66;*/
  }
</style>
<div class="container">
  <br>
  <div class="row" id="search_container">
    <form class="form-inline">
      <label class="sr-only" for="search_by">Name</label>
      <select class="custom-select mb-4 mr-sm-4 mb-sm-0" name="search_by" id="search_by">
        <option selected value="name">Name</option>
        <option value="phone">Phone</option>
        <option value="email">Email</option>
        <!-- <option value="org">Organization</option> -->
      </select>

      <label class="sr-only" for="search">Username</label>
      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <div class="input-group-addon"><i class="la la-search"></i></div>
        <input type="text" name="search" class="form-control" id="search" placeholder="Search By Name">
      </div>

      <span class="Show"></span>
    </form>
  </div> <!--Search Wrapper-->
  <script type="text/javascript">
    // SEARCH FUNCTIONALITY

    // search functionality
    $('#search').keyup(function(){
        var s_by = $('#search_by').val();
        var keyWord = $(this).val();

        $.post("<?php echo site_url('admin/search');?>", { 'type' : s_by , 'keyWord' : keyWord }, function(result){
          var cards = jQuery.parseJSON(result);
          var name = '';
          $.each(cards, function (i, item){
            name += '<div class="col-md-3"><br><div class="card" ><div class="card-wrapper"><div class="row wrapper-top"><div class="col-lg-4">';
            if (item.photo != "") {
              name += '<img class="card-img-top img-fluid" src="<?php echo site_url('upload/'); ?>'+item.photo+'" alt="Card image cap">';
            } else {
              name += '<img class="card-img-top img-fluid" src="<?php echo site_url('images/profile.png'); ?>" alt="Card image cap">';
            }
            name += '</div><div class="col-lg-8 info"><p class="social">';
            name += '<a href="https://facebook.com/'+item.facebook+'" title="https://facebook.com/'+item.facebook+'" target="_blank" ><i class="fa fa-facebook-square fa-fw fb"></i></a>';
            name += '<a href="https://facebook.com/'+item.twitter+'" title="https://facebook.com/'+item.twitter+'" target="_blank" ><i class="fa fa-twitter fa-fw tw"></i></a>';
            name += '<a href="https://facebook.com/'+item.skype+'" title="https://facebook.com/'+item.skype+'" target="_blank" ><i class="fa fa-skype fa-fw sp"></i></a>';
            name += '<a href="https://facebook.com/'+item.linkedin+'" title="https://facebook.com/'+item.linkedin+'" target="_blank" ><i class="fa fa-linkedin fa-fw in"></i></a>';
            name += '</p><h5 class="card-title">'+item.name+'</h5>';
            name += '<h6 class="desi">'+getCom(item.company_name)+'</h6>';
            name += '<hr class="divider"></div></div>';
            name += '<div class="row wrapper-bottom"><div class="col-lg-12"><p class="phn_holder">';
            name += getPhone(item.phone)+'</p>';
            name += '<p class="email">'+getEmail(item.email)+'<p>';
            name += '</div></div><img class="img-bottom" src="<?php echo site_url('images/img-bottom.png'); ?>" alt=""></div>';
            name += '<div class="card-block"><hr class="divider"><button type="button" onclick="viewProfile('+item.id+')" class="btn btn-outline-info">View More</button>';
            name += '  </div></div></div>';
          });

          if (keyWord != "") {
            $('#card_container').html(name);
          } else {
            $('.Show').html('Type KeyWork for Search');
          }

          // console.log(cards);
        });
    });

    // GET Com
    function getCom(str){
      var emil = unserialize(str);
      var showCom = '';
      var i = 0;
      $.each(emil, function($key, $value){
        if (i === 0){
          if ($value != ''){
            showCom += $value+' <strong class="com">'+$key+'</strong>';
          }else{
            showCom += '<i class="la la-warning"></i> No Company Found';
          }
        }
        i++;
      });

      return showCom;
    }


    // GET Email
    function getEmail(str){
      var emil = unserialize(str);
      var showEmail = '';
      var i = 0;
      $.each(emil, function($key, $value){
        if (i === 0){
          if ($value != ''){
            showEmail += $value;
          }else{
            showEmail += 'No Email Found';
          }
        }
        i++;
      });

      return showEmail;
    }


    // GET phone
    function getPhone(str){
      var phn = unserialize(str);
      var showPhone = '';
      var i = 0;
      $.each(phn, function($key, $value){
        if (i <= 2){
          if ($value != ''){
            showPhone += phn_icon($key)+'   '+$value;
          }else{
            showPhone += 'No Phone Number Found';
          }
        }
        i++;
      });

      return showPhone;
    }


    // Select search_by
    $('#search_by').change(function(){
      var s_by = $(this).val();
      var pHolder;

      switch(s_by) {
          case 'name':
              pHolder = 'Search By Name';
              break;
          case 'phone':
              pHolder = 'Search By Phone';
              break;
          case 'email':
              pHolder = 'Search By Email';
              break;
          case 'org':
              pHolder = 'Search By Organization';
              break;
          default:
              pHolder = 'Search Here';
      }

      $('#search').val('');
      $('#search').attr('placeholder', pHolder);
    });

  </script>

  <br><br>
  <div class="row" id="card_container">
    <?php if(count($vcards)): foreach($vcards as $vcard): ?>
    <div class="col-md-3">
      <br>
      <div class="card" >
        <div class="card-wrapper">
          <div class="row wrapper-top">
          <div class="col-lg-4">
            <img class="card-img-top img-fluid" src="<?php echo $photo = ($vcard->photo !== "") ? site_url('upload/'.$vcard->photo) :  site_url('images/profile.png'); ?>" alt="Card image cap">
          </div>
          <div class="col-lg-8 info">
            <p class="social">
              <a href="https://facebook.com/manishankarvakta" title="https://facebook.com/manishankarvakta" target="_blank" >
                <i class="fa fa-facebook-square fa-fw fb"></i>
              </a>
              <a href="https://facebook.com/manishankarvakta" title="https://facebook.com/manishankarvakta" target="_blank" >
                <i class="fa fa-twitter fa-fw tw"></i>
              </a>
              <a href="https://facebook.com/manishankarvakta" title="https://facebook.com/manishankarvakta" target="_blank" >
                <i class="fa fa-skype fa-fw sp"></i>
              </a>
              <a href="https://facebook.com/manishankarvakta" title="https://facebook.com/manishankarvakta" target="_blank" >
                <i class="fa fa-linkedin fa-fw in"></i>
              </a>



            </p>
            <h5 class="card-title"><?php echo $vcard->name; ?></h5>
            <?php $com = unserialize($vcard->company_name);  ?>
            <?php
               $i = 0;
              foreach ($com as $key => $value):
                 if ($i == 0):
                   if ($value != ''): ?>
                   <h6 class="desi"><?php echo $value; ?> <strong class="com"> <?php echo $key; ?></strong></h6>
                <?php
                  else: ?>
                  <h6 class="desi"><i class="la la-warning"></i> No Company Info</h6>
            <?php
          endif;
                endif;
              $i++;
            endforeach; ?>
            <hr class="divider">
          </div>
        </div>
        <div class="row wrapper-bottom">
          <div class="col-lg-12">
            <p class="phn_holder">
            <?php $phn = unserialize($vcard->phone);  ?>
            <?php
               $i = 0;
              foreach ($phn as $key => $value):
                if ($i <= 2):
                   if ($value != ''): ?>
                   <?php echo $this->vcard_m->phn_icon($key); ?><?php echo ' '.$value.' '; ?>
                  <?php
                    else: ?>
                    No phone Number Found
                  <?php  endif;
                   endif;
              $i++;
            endforeach; ?>
            </p>
            <?php $email = unserialize($vcard->email);  ?>
            <?php
               $i = 0;
              foreach ($email as $key => $value):
                if ($i === 0):
                   if ($value != ''): ?>
                   <p class="email">manishankarvakta@gmail.com</p>
                  <?php
                    else: ?>
                    <p class="email">No Email Found</p>
                  <?php  endif;
                   endif;
              $i++;
            endforeach; ?>
          </div>
        </div>
        <img class="img-bottom" src="<?php echo site_url('images/img-bottom.png'); ?>" alt="">
        </div>
        <div class="card-block">
          <hr class="divider">
          <button type="button" onclick="viewProfile(<?php echo $vcard->id; ?>)" class="btn btn-outline-info">View More</button>
        </div>
      </div>
    </div>
  <?php endforeach; ?> <?php else: ?>  <?php endif; ?>
  </div>

  <script type="text/javascript">
  // Phone ICON
  function phn_icon(int){
    switch(int) {
        case 0:
            phn_type = '<i class="la la-university la-fw"></i>';
            break;
        case '1':
            phn_type = '<i class="la la-tty la-fw"></i>';
            break;
        case '2':
            phn_type = '<i class="la la-home la-fw"></i>';
            break;
        case '3':
            phn_type = '<i class="la la-user-secret la-fw"></i>';
            break;
        default:
            phn_type = '';
    }
    return phn_type;
  }


    function viewProfile(id){
      var url = "<?php echo site_url('admin/vcard/getPtofile/');?>"+id;
    // alert(url);
      $.get(url, function(data, status){
        var obj = jQuery.parseJSON(data);
        // LOAD data to modal
        showTo('name', obj.name); //NAme
        showPicTo('profile_pic', obj.photo); //Profile Pic
        showCom('com_wrapper'); //Job Info
        showPhn('phn_wrapper'); // phn no
        showEmail('email_wrapper'); //Email
        showAdd('address', obj.address); //Address
        // Social Starts Here
        showSocial('fb', obj.facebook);
        showSocial('tw', obj.twitter);
        showSocial('in', obj.linkedin);
        showSocial('qu', obj.quora);
        showSocial('re', obj.reddit);
        showSocial('ig', obj.instagram);
        showSocial('gp', obj.google);
        showSocial('yt', obj.youtube);
        showSocial('am', obj.a_me);

        showWeb('sp', obj.skype);
        showWeb('web', obj.web);

        // View card
        showCard('cards');

        // Show modal
        $('#myModal').modal('show');






        //=================================FUNCTIONS STARTS======================================//
// <p class="p"><i class="la la-envelope la-fw"></i>  '+$value+'</p>
        // View card
        function showCard(ei){
          var card = unserialize(obj.card);
          // var Email;
          $.each(card, function ($key, $value){
            if ($value != "") {
              $("#"+ei).append('<div class="col-lg-3"><img src="<?php echo site_url('upload/');?>'+$value+'" class="img-fluid" alt=""></div>');
            } else {
              $("#"+ei).append('<div class="col-lg-3"><img src="<?php echo site_url('images/vcard.png');?>" class="img-fluid" alt=""></div>');
            }

          });

          $('#myModal').on('hidden.bs.modal', function (e) {
            $("#"+ei).html('');
          });
        }



        // showWeb
        function showWeb(ei, info){
          if (info !="") {
            $('#'+ei).children('a').html(info);
          } else {
            $('#'+ei).children('a').html('No Data Found');
            $('#'+ei).children('a').click(function(e){
              e.preventDefault();
            });
          }
        }

        // showSocial
        function showSocial(ei, info){
          if (info != "") {
            $('#'+ei).children('a').attr('href', idToAddress(ei, info)+info);
          } else {
            $('#'+ei).children('a').click(function(e){
              e.preventDefault();
              alert("This Person's '" +idToAddress(ei, info)+"' profile is not Listed");
            });
          }

          function idToAddress(ei, info){
            switch(ei) {
                case 'fb':
                    url = 'https://facebook.com/';
                    break;
                case 'tw':
                    url = 'https://twitter.com/';
                    break;
                case 'in':
                    url = 'https://www.linkedin.com/in/';
                    break;
                case 'qu':
                    url = 'https://www.quora.com/profile/';
                    break;
                case 're':
                    url = 'https://www.reddit.com/user/';
                    break;
                case 'ig':
                    url = 'https://www.instagram.com/';
                    break;
                case 'gp':
                    url = 'https://plus.google.com/';
                    break;
                case 'yt':
                    url = 'https://www.youtube.com/user/';
                    break;
                // case 'sp':
                //     url = '';
                //     break;
                case 'am':
                    url = 'https://about.me/';
                    break;
                // case 'web':
                //     url = '<i class="la la-user-secret la-fw"></i>';
                //     break;
                default:
                    url = '';
            }
            return url;
          }
        }



        // ??SHOW Add DATA Singal Field
        function showAdd(ei, info){
          if (info != "") {
            $('#'+ei).html(info);
          } else {
            $('#'+ei).html('No Address Found');
          }
        }


        // SHOW Email
        function showEmail(ei){
          var email = unserialize(obj.email);
          // var Email;
          $.each(email, function ($key, $value){
            if ($value != "") {
              $("#"+ei).append('<p class="p"><i class="la la-envelope la-fw"></i>  '+$value+'</p>');
            } else {
              $("#"+ei).html('<p class="p">No Email Found</p>');
            }

          });

          $('#myModal').on('hidden.bs.modal', function (e) {
            $("#"+ei).html('');
          });
        }


        // ShoOW phn
        function showPhn(ei){
          var phn = unserialize(obj.phone);
          // var company;
          $.each(phn, function ($key, $value){
            if ($value != "") {
              $("#"+ei).append('<p class="p">'+phn_icon($key)+' '+$value+'</p>');
            } else {
              $("#"+ei).html('<p class="p">No Phone Number Found</p>');
            }
          });


          $('#myModal').on('hidden.bs.modal', function (e) {
            $("#"+ei).html('');
          });
        }


        // SHOW COMPANY
        function showCom(ei){
          var com_info = unserialize(obj.company_name);
          // var company;
          $.each(com_info, function ($key, $value){
            if ($key != "") {
              $("#"+ei).append('<p class="p">'+$key+' ('+$value+')</p>');
            } else {
              $("#"+ei).html('<p class="p">No Company Info Found</p>');
            }
          });

          $('#myModal').on('hidden.bs.modal', function (e) {
            $("#"+ei).html('');
          });
        }



        // ??SHOW DATA Singal Field
        function showTo(ei, info){
          $('#'+ei).html(info);
        }

        // SHOW PIC
        function showPicTo(ei, info){
          if (info != "") {
            var pic = "<?php echo site_url('upload/');?>"+info;
          }else{
            var pic = "<?php echo site_url('images/profile.png');?>";
          }

          $('#'+ei).attr('src', pic);
        }
          // alert( obj.name );
      });

    }



  </script>
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Launch demo modal
  </button> -->
</div>





<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="name"></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row personal_info">
            <div class="col-lg-4">
              <div class="profile_pic">
                <img src="<?php echo site_url('images/profile.png');?>" class="img-fluid" id="profile_pic" alt="">
                <hr>
                <h5>Contact Lavel</h5>
                <p class="p"><i class="la la-star la-2x"> </i><i class="la la-star la-2x"> </i><i class="la la-star la-2x"> </i></p>

                <h5>Status</h5>
                <p class="p">Active</p>
              </div>
            </div>
            <div class="col-lg-4">
              <h5>Job Info</h5>
              <span id="com_wrapper">
                <!-- <p class="p" id="job">Company Name. (CEO)</p>
                <p class="p">Company Name. (CEO)</p> -->
              </span>

              <h5>Phone No</h5>
              <span id="phn_wrapper"> </span>
              <!-- <p class="p"><i class="la la-university"></i>+880 1717440931</p>
              <p class="p"><i class="la la-home"></i>+880 1717440931</p>
              <p class="p"><i class="la la-tty"></i>+880 1717440931</p>
              <p class="p"><i class="la la-user-secret"></i>+880 1717440931</p> -->


              <h5>Email</h5>
              <span id="email_wrapper"></span>
              <!-- <p class="p"></i>manishankarvakta@gmail.com</p>
              <p class="p"></i>manishankarvakta@gmail.com</p> -->
            </div>
            <div class="col-lg-4">
              <h5>Address</h5>
                <p class="p" id="address"> </p>

              <h5>Social</h5>
              <p class="p" id="fb"><i class="fa fa-facebook-square fa-fw fb"> </i> <a href="#" target="_blank">facebook.com</a></p>
              <p class="p" id="tw"><i class="fa fa-twitter fa-fw tw"> </i> <a href="#" target="_blank">twitter.com</a></p>
              <p class="p" id="in"><i class="fa fa-linkedin fa-fw in"> </i> <a href="#" target="_blank">linkedin.com</a></p>
              <p class="p" id="qu"><i class="fa fa-quora fa-fw fb"> </i> <a href="#" target="_blank">Quora.com</a></p>
              <p class="p" id="re"><i class="fa fa-reddit fa-fw fb"> </i> <a href="#" target="_blank">Reddit.com</a></p>
              <p class="p" id="ig"><i class="fa fa-instagram fa-fw fb"> </i> <a href="#" target="_blank">Instagram.com</a></p>
              <p class="p" id="gp"><i class="fa fa-google-plus fa-fw fb"> </i> <a href="#" target="_blank">Google-plus.com</a></p>
              <p class="p" id="yt"><i class="fa fa-youtube fa-fw fb"> </i> <a href="#" target="_blank">Youtube.com</a></p>
              <p class="p" id="sp"><i class="fa fa-skype fa-fw sp"> </i> <a href="#" target="_blank">Skype.com</a></p>
              <p class="p" id="am"><i class="fa fa-user fa-fw fb"> </i> <a href="#" target="_blank">About.me</a></p>
              <p class="p" id="web"><i class="fa fa-globe fa-fw fb"> </i> <a href="#" target="_blank">ownWeb.com</a></p>
            </div>
          </div>
          <hr>
          <div class="row cards" id="cards">
            <!-- <div class="col-lg-3">
              <img src="<?php echo site_url('images/vcard.png');?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
              <img src="<?php echo site_url('images/vcard.png');?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
              <img src="<?php echo site_url('images/vcard.png');?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3">
              <img src="<?php echo site_url('images/vcard.png');?>" class="img-fluid" alt="">
            </div> -->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
