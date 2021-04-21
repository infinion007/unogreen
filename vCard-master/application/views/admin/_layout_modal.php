<?php $this->load->view('admin/common/_header'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
<?php $this->load->view($subview); ?>
		</div>
	</div>
</div>
<?php $this->load->view('admin/common/_footer'); ?>
