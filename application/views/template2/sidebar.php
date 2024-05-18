<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url('assets2/assets/images/logo.svg') ?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets2/assets/images/logo-mini.svg') ?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?= base_url('assets2/assets/images/faces/images.png') ?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Danur Faqih</h5>
                  <span>Super Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('beranda') ?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('Beranda/lapangan') ?>">
              <span class="menu-icon">
                <i class="mdi mdi-dribbble"></i>
              </span>
              <span class="menu-title">Lapangan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('Beranda/customer') ?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
              <span class="menu-title">Customer</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('Beranda/reservasi') ?>">
              <span class="menu-icon">
                <i class="mdi mdi-calendar-multiple"></i>
              </span>
              <span class="menu-title">Reservasi</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('Beranda/laporan') ?>">
              <span class="menu-icon">
                <i class="mdi mdi-file-chart"></i>
              </span>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
        </ul>
      </nav>

