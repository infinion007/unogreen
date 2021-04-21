<nav class="navbar navbar-toggleable-lg navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><i class="la la-credit-card"></i> vCard Manager</a>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="la la-dashboard"></i>  Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/vcard') ?>">vCard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/cardtype') ?>">Card Type</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/user') ?>">User</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"></a> -->
      </li>
      <li class="nav-item dropdown navbar-toggler-right ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="la la-user"> </i> <?php echo $this->session->userdata('name'); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url('admin/dashboard'); ?>"> <i class="fa fa-dashboard "></i> My Profile</a>
          <a class="dropdown-item" href="<?php echo base_url("admin/user/edit/".$this->session->userdata('id')); ?>"> <i class="fa fa-cog"></i> Setting</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/user/logout'); ?>"> <i class="fa fa-power-off "></i> Log Out</a>
        </div>
      </li>
    </ul>

  </div>
</nav>
