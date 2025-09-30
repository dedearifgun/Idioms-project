<div class="container mt-4">
  <h2>Add Idiom</h2>
  <form method="post" action="<?= site_url('idioms/store') ?>">
    <div class="mb-3">
      <label>Idiom</label>
      <input type="text" name="idiom" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Meaning</label>
      <textarea name="meaning" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label>Example</label>
      <textarea name="example" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>
