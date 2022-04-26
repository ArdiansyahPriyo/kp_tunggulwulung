<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav" style="line-height: 120%;">
          <li class="text-right">
            <strong class="font-15"><?php echo $this->session->userdata('nama') ?></strong><br>
            <?php echo $this->session->userdata('email') ?>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo base_url()?>assets2/img/saya2.jpg"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <!-- <div class="dropdown-item has-icon"><b><?php echo $this->session->userdata('nama') ?></b><br>
              <?php echo $this->session->userdata('email') ?></div>
              <div class="dropdown-divider"></div>
              <a data-toggle="modal" data-target="#logout" class="dropdown-item has-icon"> <i class="fas fa-power-off"></i>
                <b>Logout</b>
              </a> -->
               <a href="" data-toggle="modal" data-target="#logout" class="dropdown-item has-icon"> <i class="fas fa-power-off"></i> Logout</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- Sidebar Menu -->
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?php echo base_url()?>assets/img/strike5.png" class="header-logo" /> <span
                class="logo-name">Panitia</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li <?=$this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('panitia/dashboard') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li <?=$this->uri->segment(2) == 'validasi' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('panitia/validasi') ?>" class="nav-link"><i class="fas fa-clipboard-check"></i><span>Validasi Tiket</span></a>
            </li>
            <li <?=$this->uri->segment(2) == 'rangking' ? 'class="dropdown active"' : 'class="dropdown"'?>>
              <a href="<?php echo base_url('panitia/penimbangan_ikan') ?>" class="nav-link"><i class="fas fa-weight"></i><span>Penimbangan Ikan</span></a>
            </li>
          </ul>
        </aside>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="logoutt" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah anda yakin ingin keluar ?
            </div>
            <div class="modal-footer bg-whitesmoke br">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <?php echo anchor('login/logout', '<div class="btn btn-primary btn">Ya</div>') ?>
              </div>
          </div>
        </div>
      </div>

      <!-- modal -->
        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Apakah anda yakin ingin keluar ?
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <?php echo anchor('login/logout', '<div class="btn btn-primary btn">Ya</div>') ?>
              </div>
            </div>
          </div>
        </div>