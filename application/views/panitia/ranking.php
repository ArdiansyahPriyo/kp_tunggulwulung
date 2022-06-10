<div class="main-content">
  <?php echo $this->session->flashdata('valid') ?>
  <?php echo $this->session->flashdata('tidak_valid') ?>
  <?php echo $this->session->flashdata('berhasil_ranking') ?>
  <?php
    $id_user    = $this->session->userdata('id_user');
    $tgl        = date("Y-m-d");
    $sql = $this->db->query("SELECT t_panitia.*, t_event.* FROM t_panitia INNER JOIN t_event ON t_event.id_event = t_panitia.id_event where t_panitia.id_user ='$id_user' and t_event.tanggal_pelaksanaan = '$tgl' ")->result(); 
    if (!$sql) { ?>
      <div class="card">
        <div class="card-header">
          <h4>Info</h4>
        </div>
        <div class="card-body">
          <div class="alert alert-primary alert-has-icon">
            <div class="alert-icon"><i class="fas fa-info"></i></div>
            <div class="alert-body">
              <div class="alert-title">Anda belum diatur menjadi panitia</div>
              <small>Hanya panitia yang dapat melakukan perankingan </small>
            </div>
          </div>
      </div>
      </div>
     
   
   <?php  }else {?>
    <div class="card" id="sample-login">
      <form action="<?php echo base_url(). 'panitia/validasi/tiket'; ?>" method="post">
        <div class="card-header">
          <?php foreach($ranking as $rk) : ?>
          <h4>Ranking Peserta <?php echo $rk->event ?> ( <?php 
                          $hari = date("D",strtotime($rk->tanggal_pelaksanaan));
                          if ($hari == "Sun") {
                            echo "Minggu" ;
                          }elseif ($hari == "Mon") {
                            echo "Senin" ;
                          }elseif ($hari == "Tue") {
                            echo "Selasa" ;
                          }elseif ($hari == "Wed") {
                            echo "Rabu" ;
                          }elseif ($hari == "Thu") {
                            echo "Kamis" ;
                          }elseif ($hari == "Fri") {
                            echo "Jumat" ;
                          }elseif ($hari == "Sat") {
                            echo "Sabtu" ;
                          }else{
                            echo "";
                          }
                         ?>, <?php echo date("d", strtotime($rk->tanggal_pelaksanaan)) ?>

                         <?php 
                          $bln = date("F",strtotime($rk->tanggal_pelaksanaan));
                          if ($bln == "January") {
                            echo "Januari" ;
                          }elseif ($bln == "February") {
                            echo "Februari" ;
                          }elseif ($bln == "March") {
                            echo "Maret" ;
                          }elseif ($bln == "April") {
                            echo "April" ;
                          }elseif ($bln == "May") {
                            echo "Mei" ;
                          }elseif ($bln == "June") {
                            echo "Juni" ;
                          }elseif ($bln == "July") {
                            echo "Juli" ;
                          }elseif ($bln == "August") {
                            echo "Agustus" ;
                          }elseif ($bln == "September") {
                            echo "September" ;
                          }elseif ($bln == "October") {
                            echo "Oktober" ;
                          }elseif ($bln == "November") {
                            echo "November" ;
                          }elseif ($bln == "December") {
                            echo "Desember" ;
                          }else{
                            echo "";
                          }
                         ?>
                         <?php echo date("Y", strtotime($rk->tanggal_pelaksanaan)) ?>)</h4>
           <?php break; ?>
        <?php endforeach; ?>
        </div>
        <div class="card-body pb-0">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th style="width:5%;">No</th>
                <th>Nomor Tiket</th>
                <th>Nama</th>
                <th class="text-center">Berat Ikan</th>
                <th class="text-center">Peringkat</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              foreach($ranking as $rk) : ?>
              <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td><?php echo $rk->id_tiket ?></td>
                <td><?php echo $rk->nama ?></td>
                <td class="text-center"><?php echo $rk->berat_ikan ?> Kg</td>
                <td class="text-center"> 
                  <div class="badge badge-success"><b><?php echo $rk->urutan ?></b></div>
                </td>
                
              </tr>
            <?php endforeach; ?>
            </tbody>

          </table>
        </div>
        <div class="card-footer pt-">
          
        </div>
      </form>
    </div>
  <?php } ?>
  <div class="settingSidebar">
    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="settingSidebar-body ps-container ps-theme-default">
      <div class=" fade show active">
        <div class="setting-panel-header">Setting Panel
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Select Layout</h6>
          <div class="selectgroup layout-color w-50">
            <label class="selectgroup-item">
              <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
              <span class="selectgroup-button">Light</span>
            </label>
            <label class="selectgroup-item">
              <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
              <span class="selectgroup-button">Dark</span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Sidebar Color</h6>
          <div class="selectgroup selectgroup-pills sidebar-color">
            <label class="selectgroup-item">
              <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
            </label>
            <label class="selectgroup-item">
              <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Color Theme</h6>
          <div class="theme-setting-options">
            <ul class="choose-theme list-unstyled mb-0">
              <li title="white" class="active">
                <div class="white"></div>
              </li>
              <li title="cyan">
                <div class="cyan"></div>
              </li>
              <li title="black">
                <div class="black"></div>
              </li>
              <li title="purple">
                <div class="purple"></div>
              </li>
              <li title="orange">
                <div class="orange"></div>
              </li>
              <li title="green">
                <div class="green"></div>
              </li>
              <li title="red">
                <div class="red"></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <div class="theme-setting-options">
            <label class="m-b-0">
              <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="mini_sidebar_setting">
              <span class="custom-switch-indicator"></span>
              <span class="control-label p-l-10">Mini Sidebar</span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <div class="theme-setting-options">
            <label class="m-b-0">
              <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="sticky_header_setting">
              <span class="custom-switch-indicator"></span>
              <span class="control-label p-l-10">Sticky Header</span>
            </label>
          </div>
        </div>
        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
          <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
            <i class="fas fa-undo"></i> Restore Default
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="main-footer">
  <div class="footer-left">
    <label>Copyright © 2022K.P Tunggul Wulung, All rights Reserved</label>
  </div>
  <div class="footer-right">
  </div>
</footer>
