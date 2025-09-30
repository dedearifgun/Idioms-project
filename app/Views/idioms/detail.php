<!DOCTYPE html>
<html>
<head>
  <title><?= $idiom['idiom'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
  <a href="<?= site_url('idioms') ?>" class="btn btn-sm btn-secondary mb-3">← Back</a>
  <div class="card">
    <div class="card-body">
      <h3><?= $idiom['idiom'] ?></h3>
      <p><b>Meaning:</b> <?= $idiom['meaning'] ?></p>
      <p><b>Example:</b> <?= $idiom['example'] ?></p>
    </div>
  </div>
</div>
</body>
</html>
