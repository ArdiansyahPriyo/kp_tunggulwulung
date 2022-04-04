<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
  <div class="navbar-header d-xl-block d-none">
      <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="navbar-brand" href="<?php echo base_url('')?>">
              <span class="brand-logo">
                <img class="brand-text mb-0" src="<?php echo base_url()?>assets/img/tunggul_wulung4.png" width="100" height="40">
              </span>
            </a>
        </li>
      </ul>
  </div>
  <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
      <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
      </ul>
      <ul class="nav navbar-nav bookmark-icons">
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link nav-link-style" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Night Mode"><i class="ficon" data-feather="moon"></i></a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link" href="https://web.facebook.com/groups/2670627326539230/" target="blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="ficon" data-feather="facebook"></i></a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link" href="https://wa.me/6285730078027" data-bs-toggle="tooltip" target="blank" data-bs-placement="bottom" title="WhatsApp"><i class="ficon" data-feather="message-square"></i></a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link"><span id="tgl"></span></a>
        </li>
      </ul>
      <ul class="nav navbar-nav">
      </ul>
    </div>
   <ul class="nav navbar-nav align-items-center ms-auto">
      <?php if($this->session->userdata('nama')) { ?>
        <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <div class="user-nav d-sm-flex d-none">
                  <span class="user-name fw-bolder"> <?php echo $this->session->userdata('nama') ?></span>
                  <span class="user-status"> <?php echo $this->session->userdata('email') ?></span>
                </div> -->
                <?php foreach ($user as $usr) : ?>
                <span class="avatar">
                  <img class="round" src="<?php echo base_url().'/uploads/'.$usr->foto ?>" alt="avatar" height="35" width="35"><span class="avatar-status-online"></span>
                </span>
              <?php endforeach; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                <a class="dropdown-item" href="<?php echo base_url('profil') ?>"><i class="me-50" data-feather="user"></i> Profil</a>
                <a class="dropdown-item" href="#"><i class="me-50" data-feather="credit-card"></i> Tiket Saya</a>
                <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout_user"><i class="me-50" data-feather="power"></i> Logout</a>
            </div>
        </li>
      <?php }else{ ?>

      <li class="nav-item dropdown dropdown-user">
          <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user-nav d-sm-flex d-none">
            </div>
            <span class="">
               <a class="btn btn-sm btn-outline-primary " href="<?php echo base_url('login') ?>"> Login
               </span>
          </a>
      </li>
    <?php } ?>
    </ul>
  </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                  <a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                    <span class="brand-logo">
                    </span>
                    <h5 class="text-primary">KP TUNGGUL WULUNG</h5>
                  </a>
                </li>
                <li class="nav-item nav-toggle">
                  <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                  </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
              <li  <?=$this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"'?>>
                <a class="nav-link d-flex align-items-center" href="<?php echo base_url('')?>">
                  <i data-feather="home"></i><span data-i18n="Dashboards">Home</span>
                </a>
              </li>
              <li <?=$this->uri->segment(1) == 'tiket' || $this->uri->segment(2) == 'pesan_tiket' ? 'class="nav-item active"' : 'class="nav-item"'?>>
                <a class="nav-link d-flex align-items-center" href="<?php echo base_url('tiket') ?>">
                  <i data-feather="shopping-cart"></i><span data-i18n="Dashboards">Tiket</span>
                </a>
              </li>
              <li <?=$this->uri->segment(1) == 'info' || $this->uri->segment(2) == 'detail_info' ? 'class="nav-item active"' : 'class="nav-item"'?>>
                <a class="nav-link d-flex align-items-center" href="<?php echo base_url('info') ?>">
                  <i data-feather="info"></i><span data-i18n="Dashboards">Info Kolam</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="index.html" data-bs-toggle="dropdown">
                  <i data-feather="image"></i><span data-i18n="Dashboards">Galeri</span>
                </a>
              </li>
              <li <?=$this->uri->segment(1) == 'contact' ? 'class="nav-item active"' : 'class="nav-item"'?>>
                <a class="nav-link d-flex align-items-center" href="<?php echo base_url('contact') ?>">
                  <i data-feather="message-circle"></i><span data-i18n="Dashboards">Contact</span>
                </a>
              </li>
              
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->

<!-- modal -->
<div class="modal fade" id="logout_usersss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

<!-- Modal -->
<div class="modal fade text-start" id="logout_user" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Logout</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Apakah anda yakin ingin keluar?</h5>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <?php echo anchor('login/logout', '<div class="btn btn-primary btn">Ya</div>') ?>
            </div>
        </div>
    </div>
</div>

<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tgl").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>