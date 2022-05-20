<!-- Main Content -->
<div class="main-content">
  <?php 
       $hari = date('Y-m-d');
       $this->db->select('*');
       $this->db->from('t_timbangikan');
       $this->db->where('created_date', $hari);
       $ada = $this->db->get()->result_array(); 
  ?>
  <?php 
       $hari = date('Y-m-d');
       $this->db->select('*');
       $this->db->from('t_ranking');
       $this->db->where('created_date', $hari);
       $adaa = $this->db->get()->result_array(); 
  ?>
  <?php echo $this->session->flashdata('berhasil_timbang') ?>
  <?php echo $this->session->flashdata('gagal_timbang') ?>
  <?php echo $this->session->flashdata('berhasil_edit')?>
  <?php echo $this->session->flashdata('berhasil_hapus')?>
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
              <small>Hanya panitia yang dapat melakukan penimbangan ikan </small>
            </div>
          </div>
      </div>
      </div>
   <?php  }else {?>
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Penimbangan Ikan</h4>
              
               <div class="card-header-action">

                <form id="form_ranking" method="post" action="<?php echo base_url('panitia/ranking/simpan'); ?>" enctype="multipart/form-data">
                  
                      <?php $rank=1;
                      $keys = array_column($timbang, 'berat_ikan');
                          array_multisort($keys, SORT_DESC, $timbang);
                          foreach($timbang as $key => $value) : ?>
                      
                        <input name="id_timbangikan[]" value="<?= $value->id_timbangikan?>" id="id_timbangikan" hidden>
                        <input name="berat_ikan[]" value="<?= $value->berat_ikan?>" id="berat_ikan" hidden>
                        <input name="urutan[]" value="<?php echo $rank++ ?>" id="urutan" hidden>
                      <?php endforeach; ?>
                  </form>
                    <?php if (count($adaa)!=null) { ?>
                      <div class="btn btn-icon icon-left btn-secondary mr-1"><i class="fas fa-plus-circle"></i> Timbang</div>
                    <?php }else{ ?>
                       <div class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataEvent"><i class="fas fa-plus-circle"></i> Timbang</div>
                    <?php } ?>

                    <?php if (count($ada)==null) { ?>
                      <button disabled type="button" class="btn btn-icon icon-left btn-secondary mr-1" ><i class="fas fa-trophy"></i> Ranking</button>
                    <?php }elseif(count($adaa)!=null) { ?>
                      <button disabled type="button" class="btn btn-icon icon-left btn-secondary mr-1" type="button"><i class="fas fa-trophy"></i> Ranking</button>
                    <?php }else{ ?>
                      <button onclick="ranking()" <?php if(count($ada)==null){echo "disabled";}elseif(count($adaa)!=null){echo "disabled";} ?> type="button" class="btn btn-icon icon-left btn-success mr-1" ><i class="fas fa-trophy"></i> Ranking</button>
                    <?php } ?>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                 </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              
             <!--  <?php echo $this->session->flashdata('berhasilEditEvent');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusEvent');  ?> -->  
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Nomor Tiket</th>
                      <th>Pemancing</th>
                      <th>Berat Ikan</th>
                      <th style="width: 20%;" class="text-center">Action</th> 
                   </tr>
                  </thead>
                  <tbody>
                   <?php 
                    $no=1;
                    foreach($timbang as $tb) : ?>
                    <tr>
                      <td class="text-center"><?php echo $no++ ?></td>
                      <td><?php echo $tb->id_tiket ?></td>
                      <td><?php echo $tb->nama ?></td>
                      <td><?php echo $tb->berat_ikan ?> Kg</td>
                      <?php if (count($adaa)!=null) { ?>
                       <td class="text-center">
                         <div class="btn btn-secondary dropdown-toggle">Options</div>
                      </td>
                      <?php }else { ?>
                      <td class="text-center">
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataTimbang<?php echo $tb->id_timbangikan?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataTimbang<?php echo $tb->id_timbangikan ?>"><i class="fas fa-trash"></i> Hapus</button>
                          </div>
                        </div>
                      </td>
                      <?php } ?>
                      <!-- <td class="text-center"><button class="btn btn-light btn-icon icon-left " data-toggle="modal" data-target="#editDataTimbang<?php echo $tb->id_timbangikan ?>"><i class="far fa-edit"></i> Edit</button></td> -->
                      <!--<td><button class="btn btn-light btn-icon icon-left dropdown-item text-danger " data-toggle="modal" data-target="#hapusDataEvent<?php echo $evt->id_event ?>"><i class="fas fa-trash"></i> Hapus</button></td> -->
                    </tr>
                    <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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

<script type="text/javascript">
  

  function ranking(){
      $('#modal_ranking').modal('show').appendTo('body');
  }

  function tambahDataEvent(){
      $('#tambahDataEvent').modal('show').appendTo('body');
  }

  function kirim_form(){
      document.getElementById('form_ranking').submit();
  }


</script>

<!-- Tambah modal -->
<div class="modal fade" id="tambahDataEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'panitia/penimbangan_ikan/timbang'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nomor Tiket</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="id_tiket" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Berat Ikan (Kg)</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="berat_ikan" step=0.001 min=0 required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
       </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End modal -->

<!--modal edit timbangan ikan-->
<?php foreach ($timbang as $tb) : ?>
<div class="modal fade" id="editDataTimbang<?php echo $tb->id_timbangikan?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'panitia/penimbangan_ikan/edit'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nomor Tiket</label>
            <input type="text" class="form-control" value="<?php echo $tb->id_tiket ?>" readonly>
          </div>
          <div class="form-group">
            <input type="hidden" value="<?php echo $tb->id_timbangikan ?>" type="text" name="id_timbangikan">
            <label for="inputEmail4">Berat Ikan (Kg)</label>
            <input type="text" class="form-control" value="<?php echo $tb->berat_ikan ?>" name="berat_ikan" required oninvalid="this.setCustomValidity('Data harus diisi!')" oninput="setCustomValidity('')">
          </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>  
<!-- end modal -->

<!-- modal hapus timbang-->
<?php foreach ($timbang as $tb) : ?>
<div class="modal fade" id="hapusDataTimbang<?php echo $tb->id_timbangikan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('panitia/penimbangan_ikan/hapus') ?>" method="post">
        <input hidden value="<?php echo $tb->id_timbangikan ?>" type="text" name="id_timbangikan">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini ?
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-primary">Ya</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- end modal -->




<div class="modal fade" id="modal_ranking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('panitia/penimbangan_ikan/hapus') ?>" method="post">
        <input hidden value="<?php echo $tb->id_timbangikan ?>" type="text" name="id_timbangikan">
        <div class="modal-body">
          Apakah anda yakin akan melakukan perankingan ?
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="button" onclick="kirim_form()" class="btn btn-primary">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>