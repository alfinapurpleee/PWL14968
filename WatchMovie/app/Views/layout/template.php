<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $this->renderSection('title') ?></title>
  <link rel="stylesheet" href="<?= base_url('css/template.css') ?>">
</head>
</head>

<body>

  <!-- Navbar -->
  <?= $this->include('layout/navbar') ?>

  <div class="container">
    <!-- Sidebar -->
    <?= $this->include('layout/sidebar') ?>

    <!-- Main Content -->
    <main class="main-content">
      <?= $this->renderSection('content') ?>
    </main>
  </div>

  <!-- Footer -->
  <?= $this->include('layout/footer') ?>

  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.querySelector('.sidebar');
    const closeBtn = document.querySelector('.close-btn');

    menuToggle.addEventListener('click', () => {
      sidebar.style.display = 'flex';
    });

    closeBtn.addEventListener('click', () => {
      sidebar.style.display = 'none';
    });
  </script>
</body>

</html>