

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('halaman/home'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Jenis Posyandu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('Jenisposyandu/Bayi/laporan_bayi'); ?>">
              <i class="bi bi-circle"></i><span>Bayi & Balita</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>">
              <i class="bi bi-circle"></i><span>Remaja</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>">
              <i class="bi bi-circle"></i><span>Ibu Hamil</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>">
              <i class="bi bi-circle"></i><span>PTM</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>">
              <i class="bi bi-circle"></i><span>Lansia</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>">
              <i class="bi bi-circle"></i><span>Stunting</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="<?= base_url('datauser/posyandu_datauser'); ?>">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Data User</span>
        </a>
      </li>
      <!-- datauser -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('profile/posyandu_profile/'); ?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('register/posyandu_register/'); ?>">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('login/posyandu_login/'); ?>">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(); ?>">
          <i class="bi bi-dash-circle"></i>
          <span>Log out</span>
        </a>
      </li><!-- End Log out Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->