<div class="container">
  <div class="row">
  <?php echo anchor('admin/vcard/edit', '<i class="fa fa-vcard-plus"></i> Add a vCard', 'class="btn btn-secondary btn-md"'); ?>
  <h2>vCard List</h2>

    <table id="vcard" class="table table-striped table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Card</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(count($vcards)): foreach($vcards as $vcard): ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/vcard/edit/'.$vcard->id, $vcard->name); ?></td>
          <td><img src="<?php echo $photo = ($vcard->photo !== "") ? site_url('upload/'.$vcard->photo) : site_url('images/vcard.png') ; ?>" id="img-preview" height="80" alt="" class="img img-responsive"></td>
          <td><?php echo bt_edit('admin/vcard/edit/'.$vcard->id); ?></td>
          <td><?php echo bt_delete('admin/vcard/delete/'.$vcard->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any vcard !</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
