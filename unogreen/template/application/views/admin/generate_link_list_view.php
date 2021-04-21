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
                             Links List
                            </h2>
                            <ul class="header-dropdown m-r--5">
                               <a href="<?php echo base_url('Admin_page/generate_link'); ?>"><button type="button" class="btn btn-success waves-effect m-r-20" >Add</button></a>
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
                        

                        <div class="card-body p-0 att_div table-responsive" id="postList">
            <?php
               if(isset($links) && !empty($links)) { ?>
            <table class="table table-striped dataTable js-exportable">
               <thead>
                  <tr>
                     <th>Sr</th>
                     
                     <th>Link</th>
                     <th>QR Code</th>
                  </tr>
               </thead>
                 <tbody>
                  <?php $i=1; foreach ($links as $value) { ?>
                  <tr>
                     <td><?php echo $i; ?>.</td>
                     <td>
                     <input type="text" value="<?php echo base_url('my-digital-card/'.$value['rand_id']); ?>" id="copy<?php echo $value['id']; ?>" readonly="" >
                      <button onclick="myFunction(<?php echo $value['id']; ?>)">Get Link</button>
                    </td>
                    <td><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo base_url('my-digital-card/'.$value['rand_id']); ?>" ></td>
                  </tr>
                  <?php $i++;
                     } ?>
               </tbody>
            </table>
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
  
    <?php  include 'footer.php'; ?>