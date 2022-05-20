<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Pengeluaran</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataPengeluaran"><i class="fas fa-plus-circle"></i> Tambah Data</button>
                  <a class="btn btn-icon icon-left btn-success mr-1" href="<?php echo base_url('admin/data_pengeluaran/report') ?>"><i class="fas fa-print"></i> Cetak</a>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahPengeluaran');  ?>  
              <?php echo $this->session->flashdata('berhasilEditPengeluaran');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusPengeluaran');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 10%;">No</th>
                      <th>Nama Pengeluaran</th>
                      <th>Tanggal</th>
                      <th>Total Pengeluaran</th>
                      <th class="text-center" style="width: 20%;" >Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($pengeluaran as $png) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $png->nama_pengeluaran ?></td>
                      <td><?php echo date("d", strtotime($png->created_date)) ?>

                        <?php 
                        $bln = date("F",strtotime($png->created_date));
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
                     <?php echo date("Y", strtotime($png->created_date)) ?></td>
                      <td>Rp.<?php echo number_format($png->harga_pengeluaran,0,'.','.') ?></td>
                      <td class="text-center">
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataPengeluaran<?php echo $png->id_pengeluaran ?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataPengeluaran<?php echo $png->id_pengeluaran ?>"><i class="fas fa-trash"></i> Hapus</button>
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

<!-- Modal Tambah Pengeluaran -->
<div class="modal fade" id="tambahDataPengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pengeluaran/tambah_pengeluaran'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nama Pengeluaran</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="nama_pengeluaran" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>

          <div class="form-group">
            <label>Total Pengeluaran</label>
            <div class="input-group">
              <input type="text" id="uang" name="harga_pengeluaran" onkeypress="return event.charCode >= 48 && event.charCode <=57" onkeyup="rph()" class="form-control" placeholder="Rp." required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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


<!--modal edit pengeluaran-->
<?php 
foreach ($pengeluaran as $png) : ?>
<div class="modal fade" id="editDataPengeluaran<?php echo $png->id_pengeluaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pengeluaran/edit_pengeluaran'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nama Pengeluaran</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="nama_pengeluaran" value="<?php echo $png->nama_pengeluaran ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
               <input type="hidden" value="<?php echo $png->id_pengeluaran ?>" type="text" name="id_pengeluaran">
            </div>
          </div>
          <div class="form-group">
            <label>Total Pengeluaran</label>
            <div class="input-group">
              <input type="text" id="duit" class="form-control currency" name="harga_pengeluaran" value="Rp. <?php echo number_format($png->harga_pengeluaran,0,'.','.') ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57"  class="form-control" placeholder="Rp." required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
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

<!-- modal hapus pengeluaran-->
<?php foreach ($pengeluaran as $png) : ?>
<div class="modal fade" id="hapusDataPengeluaran<?php echo $png->id_pengeluaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_pengeluaran/hapus_pengeluaran') ?>" method="post">
        <input hidden value="<?php echo $png->id_pengeluaran ?>" type="text" name="id_pengeluaran">
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

<script type="text/javascript">
  function rph(){
    var uang = document.getElementById('uang');
    uang.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      uang.value = formatRupiah(this.value, 'Rp. ');
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

  function idr(){
    var duit = document.getElementById('duit');
    duit.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      duit.value = formatRupiah2(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah2(angka, prefix){
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


</script>