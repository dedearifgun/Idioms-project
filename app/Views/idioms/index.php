<div class="container mt-4">
  <h2>Idioms List</h2>
  <a href="<?= site_url('idioms/create') ?>" class="btn btn-primary mb-3">+ Add Idiom</a>
  <table class="table table-bordered">
    <tr><th>Idiom</th><th>Meaning</th><th>Actions</th></tr>
    <?php foreach($idioms as $i): ?>
      <tr>
        <td><?= $i['idiom'] ?></td>
        <td><?= $i['meaning'] ?></td>
        <td>
          <a href="<?= site_url('idioms/detail/'.$i['id']) ?>" class="btn btn-sm btn-info">View</a>
          <a href="<?= site_url('idioms/edit/'.$i['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="<?= site_url('idioms/delete/'.$i['id']) ?>" class="btn btn-sm btn-danger" 
             onclick="return confirm('Yakin hapus?')">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
