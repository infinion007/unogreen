<div class="container">
  <div class="row">
  <?php echo anchor('admin/cardtype/edit', '<i class="fa fa-user-plus"></i> Add a Card Type', 'class="btn btn-secondary btn-md"'); ?>
  <h2>Card Type List</h2>
    <table class="table table-striped table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(count($cardtypes)): foreach($cardtypes as $cardtype): ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/cardtype/edit/'.$cardtype->id, $cardtype->name); ?></td>
          <td><?php echo $cardtype->des; ?></td>
          <td><?php echo bt_edit('admin/cardtype/edit/'.$cardtype->id); ?></td>
          <td><?php echo bt_delete('admin/cardtype/delete/'.$cardtype->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any cardtype !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
