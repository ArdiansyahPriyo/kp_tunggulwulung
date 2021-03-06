<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Event</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataSubEvent"><i class="fas fa-plus-circle"></i> Tambah Event</button>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahEvent');  ?>  
              <?php echo $this->session->flashdata('berhasilEditEvent');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusEvent');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Sistem</th>
                      <th>Event</th>
                      <th>Hari/Tanggal Pelaksanaan</th>
                      <th class="text-center" style="width: 5%;" >Detail</th>
                      <th class="text-center" style="width: 5%;" >Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($event as $evt) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $evt->sistem ?></td>
                      <td><?php echo $evt->event ?></td>
                      <td>
                        <?php 
                          $hari = date("D",strtotime($evt->tanggal_pelaksanaan));
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
                         ?>, <?php echo date("d", strtotime($evt->tanggal_pelaksanaan)) ?>

                         <?php 
                          $bln = date("F",strtotime($evt->tanggal_pelaksanaan));
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
                         <?php echo date("Y", strtotime($evt->tanggal_pelaksanaan)) ?>
                      </td>
                      <td>
                        <button class="btn btn-icon icon-left btn-success dropdown-item" data-toggle="modal" data-target="#lihatDataDetail<?php echo $evt->id_event ?>"><i class="fas fa-search-plus"></i> Detail</button>
                      </td>
                      <td>
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataEvent<?php echo $evt->id_event ?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataEvent<?php echo $evt->id_event ?>"><i class="fas fa-trash"></i> Hapus</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#lihatDataFileEvent<?php echo $evt->id_event ?>"><i class="fas fa-file-image"></i> Lihat Brosur</button>
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
<?php foreach($event as $evt) : ?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="lihatDataFileEvents<?php echo $evt->id_event ?>" role="dialog" aria-labelledby="myLargeModalLabel"
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
      <embed src="<?php echo base_url().'/uploads/'.$evt->file ?>"
                    frameborder="0" width="100%" height="600px">
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- End modal -->

<!-- basic modal -->
<?php foreach($event as $evt) : ?>
<div class="modal fade" id="lihatDataFileEvent<?php echo $evt->id_event ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
        <embed src="<?php echo base_url().'/uploads/'.$evt->file ?>"
                    frameborder="0" width="100%" height="600px">
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Tambah event -->
<div class="modal fade" id="tambahDataSubEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
        <form action="<?php echo base_url(). 'admin/data_event/tambah_event'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Sistem</label>
            <select class="form-control" name="id_sistem" required oninvalid="this.setCustomValidity('Data tidak boleh kosong. Isi data event terlebih dahulu!')" oninput="setCustomValidity('')">
              <?php foreach($list_sistem as $lst) : ?>
                <option value="<?php echo $lst->id_sistem ?>">
                  <?php echo $lst->sistem ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Event</label>
            <div class="input-group">
              <input type="text" class="form-control" name="event" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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
              <input type="time" class="form-control" id="inputMulai" placeholder="Email" name="tmmulai" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Selesai</label>
              <input type="time" class="form-control" id="inputSelesai" placeholder="Password" name="tmselesai" required>
            </div>
          </div>
          <div class="form-group">
            <label>Harga Tiket</label>
            <div class="input-group">
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" id="rupiah" name="harga" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe()" placeholder="Rp.">
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

<!--modal edit event-->
<?php 
foreach ($event as $evt) : ?>
<div class="modal fade" id="editDataEvent<?php echo $evt->id_event?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_event/edit_event'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label> Event</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="event" value="<?php echo $evt->event ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
              <input type="hidden" value="<?php echo $evt->id_event ?>" type="text" name="id_event">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Pelaksanaan</label>
            <div class="input-group">
              <input type="date" class="form-control" id="tgl_plk2" name="tanggal_pelaksanaan" min="2022-01-01" value="<?php echo $evt->tanggal_pelaksanaan ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onclick="minimal_plk2()">
            </div>
          </div>
          <div class="form-group">
            <label>Harga Tiket</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="harga" value="<?php echo $evt->harga ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="form-group">
            <label>Stok Tiket</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="stok" value="<?php echo $evt->stok ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Jenis Hadiah</label>
              <select class="form-control" name="jenis_hadiah" required>
                <option value="<?php if($evt->jenis_hadiah == "potongan"){
                  echo "potongan";
                }elseif($evt->jenis_hadiah == "langsung"){
                  echo "langsung";
                } ?>"><?php if ($evt->jenis_hadiah == "potongan") {
                  echo "Potongan Tiket";
                }elseif($evt->jenis_hadiah == "langsung") {
                  echo "Hadiah Langsung";
                }?></option>
                <?php if ($evt->jenis_hadiah == "potongan")  :?>
                <option value="langsung">Hadiah Langsung</option>
              <?php else : ?>
                <option value="potongan">Potongan Tiket</option>
                <?php endif;?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nominal</label>
              <input type="text" class="form-control" id="rupiah3" name="nominal" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe3()" placeholder="Nominal" value="<?php echo $evt->nominal ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Jumlah Lapak</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="jumlah_lapak" value="<?php echo $evt->jumlah_lapak ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Mulai</label>
            <div class="input-group">
              <input type="date" class="form-control" id="edtml" name="mulai" min="2021-02-01" value="<?php echo $evt->mulai ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" >
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Berakhir</label>
            <div class="input-group">
              <input type="date" class="form-control" id="edtak" name="akhir" min="2021-02-01" value="<?php echo $evt->akhir ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" >
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

<!-- Detail event -->
<?php 
foreach ($event as $evt) : ?>
<div class="modal fade" id="lihatDataDetail<?php echo $evt->id_event ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-4">
          <p class="clearfix">
            <span class="float-left">
              Sistem
            </span>
            <span class="float-right ">
              <b><?php echo $evt->sistem ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Event
            </span>
            <span class="float-right ">
              <b><?php echo $evt->event ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Tanggal Pelaksanaan
            </span>
            <span class="float-right ">
              <b>
                <?php 
                          $hari = date("D",strtotime($evt->tanggal_pelaksanaan));
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
                         ?>, <?php echo date("d", strtotime($evt->tanggal_pelaksanaan)) ?>

                         <?php 
                          $bln = date("F",strtotime($evt->tanggal_pelaksanaan));
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
                         <?php echo date("Y", strtotime($evt->tanggal_pelaksanaan)) ?>
              </b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Waktu Pelaksanaan
            </span>
            <span class="float-right ">
              <b><?php echo substr($evt->jam_mulai, 0,5) ?> WIB s/d <?php echo substr($evt->jam_selesai, 0,5)  ?> WIB</b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Jumlah Lapak
            </span>
            <span class="float-right ">
              <b><?php echo $evt->jumlah_lapak ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Harga Tiket
            </span>
            <span class="float-right badge badge-light">
              <b>Rp. <?php echo number_format($evt->harga,0,'.','.') ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Jenis Hadiah
            </span>
            <span class="float-right ">
              <b><?php if ($evt->jenis_hadiah == "langsung") {
                echo "Hadiah Langsung";
              }elseif($evt->jenis_hadiah == "potongan"){
                echo "Potongan Tiket";
              } ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Nominal <?php if ($evt->jenis_hadiah == "langsung") {
                echo "Hadiah";
              }elseif($evt->jenis_hadiah == "potongan"){
                echo "Potongan (Per Tiket)";
              } ?>
            </span>
            <span class="float-right ">
              <b>Rp. <?= number_format($evt->nominal,0,'.','.') ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Stok Tiket
            </span>
            <span class="float-right ">
              <b><?php echo $evt->stok ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Tanggal Mulai
            </span>
            <span class="float-right ">
              <b><?php 
                          $hari = date("D",strtotime($evt->mulai));
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
                         ?>, <?php echo date("d", strtotime($evt->mulai)) ?>

                         <?php 
                          $bln = date("F",strtotime($evt->mulai));
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
                         <?php echo date("Y", strtotime($evt->mulai)) ?></b>
            </span>
          </p>
          <p class="clearfix">
            <span class="float-left">
              Tanggal Berakhir
            </span>
            <span class="float-right ">
              <b><?php 
                          $hari = date("D",strtotime($evt->akhir));
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
                         ?>, <?php echo date("d", strtotime($evt->akhir)) ?>

                         <?php 
                          $bln = date("F",strtotime($evt->akhir));
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
                         <?php echo date("Y", strtotime($evt->akhir)) ?></b>
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
<?php foreach ($event as $evt) : ?>
<div class="modal fade" id="hapusDataEvent<?php echo $evt->id_event ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_event/hapus_event') ?>" method="post">
        <input hidden value="<?php echo $evt->id_event ?>" type="text" name="id_event">
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

<script type="text/javascript">
//tanggal pelaksanaan minimal hari ini tambah
function minimal_plk(){
  var today = new Date();
  var dd = today.getDate()+3;
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();

  if (dd < 10) {
     dd = '0' + dd;
  }

  if (mm < 10) {
     mm = '0' + mm;
  } 
      
  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("tgl_plk").setAttribute("min", today);
}

//tanggal pelaksanaan minimal hari ini edit
function minimal_plk2(){
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();

  if (dd < 10) {
     dd = '0' + dd;
  }

  if (mm < 10) {
     mm = '0' + mm;
  } 
      
  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("tgl_plk2").setAttribute("min", today);
}
  
//mengubah inputan harga ke format rupiah
function erpe(){
  var rupiah = document.getElementById('rupiah');
  rupiah.addEventListener('keyup', function(e){
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split       = number_string.split(','),
    sisa        = split[0].length % 3,
    rupiah        = split[0].substr(0, sisa),
    ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
}

//mengubah inputan harga ke format rupiah
function erpe2(){
  var rupiah2 = document.getElementById('rupiah2');
  rupiah2.addEventListener('keyup', function(e){
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah2.value = formatRupiah2(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah */
  function formatRupiah2(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split       = number_string.split(','),
    sisa        = split[0].length % 3,
    rupiah2        = split[0].substr(0, sisa),
    ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah2 += separator + ribuan.join('.');
    }

    rupiah2 = split[1] != undefined ? rupiah2 + ',' + split[1] : rupiah2;
    return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
  }
}

//mengubah inputan harga ke format rupiah
function erpe3(){
  var rupiah3 = document.getElementById('rupiah3');
  rupiah3.addEventListener('keyup', function(e){
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah3.value = formatRupiah2(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah */
  function formatRupiah2(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split       = number_string.split(','),
    sisa        = split[0].length % 3,
    rupiah3        = split[0].substr(0, sisa),
    ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah3 += separator + ribuan.join('.');
    }

    rupiah3 = split[1] != undefined ? rupiah3 + ',' + split[1] : rupiah3;
    return prefix == undefined ? rupiah3 : (rupiah3 ? 'Rp. ' + rupiah3 : '');
  }
}

//fungsi set date tambah
function minimal_mul(){
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();
   if(dd<10){
          dd='0'+dd
      } 
      if(mm<10){
          mm='0'+mm
      } 

  today = yyyy+'-'+mm+'-'+dd;
  document.getElementById('tgl_ml').setAttribute("min", today);
  document.getElementById("tgl_ml").value;
 
  var ambiltgl = document.getElementById('tgl_ml').value;  
  var tod = new Date(ambiltgl);
  var d = tod.getDate()+1;
  var m = tod.getMonth()+1; //January is 0!
  var y = tod.getFullYear();
   if(d<10){
          d='0'+d
      } 
      if(m<10){
          m='0'+m
      } 

  tod = y+'-'+m+'-'+d;
  document.getElementById("tgl_ak").setAttribute("min", tod);

  yok = document.getElementById("tgl_plk").value;
  var tods = new Date(yok);
  var dx = tods.getDate()-1;
  var mx = tods.getMonth()+1; //January is 0!
  var yx = tods.getFullYear();
   if(dx<10){
          dx='0'+dx
      } 
      if(mx<10){
          mx='0'+mx
      } 

  tods = yx+'-'+mx+'-'+dx;
  document.getElementById("tgl_ak").setAttribute("max", tods);

  kuy = document.getElementById("tgl_plk").value;
  var dot = new Date(kuy);
  var ds = dot.getDate()-2;
  var ms = dot.getMonth()+1; //January is 0!
  var ys = dot.getFullYear();
   if(ds<10){
          ds='0'+ds
      } 
      if(ms<10){
          ms='0'+ms
      } 

  dot = ys+'-'+ms+'-'+ds;
  document.getElementById("tgl_ml").setAttribute("max", dot);
}

//fungsi set date edit
function slolo(){
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();
   if(dd<10){
          dd='0'+dd
      } 
      if(mm<10){
          mm='0'+mm
      } 

  today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("edtml").value;
  document.getElementById('edtml').setAttribute("min", today);
 
  var ambiltgl = document.getElementById('edtml').value;  
  var tod = new Date(ambiltgl);
  var d = tod.getDate()+1;
  var m = tod.getMonth()+1; //January is 0!
  var y = tod.getFullYear();
   if(d<10){
          d='0'+d
      } 
      if(m<10){
          m='0'+m
      } 

  tod = y+'-'+m+'-'+d;
  document.getElementById("edtak").setAttribute("min", tod);
}
    
</script>