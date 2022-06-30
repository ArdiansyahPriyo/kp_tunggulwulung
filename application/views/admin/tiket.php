<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Tiket</h4>
               <div class="card-header-action">
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilEditTiketAdmin');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor Tiket</th>
                      <th>Nama Pemesan</th>
                      <th>Jenis Event</th>
                      <th>Status</th>
                      <th class="text-center">QR Code</th>
                      <th class="text-center">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($tiket as $tkt) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $tkt->id_tiket ?></td>
                      <td><?php echo $tkt->nama ?></td>
                      <td><?php echo $tkt->event ?></td>
                      <td><?php if ($tkt->status_tiket == 'belum_validasi') {
                        echo "Belum Validasi";
                      } elseif ($tkt->status_tiket == 'sudah_validasi') {
                        echo "Sudah Validasi";
                      }?></td>
                      <!-- <td><img src="<?php echo site_url('admin/data_tiket/QRcode/'.$tkt->id_tiket); ?>" alt=""></td> --> 
                      <td class="text-center"><button class="btn btn-light btn-icon icon-left" data-toggle="modal" data-target="#kotak<?php echo substr($tkt->id_tiket, 6) ?>"><i class="fas fa-search-plus"></i> QR Code</button></td> 
                      <td class="text-center"><button class="btn btn-light btn-icon icon-left" data-toggle="modal" data-target="#tiketEdit<?php echo substr($tkt->id_tiket, 6) ?>"><i class="far fa-edit"></i> Edit</button></td> 
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

<!-- Modal -->

<!--modal edit status tiket-->
<?php foreach ($tiket as $tkt) : ?>
<div class="modal fade" id="tiketEdit<?php echo substr($tkt->id_tiket, 6) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
        <form action="<?php echo base_url(). 'admin/data_tiket/edit'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nomor Tiket</label>
            <input type="text" class="form-control" value="<?php echo $tkt->id_tiket ?>" readonly>
          </div>
          <div class="form-group">
            <input type="hidden" value="<?php echo $tkt->id_tiket ?>" type="text" name="id_tiket">
            <label for="inputEmail4">Status Tiket</label>
            <select class="form-control" name="status_tiket" required>
              <option value="<?php echo $tkt->status_tiket ?>"><?php if ($tkt->status_tiket=='belum_validasi') {
                  echo 'Belum Validasi';
                }else{
                  echo 'Sudah Validasi';
                } ?>
              </option>
            <?php if ($tkt->status_tiket=='belum_validasi') { ?>
              <option value="sudah_validasi">Sudah Validasi</option>
            <?php }elseif ($tkt->status_tiket=='sudah_validasi') { ?>
              <option value="belum_validasi">Belum Validasi</option>
            <?php } ?>
            </select>
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

<?php foreach ($tiket as $tkt) : ?>
<div class="modal fade" id="kotak<?php echo substr($tkt->id_tiket, 6) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QRCODE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="text-center">
         <img src="<?php echo site_url('admin/data_tiket/QRcode/'.$tkt->id_tiket); ?>" alt="">
       </div> 
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>  

<!-- modal hapus pesanan-->
<!-- <?php foreach ($pesanan as $psn) : ?>
<div class="modal fade" id="hapusDataPesanan<?php echo $psn->id_pesanan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_pesanan/hapus_pesanan') ?>" method="post">
        <input hidden value="<?php echo $psn->id_pesanan ?>" type="text" name="id_pesanan">
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
<?php endforeach; ?> -->
<!-- end modal -->



