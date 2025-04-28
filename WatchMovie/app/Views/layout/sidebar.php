<div class="sidebar">
  <div class="close">
    <button class="close-btn">X</button>
  </div>

  <div class="user-profile">
    <div class="user-name"><?= $username ?></div>
    <div class="user-role">Role: <?= $role ?></div>
  </div>

  <div class="sidebar-menu">
    <a href="#movies" class="menu-item">
      <span>Movies</span>
    </a>
    <a href="#contact" class="menu-item">
      <span>Contact</span>
    </a>
  </div>

  <div class="sidebar-footer">
    <a href="/logout" class="logout-btn">Logout</a>
  </div>
</div>