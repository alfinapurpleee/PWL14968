<?= $this->extend('layout/template') ?>

<?= $this->section('title') ?>
Admin Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="header admin">
  <h1>Selamat Datang <?= $username ?></h1>
  <p>Role kamu adalah seorang admin</p>
  <p></p>
</div>
<div class="movie-grid" id="movies">
  <?php foreach ($movies as $movie): ?>
    <div class="movie-card">
      <img src="<?= esc($movie['urlImage']) ?>" alt="<?= esc($movie['title']) ?>">
      <div class="content">
        <h3><?= esc($movie['title']) ?></h3>
        <p><?= esc($movie['description']) ?></p>
      </div>
      <div class="footer">
        Rilis: <?= esc($movie['release_date']) ?> | Rating: <?= esc($movie['rating']) ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?= $this->endSection() ?>