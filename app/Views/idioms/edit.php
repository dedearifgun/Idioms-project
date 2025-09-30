<div class="container mt-4">
  <h2>Edit Idiom</h2>
  <form method="post" action="<?= site_url('idioms/update/'.$idiom['id']) ?>">
    <div class="mb-3">
      <label>Idiom</label>
      <input type="text" name="idiom" class="form-control" 
             value="<?= $idiom['idiom'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Meaning</label>
      <textarea name="meaning" class="form-control" required><?= $idiom['meaning'] ?></textarea>
    </div>
    <div class="mb-3">
      <label>Example</label>
      <textarea name="example" class="form-control"><?= $idiom['example'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
