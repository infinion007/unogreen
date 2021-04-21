<?php $this->load->view('admin/common/_header'); ?>

<?php $this->load->view('admin/common/_admin_navbar'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view($this->data['subview']); ?>
  </div>
</div>

<?php $this->load->view('admin/common/_footer'); ?>
