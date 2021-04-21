<?php $this->load->view('admin/common/_header'); ?>

  <!-- <div class="container-fluid"> -->
    <!-- <div class="row"> -->
      <nav class="navbar navbar-toggleable-lg navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Aurora CMS</a>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown navbar-toggler-right ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"> </i> Manishankar Vakta
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"> <i class="fa fa-dashboard "></i> My Profile</a>
                <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Setting</a>
                <a class="dropdown-item" href="#"> <i class="fa fa-power-off "></i> Log Out</a>
              </div>
            </li>
          </ul>
         
        </div>
      </nav>
    <!-- </div> -->
  <!-- </div>  -->
  <!--container-fluid-->

  <?php 
  echo site_url().'<br>';
  echo base_url(); ?>


<?php $this->load->view('admin/common/_footer'); ?>