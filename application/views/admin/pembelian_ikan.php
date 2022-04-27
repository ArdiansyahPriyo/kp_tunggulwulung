<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Pembelian Ikan</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataPembelian"><i class="fas fa-plus-circle"></i> Tambah Pembelian</button>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahPembelian');  ?>
              <?php echo $this->session->flashdata('pembelianSudahAda');  ?>  
              <?php echo $this->session->flashdata('berhasilEditPembelian');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusPembelian');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Event</th>
                      <th>Supplier</th>
                      <th>Jenis Ikan</th>
                      <th>Berat Ikan</th>
                      <th>Total Harga</th>
                      <th class="text-center" style="width: 5%;">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($pembelian as $pmb) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $pmb->subevent ?></td>
                      <td><?php echo $pmb->nama_supplier ?></td>
                      <td><?php if ($pmb->jenis_ikan == "patin") {
                        echo "Ikan Patin";
                      }elseif ($pmb->jenis_ikan == "nila") {
                        echo "Ikan Nila";
                      }elseif($pmb->jenis_ikan == "ikan_mas"){
                        echo "Ikan Mas";
                      } ?></td>
                      <td><?php echo $pmb->berat_ikan ?> Kg</td>
                      <td>Rp. <?php echo number_format($pmb->total_harga,0,'.','.') ?></td>
                      <td>
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataPembelian<?php echo $pmb->id_pembelianikan ?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataPembelian<?php echo $pmb->id_pembelianikan ?>"><i class="fas fa-trash"></i> Hapus</button>
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

<!-- Modal Tambah Pembelian -->
<div class="modal fade" id="tambahDataPembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pembelian/tambah_pembelian'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Event</label>
            <select class="form-control" name="id_subevent" required oninvalid="this.setCustomValidity('Data tidak boleh kosong. Isi data sub event terlebih dahulu!')" oninput="setCustomValidity('')">
              <?php foreach($list_subevent as $lsbevt) : ?>
                <option value="<?php echo $lsbevt->id_subevent ?>">
                  <?php echo $lsbevt->subevent; echo ' ( ';
                                        $hari = date("D",strtotime($lsbevt->tanggal_pelaksanaan));
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
                                       ?>, <?php echo date("d", strtotime($lsbevt->tanggal_pelaksanaan)) ?>

                                       <?php 
                                        $bln = date("F",strtotime($lsbevt->tanggal_pelaksanaan));
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
                                       <?php echo date("Y", strtotime($lsbevt->tanggal_pelaksanaan)) .' )'?> 
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Supplier</label>
            <select class="form-control" name="id_supplier" required>
              <?php foreach($list_supplier as $lspl) : ?>
                <option value="<?php echo $lspl->id_supplier ?>">
                  <?php echo $lspl->nama_supplier ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Ikan</label>
            <select class="form-control" name="jenis_ikan" required>
              <option value="patin">Patin</option>
              <option value="nila">Nila</option>
              <option value="ikan_mas">Ikan Mas</option>
              </select>
          </div>
          <div class="form-group">
            <label>Berat Ikan (Kg)</label>
            <div class="input-group">
              <input type="number" class="form-control" name="berat_ikan" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" placeholder="Kg">
            </div>
          </div>
          <div class="form-group">
            <label>Total Harga</label>
            <div class="input-group">
              <input type="text" class="form-control" id="rupiah" name="total_harga" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe()" placeholder="Rp.">
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
foreach($pembelian as $pmb) : ?>
<div class="modal fade" id="editDataPembelian<?php echo $pmb->id_pembelianikan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pembelian/edit_pembelian'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Event</label>
            <div class="input-group">
              <!-- <h5 class="form-control"><?php echo $pmb->subevent ?></h5> -->
             <input type="text" disabled class="form-control" placeholder="" name="subevent" value="<?php echo $pmb->subevent ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')"> 
              <input hidden value="<?php echo $pmb->id_pembelianikan ?>" name="id_pembelianikan">
            </div>
          </div>
          <div class="form-group">
            <label>Supplier</label>
            <select class="form-control" name="id_supplier" required>
              <option value="<?php echo $pmb->id_supplier?>" ><?php echo $pmb->nama_supplier ?></option>
              <?php foreach($list_supplier as $lspl) : ?>
                <option value="<?php echo $lspl->id_supplier ?>">
                  <?php echo $lspl->nama_supplier ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Ikan</label>
            <select class="form-control" name="jenis_ikan" required>
              <option value="<?php echo $pmb->jenis_ikan?>" ><?php if ($pmb->jenis_ikan == "patin") {
                echo "Patin";
              }elseif($pmb->jenis_ikan == "nila"){
                echo "Nila";
              }elseif($pmb->jenis_ikan == "ikan_mas"){
                echo "Ikan Mas";
              } ?></option>
              <option value="patin">Patin</option>
              <option value="nila">Nila</option>
              <option value="ikan_mas">Ikan Mas</option>
            </select>
          </div>
          <div class="form-group">
            <label>Berat Ikan (Kg)</label>
            <div class="input-group">
              <input type="number" class="form-control" name="berat_ikan" value="<?php echo $pmb->berat_ikan ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" placeholder="Kg">
            </div>
          </div>
          <div class="form-group">
            <label>Total Harga</label>
            <div class="input-group">
              <input type="text" class="form-control" id="rupiah2" name="total_harga" value="<?php echo number_format($pmb->total_harga,0,'.','.') ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')" onkeyup="erpe2()" placeholder="Rp.">
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
<?php foreach($pembelian as $pmb) : ?>
<div class="modal fade" id="hapusDataPembelian<?php echo $pmb->id_pembelianikan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_pembelian/hapus_pembelian') ?>" method="post">
        <input hidden value="<?php echo $pmb->id_pembelianikan ?>" type="text" name="id_pembelianikan">
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
    // gunakan fungsi formatrupiah2() untuk mengubah angka yang di ketik menjadi format angka
    rupiah2.value = formatRupiah2(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah2 */
  function formatRupiah2(angka2, prefix){
    var number_string = angka2.replace(/[^,\d]/g, '').toString(),
    split       = number_string.split(','),
    sisa2        = split[0].length % 3,
    rupiah2        = split[0].substr(0, sisa2),
    ribuan2        = split[0].substr(sisa2).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan2
    if(ribuan2){
      separator = sisa2 ? '.' : '';
      rupiah2 += separator + ribuan2.join('.');
    }

    rupiah2 = split[1] != undefined ? rupiah2 + ',' + split[1] : rupiah2;
    return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
  }
}


    
</script>