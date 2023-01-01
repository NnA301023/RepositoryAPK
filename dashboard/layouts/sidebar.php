<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link " href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-heading">User Management</li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="profile#profile-edit">
            <i class="bi bi-circle"></i><span>Edit Profile</span>
          </a>
        </li>
        <li>
          <a href="profile#profile-change-password">
            <i class="bi bi-circle"></i><span>Ganti Password</span>
          </a>
        </li>
      </ul>
    </li>
    <?php
    if($_SESSION['user']['role'] == 1):?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="data-user">
        <i class="bi bi-person"></i>
        <span>Data Users</span>
      </a>
    </li>
    <li class="nav-heading">SISTEM MANAJEMEN TA</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="antrian-proposal">
        <i class="bi bi-stack"></i>
        <span>Lihat Antrian Proposal</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="antrian-dokumen">
        <i class="bi bi-files-alt"></i>
        <span>Lihat Antrian Dokumen</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="data-artikel">
        <i class="bi bi-newspaper"></i>
        <span>Artikel</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="data-skripsi">
        <i class="bi bi-mortarboard"></i>
        <span>Skripsi</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="data-dokeng">
        <i class="bi bi-journal"></i>
        <span>Dokumen Engineering</span>
      </a>
    </li>
    <hr>
    <li class="nav-item">
      <a class="nav-link collapsed" href="add-post">
        <i class="bi bi-plus"></i>
        <span>Tambah Dokumen</span>
      </a>
    </li>
    <?php
    else:?>
    <li class="nav-heading">SISTEM MANAJEMEN TA</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="status-ajuan">
        <i class="bi bi-clock-history"></i>
        <span>Status Ajuan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="ajukan-riset">
        <i class="bi bi-plus"></i>
        <span>Tambah Ide Riset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="ajukan-dokumen">
        <i class="bi bi-plus"></i>
        <span>Tambah Dokumen</span>
      </a>
    </li>
    <?php
    endif;
    ?>
  </ul>

</aside>