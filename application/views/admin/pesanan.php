<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Pesanan</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataSubEvent"><i class="fas fa-plus-circle"></i> Tambah Sub Event</button>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahSubEvent');  ?>  
              <?php echo $this->session->flashdata('berhasilEditSubEvent');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusSubEvent');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Nama Pemesan</th>
                      <th>Jenis Event</th>
                      <th class="text-center" style="width: 5%;" colspan="2">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($pesanan as $psn) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $psn->nama ?></td>
                      <td><?php echo $psn->subevent ?></td>
                      <td>
                        <button class="btn btn-success btn-icon icon-left dropdown-item " data-toggle="modal" data-target="#lihatDataDetail<?php echo $psn->id_subevent ?>"><i class="fas fa-search-plus"></i> Detail</button>
                      </td>
                      <td>
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataSubEvent<?php echo $psn->id_subevent ?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataSubEvent<?php echo $psn->id_subevent ?>"><i class="fas fa-trash"></i> Hapus</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#lihatDataFileSubEvent<?php echo $psn->id_subevent ?>"><i class="fas fa-file-image"></i> Lihat Brosur</button>
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

<!--Modal Lihat File  -->
<?php foreach($subevent as $sbevt) : ?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="lihatDataFileSubEvents<?php echo $sbevt->id_subevent ?>" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <embed src="<?php echo base_url().'/uploads/'.$sbevt->file ?>"
                    frameborder="0" width="100%" height="600px">
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- End modal -->

<!-- basic modal -->
<?php foreach($subevent as $sbevt) : ?>
<div class="modal fade" id="lihatDataFileSubEvent<?php echo $sbevt->id_subevent ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed src="<?php echo base_url().'/uploads/'.$sbevt->file ?>"
                    frameborder="0" width="100%" height="600px">
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Tambah Sub event -->
<div class="modal fade" id="tambahDataSubEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_subevent/tambah_subevent'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Event</label>
            <select class="form-control" name="id_event" required oninvalid="this.setCustomValidity('Data tidak boleh kosong. Isi data event terlebih dahulu!')" oninput="setCustomValidity('')">
              <?php foreach($list_event as $evt) : ?>
                <option value="<?php echo $evt->id_event ?>">
                  <?php echo $evt->event ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Sub Event</label>
            <div class="input-group">
              <input type="text" class="form-control" name="subevent" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Pelaksanaan</label>
            <div class="input-group">
              <input type="date" class="form-control" id="tgl_plk" name="tanggal_pelaksanaan" min="2022-01-01" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onclick="minimal_plk()">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Mulai</label>
              <input type="time" class="form-control" id="inputMulai" placeholder="Email" name="tmmulai">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Selesai</label>
              <input type="time" class="form-control" id="inputSelesai" placeholder="Password" name="tmselesai">
            </div>
          </div>
          <div class="form-group">
            <label>Harga Tiket</label>
            <div class="input-group">
              <input type="text" class="form-control" id="rupiah" name="harga" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe()" placeholder="Rp.">
            </div>
          </div>
          <div class="form-group">
            <label>Stok Tiket</label>
            <div class="input-group">
              <input type="number" class="form-control"  name="stok" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe()">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Jenis Hadiah</label>
              <select class="form-control" name="jenis_hadiah">
                <option value="potongan">Potongan Tiket</option>
                <option value="langsung">Hadiah Langsung</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nominal</label>
              <input type="text" class="form-control" id="rupiah2" name="nominal" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe2()" placeholder="Rp. ">
            </div>
          </div>
          <div class="form-group">
            <label>Jumlah Lapak</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="jumlah_lapak" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Mulai</label>
            <div class="input-group">
              <input type="date" class="form-control" id="tgl_ml" name="mulai" min="2022-01-01" max="2025-01-01" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onclick="minimal_mul()">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Berakhir</label>
            <div class="input-group">
              <input type="date" class="form-control" id="tgl_ak" name="akhir" min="2022-01-01" max="2025-01-01" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onclick="minimal_mul()">
            </div>
          </div>
          <div class="form-group">
            <label>Brosur</label>
            <div class="input-group">
              <input type="file" class="form-control" name="file" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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

<!--modal edit subevent-->
<?php 
foreach ($subevent as $sbevt) : ?>
<div class="modal fade" id="editDataSubEvent<?php echo $sbevt->id_subevent?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Sub Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_subevent/edit_subevent'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Sub Event</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="subevent" value="<?php echo $sbevt->subevent ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
              <input type="hidden" value="<?php echo $sbevt->id_subevent ?>" type="text" name="id_subevent">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Pelaksanaan</label>
            <div class="input-group">
              <input type="date" class="form-control" id="tgl_plk2" name="tanggal_pelaksanaan" min="2022-01-01" value="<?php echo $sbevt->tanggal_pelaksanaan ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onclick="minimal_plk2()">
            </div>
          </div>
          <div class="form-group">
            <label>Harga Tiket</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="harga" value="<?php echo $sbevt->harga ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="form-group">
            <label>Stok Tiket</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="stok" value="<?php echo $sbevt->stok ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Jenis Hadiah</label>
              <select class="form-control" name="jenis_hadiah" required>
                <option value="<?php if($sbevt->jenis_hadiah == "potongan"){
                  echo "potongan";
                }elseif($sbevt->jenis_hadiah == "langsung"){
                  echo "langsung";
                } ?>"><?php if ($sbevt->jenis_hadiah == "potongan") {
                  echo "Potongan Tiket";
                }elseif($sbevt->jenis_hadiah == "langsung") {
                  echo "Hadiah Langsung";
                }?></option>
                <?php if ($sbevt->jenis_hadiah == "potongan")  :?>
                <option value="langsung">Hadiah Langsung</option>
              <?php else : ?>
                <option value="potongan">Potongan Tiket</option>
                <?php endif;?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nominal</label>
              <input type="text" class="form-control" id="rupiah3" name="nominal" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe3()" placeholder="Nominal" value="<?php echo $sbevt->nominal ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Jumlah Lapak</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="jumlah_lapak" value="<?php echo $sbevt->jumlah_lapak ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Mulai</label>
            <div class="input-group">
              <input type="date" class="form-control" id="edtml" name="mulai" min="2021-02-01" value="<?php echo $sbevt->mulai ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" >
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Berakhir</label>
            <div class="input-group">
              <input type="date" class="form-control" id="edtak" name="akhir" min="2021-02-01" value="<?php echo $sbevt->akhir ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" >
            </div>
          </div>
          <div class="form-group">
            <label>Brosur</label>
            <div class="input-group">
              <input type="file" class="form-control" name="file" >
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

<!-- Detail Subevent -->
<?php 
foreach ($subevent as $sbevt) : ?>
<div class="modal fade" id="lihatDataDetail<?php echo $sbevt->id_subevent ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Sub Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-4">
          <p class="clearfix">
            <span class="float-left">
              Event
            </span>
            <span class="float-right ">
              <b><?php echo $sbevt->event ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Sub Event
            </span>
            <span class="float-right ">
              <b><?php echo $sbevt->subevent ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Tanggal Pelaksanaan
            </span>
            <span class="float-right ">
              <b><?php echo date("d-m-Y", strtotime($sbevt->tanggal_pelaksanaan)) ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Waktu Pelaksanaan
            </span>
            <span class="float-right ">
              <b><?php echo substr($sbevt->jam_mulai, 0,5) ?> WIB s/d <?php echo substr($sbevt->jam_selesai, 0,5)  ?> WIB</b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Jumlah Lapak
            </span>
            <span class="float-right ">
              <b><?php echo $sbevt->jumlah_lapak ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Harga Tiket
            </span>
            <span class="float-right badge badge-light">
              <b>Rp. <?php echo number_format($sbevt->harga,0,'.','.') ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Jenis Hadiah
            </span>
            <span class="float-right ">
              <b><?php if ($sbevt->jenis_hadiah == "langsung") {
                echo "Hadiah Langsung";
              }elseif($sbevt->jenis_hadiah == "potongan"){
                echo "Potongan Tiket";
              } ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Nominal <?php if ($sbevt->jenis_hadiah == "langsung") {
                echo "Hadiah";
              }elseif($sbevt->jenis_hadiah == "potongan"){
                echo "Potongan (Per Tiket)";
              } ?>
            </span>
            <span class="float-right ">
              <b>Rp. <?= number_format($sbevt->nominal,0,'.','.') ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Stok Tiket
            </span>
            <span class="float-right ">
              <b><?php echo $sbevt->stok ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Tanggal Mulai
            </span>
            <span class="float-right ">
              <b><?php echo date("d-m-Y", strtotime($sbevt->mulai)) ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Tanggal Berakhir
            </span>
            <span class="float-right ">
              <b><?php echo date("d-m-Y", strtotime($sbevt->akhir)) ?></b>
            </span>
          </p>
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

<!-- modal hapus subevent-->
<?php foreach ($subevent as $sbevt) : ?>
<div class="modal fade" id="hapusDataSubEvent<?php echo $sbevt->id_subevent ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_subevent/hapus_subevent') ?>" method="post">
        <input hidden value="<?php echo $sbevt->id_subevent ?>" type="text" name="id_subevent">
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
<!-- akhir modal -->

