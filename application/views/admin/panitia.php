<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Panitia</h4>
               <div class="card-header-action">
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahPanitia');  ?>  
              <?php echo $this->session->flashdata('panitiaSudahAda');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusPanitia');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 10%;">No</th>
                      <th >Sub Event</th>
                      <th class="text-center" colspan="2" style="width: 30%;">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($subevent as $sbevt):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $sbevt->subevent ?></td>
                      <td class="text-center"><button class="btn btn-light btn-icon icon-left" data-toggle="modal" data-target="#tambahDataPanitia<?php echo $sbevt->id_subevent ?>"><i class="fas fa-plus-circle"></i> Tambah Panitia</button></td>
                      <td class="text-center"><a href="" class="btn btn-light btn-icon icon-left " data-toggle="modal" data-target="#lihatDataPanitia<?php echo $sbevt->id_subevent ?>" ><i class="fas fa-search-plus"></i> Detail</a></td>
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

<!-- Tambah modal -->
<?php foreach ($subevent as $sbevt) : ?>
<div class="modal fade" id="tambahDataPanitia<?php echo $sbevt->id_subevent ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Panitia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_panitia/tambah_panitia'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Sub Event</label>
            <div class="input-group">
              <input type="text" class="form-control" name="" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" value="<?php echo $sbevt->subevent ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label>Panitia</label>
            <select class="form-control" name="id_user">
              <?php foreach($list_user as $lsusr) : ?>
                <option value="<?php echo $lsusr->id_user ?>">
                  <?php echo $lsusr->nama ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <input type="hidden" name="id_subevent" value="<?php echo $sbevt->id_subevent ?>">
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- End modal -->


<!-- detail modal -->
<?php foreach ($subevent as $sbevt) : ?>
<div class="modal fade" id="lihatDataPanitia<?php echo $sbevt->id_subevent ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Panitia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th style="width: 10%;">No</th>
                <th>Panitia</th>
                <th class="text-center" style="width: 30%;">Action</th>
             </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              foreach($panitia as $pnt) : ?>
                <?php if ($pnt->id_subevent == $sbevt->id_subevent) {  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pnt->nama ?></td>
                    <td class="text-center"><?php echo anchor('admin/data_panitia/hapus/' .$pnt->id_panitia, '<div class="btn btn-light btn-icon icon-left text-danger"><i class="fas fa-trash"></i> Hapus</div>') ?></td>
                  </tr>
                <?php } ?> 
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>  
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- End modal -->

