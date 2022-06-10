<div class="main-content">
  <?php echo $this->session->flashdata('valid') ?>
  <?php echo $this->session->flashdata('tidak_valid') ?>
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
              <small>Hanya panitia yang dapat melakukan validasi tiket </small>
            </div>
          </div>
      </div>
      </div>
     
   
   <?php  }else {?>
    <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card" id="sample-login">
            <form action="<?php echo base_url(). 'panitia/validasi/tiket'; ?>" method="post">
              <div class="card-header">
                <h4>Validasi Tiket</h4>
              </div>
              <div class="card-body">
               <video id="preview" width="250" height="160"></video>
                <div class="form-group mt-1">
                  <label>Nomor Tiket</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-money-check"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" name="id_tiket" id="qrcode" required oninvalid="this.setCustomValidity('Data harus diisi!')" oninput="setCustomValidity('')">
                  </div>
                </div>
              </div>
              <div class="card-footer pt-">
                <button type="submit" class="btn btn-primary">Cek</button>
              </div>
            </form>
          </div>
        </div>
         
      </div>
    </div>
  </section>
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

<script src="<?php echo base_url()?>assets1/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets1/instascan.min.js"></script>

<script type="text/javascript">

  
  
  let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
  scanner.addListener('scan', function(content){
    //alert(content);

    $('#qrcode').val(content);
  });

  Instascan.Camera.getCameras().then(function (cameras){

    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    }else{
      console.error('Kamera tidak ditemukan!');
    }
  }).catch(function (e){
    console.error(e);
  });


</script>