<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Vcard</title>

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/animate.css">

    <!-- my css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vcard/'); ?>assets/css/responsive.css">

</head>

<body class="clearfix">
    <?php if($this->session->userdata('id')){ ?>
    <p style="float: right;"><a href="<?php echo base_url('Vcard_Edit'); ?>">Edit Card</a></p><br>
    <p style="float: right;"><a href="<?php echo base_url('logout'); ?>" onclick="return confirm('Are you sure?')" >Logout</a></p>
   <?php }else{ ?>
    <p style="float: right;"><a href="<?php echo base_url('home/index'); ?>">Login To Vcard</a></p><br>
   <?php } ?>
    <center>
    <div class="" style="margin-top: 5em;">
        <div class="profile">
            <div class="profile-image center-align">
                <img src="<?php echo base_url('uploads/'.$user[0]['photo']); ?>" height="300px" width="300px" alt="Image" style="border-radius: 50%;">
            </div>
            <!-- /.profile-image -->

            <div class="profile-name center-align">
                <h3 class="user-name"><?php echo $user[0]['fname'] ?><br><?php echo $user[0]['lname'] ?></h3>
                <p style="margin-top: 0.5em;">
                    <span class="photoshop-color"><?php echo $user[0]['position'] ?></span>
                </p>
            </div>
            <!-- /.profile-name -->
<!-- 
            <ul class="social-btn">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-behance" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                </li>
            </ul> -->


            <div class="col l6 m12 s12" style="margin: 2em;">
                <div class="personal-details-right">
                    <h2 class="title">My Details</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-w25">Full Name</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65"><?php echo $user[0]['fname'].' '.$user[0]['lname'] ?></td>
                            </tr>
                            <!-- <tr>
                                <td class="td-w25">Father's Name</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">Ramsharan Vishwakarma</td>
                            </tr> -->
                            <tr>
                                <td class="td-w25">Address</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65"><?php echo $user[0]['address'] ?></td>
                            </tr>
                            <tr>
                                <td class="td-w25">Zip Code</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65"><?php echo $user[0]['pincode'] ?></td>
                            </tr>
                            <tr>
                                <td class="td-w25">Phone</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">+91 <?php echo $user[0]['contact_number'] ?></td>
                            </tr>
                            <tr>
                                <td class="td-w25">Email</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65"><?php echo $user[0]['email'] ?></td>
                            </tr>
                            <tr>
                                <td class="td-w25">Website</td>
                                <td class="td-w10">:</td>
                        <td class="td-w65"><a href="<?php echo $user[0]['website']?>" target="_blank"><?php echo $user[0]['website'] ?></a></td>
                            </tr>

                        </tbody>
                    </table>

                    
                <div class="success-child-right">
                    <a href="#!" class="hire-me waves-effect">
                        <a href="<?php echo base_url('vcard_download/'.$this->uri->segment(2)); ?>" ><button class="btn btn-primary" style="border-radius: 5px; margin: 1em 0 0 0;">Save My Contact</button> </a>
                    </a>
                </div>

</center>
    <!-- jquery and bootstrap.js -->
    <script src="<?php echo base_url('vcard/'); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url('vcard/'); ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url('vcard/'); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('vcard/'); ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('vcard/'); ?>assets/js/circle-progress.js"></script>

    <!-- my custom js -->
    <script src="<?php echo base_url('vcard/'); ?>assets/js/custom.js"></script>
</body>


</html>