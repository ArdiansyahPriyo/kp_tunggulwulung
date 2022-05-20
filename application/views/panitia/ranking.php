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
                <td class="text-center"><?php echo $rk->urutan ?></td>
                
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
</div>