<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('assets/admin'); ?>/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($this->session->userdata('fname'))."  ".ucfirst($this->session->userdata('lname')).'   ('.$this->session->userdata('role').')'; ?></div>
                    <div class="email"><?php echo $this->session->userdata('email'); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            
                            <li><a href="<?php echo base_url('Login/logout');  ?>" onclick="return confirm('Are you sure?');"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">CMS NAVIGATION</li>
                  <!--   <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">event</i>
                            <span>Profile</span>
                        </a>
                        <ul class="ml-menu">
                             <li>
                                <a href="<?php echo base_url('Admin_page/profile');  ?>" >
                                    <span>Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <?php if(!$this->session->userdata('action')[users]){ ?>
                    <li class="<?php if(($this->uri->segment(2)=='Usercreation') || ($this->uri->segment(2)=='user') ){ echo 'active'; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_circle</i>
                            <span>User</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if(!$this->session->userdata('action')[Usercreation]){ ?>
                            <li class="<?php if($this->uri->segment(2)=='Usercreation'){ echo 'active'; } ?>">
                                <a href="<?php echo base_url('Admin_page/Usercreation');  ?>" >
                                    <span>Add </span>
                                </a>
                            </li>
                            <?php } ?>
                             <?php if(!$this->session->userdata('action')[user]){ ?>
                            <li class="<?php if($this->uri->segment(2)=='user'){ echo 'active'; } ?>">
                                <a href="<?php echo base_url('Admin_page/user');  ?>" >
                                    <span>List</span>
                                </a>
                            </li>
                             <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>

                    <?php if(!$this->session->userdata('action')[users]){ ?>
                    <li class="<?php if(($this->uri->segment(2)=='Usercreation') || ($this->uri->segment(2)=='user') ){ echo 'active'; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_circle</i>
                            <span>Links</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if(!$this->session->userdata('action')[Usercreation]){ ?>
                            <li class="<?php if($this->uri->segment(2)=='Usercreation'){ echo 'active'; } ?>">
                                <a href="<?php echo base_url('Admin_page/generate_link');  ?>" >
                                    <span>Add </span>
                                </a>
                            </li>
                            <?php } ?>
                             <?php if(!$this->session->userdata('action')[user]){ ?>
                            <li class="<?php if($this->uri->segment(2)=='user'){ echo 'active'; } ?>">
                                <a href="<?php echo base_url('Admin_page/generate_link_list');  ?>" >
                                    <span>List</span>
                                </a>
                            </li>
                             <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                    

            <br>
            <br>
            <br>
            </div>

            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">Your Digital Card</a>.
                </div>
                <div class="version">
                   
                </div>
            </div>
            <!-- #Footer -->
        </aside>
       
</section>