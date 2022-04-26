<div class="main-content">
  <?php echo $this->session->flashdata('valid') ?>
  <?php echo $this->session->flashdata('tidak_valid') ?>
  <?php
    $id_user    = $this->session->userdata('id_user'); 
    $sql = $this->db->query("SELECT * FROM t_panitia where id_user ='$id_user'")->result(); 
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
    <div class="card" id="sample-login">
      <form action="<?php echo base_url(). 'panitia/validasi/tiket'; ?>" method="post">
        <div class="card-header">
          <h4>Validasi Tiket</h4>
        </div>
        <div class="card-body pb-0">
          <p class="text-muted">Masukkan nomor tiket untuk melakukan validasi</p>
          <div class="form-group">
            <label>Nomor Tiket</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-money-check"></i>
                </div>
              </div>
              <input type="text" class="form-control" name="id_tiket" placeholder="">
            </div>
          </div>
        </div>
        <div class="card-footer pt-">
          <button type="submit" class="btn btn-primary">Cek</button>
        </div>
      </form>
    </div>
  <?php } ?>
</div>