<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <!-- <div class="nav-profile-image">
          <img src="images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>          
        </div> -->
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">David Grey. H</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="btn btn-block btn-lg btn-gradient-primary mt-4" data-toggle="collapse" href="#add" aria-expanded="false" aria-controls="add">
        <span class="menu-title">+ Surat</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="add">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="tambah-surat-masuk.php">Tambah Surat Masuk</a></li>
          <li class="nav-item"> <a class="nav-link" href="tambah-surat-keluar.php">Tambah Surat Keluar</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="surat-masuk.php">
        <span class="menu-title">Surat Masuk</span>
        <i class="mdi mdi-book-multiple menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="surat-keluar.php">
        <span class="menu-title">Surat Keluar</span>
        <i class="mdi mdi-briefcase-check menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="arsip.php">
        <span class="menu-title">Arsip Surat</span>
        <i class="mdi mdi-archive menu-icon"></i>
      </a>
    </li>
    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3"><b>Super Admin Menu</b></h6>
        </div>
        <button class="btn btn-block btn-lg btn-gradient-primary mt-4" onclick="window.location.href='lihat-user-tambah.php'"><span class="mdi mdi-account-plus menu-icon"></span> Tambah User</button>
      </span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="lihat-user.php">
        <span class="menu-title">Lihat Pengguna</span>
        <i class="mdi mdi-account-multiple menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#jabatan" aria-expanded="false" aria-controls="jabatan">
        <span class="menu-title">Pengaturan Jabatan</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-account-settings menu-icon"></i>
      </a>
      <div class="collapse" id="jabatan">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="setting-jabatan.php">Jabatan</a></li>
          <li class="nav-item"> <a class="nav-link" href="setting-unit-kerja.php">Unit Kerja</a></li>
          <li class="nav-item"> <a class="nav-link" href="setting-departemen.php">Departemen</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#letter_setting" aria-expanded="false" aria-controls="letter_setting">
        <span class="menu-title">Pengaturan Surat</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-settings menu-icon"></i>
      </a>
      <div class="collapse" id="letter_setting">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="setting-jenis-surat.php">Jenis Surat</a></li>
          <li class="nav-item"> <a class="nav-link" href="setting-sifat-surat.php">Sifat Surat</a></li>
          <li class="nav-item"> <a class="nav-link" href="setting-prioritas-surat.php">Prioritas Surat</a></li>
          <li class="nav-item"> <a class="nav-link" href="setting-folder-surat.php">Folder Arsip Surat</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>