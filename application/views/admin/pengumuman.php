<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Pengumuman</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataPengumuman"><i class="fas fa-plus-circle"></i> Tambah Pengumuman</button>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahPengumuman');  ?>  
              <?php echo $this->session->flashdata('berhasilEditPengumuman');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusPengumuman');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Judul Pengumuman</th>
                      <th>Deskripsi</th>
                      <th>Status</th>
                      <th class="text-center">File</th>
                      <th class="text-center" style="width: 5%;">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($pengumuman as $png) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $png->judul ?></td>
                      <td><?php echo $png->deskripsi ?></td>
                      <td style="text-transform: capitalize;"><?php echo $png->status ?></td> 
                      <td class="text-center"><button class="btn btn-icon icon-left btn-success dropdown-item" data-toggle="modal" data-target="#lihatDataFilePengumuman<?php echo $png->id_pengumuman ?>"><i class="fas fa-search"></i> Lihat</button></td>
                      <td class="text-center">
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataPengumuman<?php echo $png->id_pengumuman ?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataPengumuman<?php echo $png->id_pengumuman ?>"><i class="fas fa-trash"></i> Hapus</button>
                          </div>
                        </div>
                      </td>
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

<!--Modal Lihat File Pengumuman -->
<?php foreach($pengumuman as $png) : ?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="lihatDataFilePengumumans<?php echo $png->id_pengumuman ?>" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <embed src="<?php echo base_url().'/uploads/'.$png->gambar ?>"
                    frameborder="0" width="100%" height="600px">
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- End modal -->

<?php foreach($pengumuman as $png) : ?>
<div class="modal fade" id="lihatDataFilePengumuman<?php echo $png->id_pengumuman ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed src="<?php echo base_url().'/uploads/'.$png->gambar ?>"
                    frameborder="0" width="100%" height="600px">
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Tambah Pengumuman -->
<div class="modal fade" id="tambahDataPengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pengumuman/tambah_pengumuman'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Judul Pengumuman</label>
            <div class="input-group">
              <input type="text" class="form-control" name="judul" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <div class="input-group">
              <textarea class="form-control" name="deskripsi" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" required>
              <option value="tampilkan">Tampilkan</option>
              <option value="sembunyikan">Sembunyikan</option>
            </select>
          </div>
          <div class="form-group">
            <label>File</label>
            <div class="input-group">
              <input type="file" class="form-control" name="gambar" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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
<!-- akhir modal -->

<!--modal edit pengumuman-->
<?php 
foreach ($pengumuman as $png) : ?>
<div class="modal fade" id="editDataPengumuman<?php echo $png->id_pengumuman?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pengumuman/edit_pengumuman'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Judul Pengumuman</label>
            <div class="input-group">
              <input type="text" class="form-control" name="judul" value="<?php echo $png->judul ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
              <input type="hidden" value="<?php echo $png->id_pengumuman ?>" type="text" name="id_pengumuman">
            </div>
          </div>
         <div class="form-group">
            <label>Deskripsi</label>
            <div class="input-group">
              <textarea class="form-control" name="deskripsi" required><?php echo $png->deskripsi ?></textarea>
            </div>
          </div>
         <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" required>
              <option><?php echo $png->status ?></option>
              <?php if ($png->status == "tampilkan"): ?>
              <option value="sembunyikan">sembunyikan</option>
              <?php else:?>
              <option value="tampilkan">tampilkan</option>
              <?php endif;?>
            </select>
          </div>
          <div class="form-group">
            <label>File</label>
            <div class="input-group">
              <input type="file" class="form-control" name="gambar" >
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
<?php endforeach; ?>
<!-- Akhir modal -->

<!-- modal hapus user-->
<?php foreach ($pengumuman as $png) : ?>
<div class="modal fade" id="hapusDataPengumuman<?php echo $png->id_pengumuman ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_pengumuman/hapus_pengumuman') ?>" method="post">
        <input hidden value="<?php echo $png->id_pengumuman ?>" type="text" name="id_pengumuman">
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
<!-- end user -->