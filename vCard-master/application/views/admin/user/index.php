<div class="container">
  <div class="row">
  <?php echo anchor('admin/user/edit', '<i class="fa fa-user-plus"></i> Add a User', 'class="btn btn-secondary btn-md"'); ?>
  <h2>User List</h2>
    <table class="table table-striped table-bordered">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $no = 1;
        if(count($users)): foreach($users as $user): ?>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo anchor('admin/user/edit/'.$user->id, $user->name); ?></td>
          <td><?php echo $user->email; ?></td>
          <td><?php echo $user->phone; ?></td>
          <td><?php echo bt_edit('admin/user/edit/'.$user->id); ?></td>
          <td><?php echo bt_delete('admin/user/delete/'.$user->id); ?></td>
        </tr>
      <?php endforeach; ?> <?php else: ?>
      <tr>
        <th>We Could Not Find any user !</th>
      </tr>
    <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>
