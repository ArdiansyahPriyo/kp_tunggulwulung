<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Supplier</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataSupplier"><i class="fas fa-plus-circle"></i> Tambah Supplier</button>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahSupplier');  ?>  
              <?php echo $this->session->flashdata('berhasilEditSupplier');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusSupplier');  ?>  
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Nama Supplier</th>
                      <th>Alamat</th>
                      <th>Nomor HP</th>
                      <th class="text-center" style="width: 21%;" colspan="2">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($supplier as $spl) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $spl->nama_supplier ?></td>
                      <td><?php echo $spl->alamat_supplier ?></td>
                      <td><?php echo $spl->no_hp_supplier ?></td>
                      <td class="text-center">
                        <button class="btn btn-icon icon-left btn-light" data-toggle="modal" data-target="#editDataSupplier<?php echo $spl->id_supplier ?>"><i class="far fa-edit"></i> Edit</button>
                       </td>
                      <td class="text-center">
                        <button class="btn btn-icon icon-left btn-light text-danger" data-toggle="modal" data-target="#hapusDataSupplier<?php echo $spl->id_supplier ?>"><i class="fas fa-trash"></i> Hapus</button>
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

<!--modal tambah data supplier-->
<div class="modal fade" id="tambahDataSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_supplier/tambah_supplier'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nama Supplier</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="nama_supplier" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <div class="input-group">
              <textarea class="form-control" name="alamat_supplier" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label>Nomor HP</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="no_hp_supplier" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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

<!--modal edit supplier-->
<?php 
foreach ($supplier as $spl) : ?>
<div class="modal fade" id="editDataSupplier<?php echo $spl->id_supplier?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_supplier/edit_supplier'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nama Supplier</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="nama_supplier" value="<?php echo $spl->nama_supplier ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
              <input type="hidden" value="<?php echo $spl->id_supplier ?>" type="text" name="id_supplier">
            </div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <div class="input-group">
              <textarea class="form-control" name="alamat_supplier" required><?php echo $spl->alamat_supplier ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label>Nomor HP/WA</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="no_hp_supplier" value="<?php echo $spl->no_hp_supplier ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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
<?php foreach ($supplier as $spl) : ?>
<div class="modal fade" id="hapusDataSupplier<?php echo $spl->id_supplier ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_supplier/hapus_supplier') ?>" method="post">
        <input hidden value="<?php echo $spl->id_supplier ?>" type="text" name="id_supplier">
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