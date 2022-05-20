 <!-- BEGIN: Content-->
    <div class="app-content content ">
         <?php echo $this->session->flashdata('berhasilEditProfil');  ?>  
         <?php echo $this->session->flashdata('SudahAda');  ?>  
         <?php echo $this->session->flashdata('sudahMembayar');  ?>  
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <!-- <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pesanan Saya</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Detail</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#"></a>
                                    </li>
                                    
                                </ol>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <div class="content-body col d-flex justify-content-center">
              <!-- Tabs with Icon starts -->
                          <div class="col-lg-10">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pesanan Saya</h4> 
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="belumbayar-tab" data-bs-toggle="tab" href="#belumbayar" aria-controls="home" role="tab" aria-selected="true"><i data-feather="home"></i> Belum Bayar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true"><i data-feather="home"></i> Belum Digunakan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="true"><i data-feather="tool"></i> Sedang Aktif</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="aboutIcon-tab" data-bs-toggle="tab" href="#aboutIcon" aria-controls="about" role="tab" aria-selected="true"><i data-feather="user"></i> Sudah Selesai</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="dibatalkan-tab" data-bs-toggle="tab" href="#dibatalkan" aria-controls="ss" role="tab" aria-selected="true"><i data-feather="user"></i> Dibatalkan</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                      <div class="tab-pane active" id="belumbayar" aria-labelledby="belumbayar-tab" role="tabpanel">
                                        <?php foreach ($belum_bayar as $blb) : ?>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0"><?php echo $blb->event ?></p>
                                                    <span>Pesanan belum dibayar</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bayar<?php echo $blb->id_pesanan ?>">
                                                         Bayar Sekarang
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                        <?php endforeach; ?>
                                        </div>

                                       <!-- divide -->
                                        <div class="tab-pane" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                          <?php foreach ($pesanan as $ps) : ?>
                                            <?php $tgl1 = date("Y-m-d");
                                            if (strtotime($tgl1) < strtotime($ps->tanggal_pelaksanaan) ) { ?>
                                            <div class="d-flex mt-2">
                                              <div class="d-flex justify-content-between flex-grow-1">
                                                  <div class="me-1">
                                                      <p class="fw-bolder mb-0"><?php echo $ps->event ?></p>
                                                      <span>Event belum dimulai</span>
                                                  </div>
                                                  <div class="mt-50 mt-sm-0">
                                                      <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#detailTiketSaya<?php echo $ps->id_pesanan ?>">
                                                          <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                      </button>
                                                  </div>
                                              </div>
                                            </div>
                                          <?php } ?>
                                          <?php endforeach; ?>
                                        </div>

                                         <!-- divide -->
                                        <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                        <?php foreach ($pesanan as $ps) : ?>
                                          <?php $tgl2 = date("Y-m-d");
                                          if (strtotime($ps->tanggal_pelaksanaan) == strtotime($tgl2) ) { ?>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0"><?php echo $ps->event ?></p>
                                                    <span>Event Sedang Aktif</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#detailTiketSaya<?php echo $ps->id_pesanan ?>">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <?php } ?>
                                        <?php endforeach; ?>
                                        </div>

                                        <!-- divide -->
                                        <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
                                          <?php foreach ($pesanan as $ps) : ?>
                                            <?php $tgl3 = date("Y-m-d");
                                            if (strtotime($tgl1) > strtotime($ps->tanggal_pelaksanaan) ) { ?>
                                            <div class="d-flex mt-2">
                                              <div class="d-flex justify-content-between flex-grow-1">
                                                  <div class="me-1">
                                                      <p class="fw-bolder mb-0"><?php echo $ps->event ?></p>
                                                      <span>Event telah selesai</span>
                                                  </div>
                                                  <!-- <div class="mt-50 mt-sm-0">
                                                      <button type="button" class="btn btn-icon btn-outline-secondary">
                                                          <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                      </button>
                                                  </div> -->
                                              </div>
                                            </div>
                                            <?php } ?>
                                          <?php endforeach; ?>
                                        </div>

                                        <div class="tab-pane" id="dibatalkan" aria-labelledby="dibatalkan-tab" role="tabpanel">
                                        <?php foreach ($dibatalkan as $btl) : ?>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0"><?php echo $btl->event ?></p>
                                                    <span>Pesanan dibatalkan</span>
                                                </div>
                                                <!-- <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bayar<?php echo $blb->id_pesanan ?>">
                                                         Bayar Sekarang
                                                    </button>
                                                </div> -->
                                            </div>
                                          </div>
                                        <?php endforeach; ?>
                                        </div>
                                        <!-- divide -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabs with Icon ends -->
                    </div>
               </div>
        </div>
<?php foreach ($pesanan as $ps) : ?>
  <div class="modal fade text-start" id="detailTiketSaya<?php echo $ps->id_pesanan ?>" tabindex="-1" aria-labelledby="myModalLabel17"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Tiket Saya</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <!-- Invoice -->
                        <div class="col-12">
                            <div class="card invoice-preview-card">
                                <div class="card-body pb-0">
                                    <!-- Header starts -->
                                    <div class="d-flex justify-content-between flex-md-row flex-column ">
                                        <div>
                                            <div class="logo">
                                                <img class="brand-text mb-0" src="<?php echo base_url()?>assets/img/tunggul_wulung4.png" width="230" height="50">
                                            </div>
                                            <p class="card-text mt-1 mb-0">Desa Kupuk, Kecamatan Bungkal</p>
                                            <p class="card-text mb-0">Kabupaten Ponorogo, Jawa Timur</p>
                                            <p class="card-text mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                        </div>
                                        <div class="mt-md-0 mt-0">
                                            <h4 class="invoice-title">
                                                <!-- <i>id tiket</i> -->
                                                <span class="invoice-number"> #<?php echo $ps->id_tiket ?></span>
                                            </h4>
                                            <div class="">
                                                <label class=" mb-0"><i>event</i></label>
                                                <h5 class="text-primary mb-30"><b><?php echo $ps->event ?></b></h5>
                                            </div>
                                            <div class="">
                                                <label class="invoice-date-title mb-0"><i>tanggal</i></label>
                                                <h5 class="text-primary invoice-date"><b>
                                                  <?php 
                                                  $hari = date("D",strtotime($ps->tanggal_pelaksanaan));
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
                                                 ?>, <?php echo date("d", strtotime($ps->tanggal_pelaksanaan)) ?>

                                                 <?php 
                                                  $bln = date("F",strtotime($ps->tanggal_pelaksanaan));
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
                                                 <?php echo date("Y", strtotime($ps->tanggal_pelaksanaan)) ?>
                                                </b></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Header ends -->
                                </div>

                                <hr class="invoice-spacing" />

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row ">
                                        <div class="col-xl-6 p-0">
                                          <label><i>nama</i></label>
                                          <h5><?php echo $ps->nama ?></h5>
                                          <label><i>no hp</i></label>
                                          <h5><?php echo $ps->no_hp ?></h5>
                                          <label><i>alamat</i></label>
                                          <h5><?php echo $ps->alamat ?></h5>
                                        </div>
                                        <div class="col-xl-6 p-0 ">
                                          <label><i>sistem</i></label>
                                          <h5><?php echo $ps->sistem ?></h5>
                                          <label><i>start - finish</i></label>
                                          <h5><?php echo substr($ps->jam_mulai, 0,5) ?> - <?php echo substr($ps->jam_selesai, 0,5) ?></h5>
                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <hr class="invoice-spacing" />

                                <!-- Invoice Note starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="fw-bold">Note:</span>
                                            <p class="mb-0">- 1 tiket 1 stik maksimal 2 mata kail</p>
                                            <p class="mb-0">- Ikan harus makan</p>
                                            <p class="mb-0">- Umpan bebas</p>
                                            <p class="mb-0">- Keputusan panitia mutlak</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Note ends -->
                            </div>
                        </div>
                    </div>
                </section>
              </div>  
            </div>
            <div class="modal-footer">
              <form action="<?php echo base_url(). 'pesanan_saya/download'; ?>" method="post">
                <input type="hidden" name="id_pesanan" value="<?php echo $ps->id_pesanan?>">
                <button type="submit" class="btn btn-primary" target="_blank">
                  <i data-feather="download" class="me-25"></i>
                  <span>Download</span>
                </button>
                <!-- <button type="submit" class="btn btn-primary" target="_blank">
                 Downlaod
                </button> --> 
              </form>
                <!-- <a class="btn btn-primary" href="<?php echo base_url('pesanan_saya/download') ?>" target="_blank"> Download </a> -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php foreach ($belum_bayar as $blb) : ?>
<div class="modal fade" id="bayar<?php echo $blb->id_pesanan ?>" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header bg-transparent">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <h1 class="text-center" id="addNewCardTitle">Rincian Pesanan</h1>
              <small class="text-center">Silakan lakukan pembayaran paling lambat <?php echo date("d-m-Y H:i",strtotime('+1 days',strtotime($blb->transaction_time))) ?></small>
          <div class="modal-body">
              <div class="card mb-1 mt-1">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item"><b><h5 class="text-primary"><?php echo $blb->event ?></h5></b></li>
                      <li class="list-group-item"><b>Metode Pembayaran</b> <br> <small><?php if ($blb->payment_type == 'bank_transfer') {
                        echo 'Transfer Bank ';
                      }elseif($blb->payment_type == 'echannel'){
                        echo 'E Channel ';
                      }elseif($blb->payment_type == 'qris'){
                        echo 'ShopeePay';
                      }elseif($blb->payment_type == 'gopay'){
                        echo 'Gopay';
                      }?><?php if ($blb->payment_type == 'echannel') {
                        echo "(Mandiri)";
                      }elseif($blb->bank == 'bri'){
                        echo "(BRI)";
                      }elseif($blb->bank == 'bni'){
                        echo "(BNI)";
                      }elseif($blb->bank == 'bca'){
                        echo "(BCA)";
                      } ?></small></li>
                      <?php if ($blb->va_number == '-' and $blb->bill_key != '-') { ?>
                      <li class="list-group-item"><b>Biller Code : </b><br> <?php echo $blb->biller_code ?></li>
                      <li class="list-group-item"><b>Bill Key : </b><br> <?php echo $blb->bill_key ?></li>
                    <?php }elseif($blb->qr_url != '') {?>
                     <li class="list-group-item"><b>QR Image : </b><br> <a href="<?php echo $blb->qr_url ?>" target="_blank" class="btn btn-sm btn-outline-primary">View QR</a></li>
                     <?php }else { ?>
                      <li class="list-group-item"><b>No. Rekening : </b><br> <?php echo $blb->va_number ?></li>
                      <?php } ?>
                      <li class="list-group-item"><b>Total Pembayaran : </b><br><span class="badge bg-primary">Rp.<?php echo number_format($blb->gross_amount,0,'.','.') ?></span></li>
                  </ul>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
        </div>
      </div>
  </div>
</div>
<?php endforeach; ?>
<!--/ bayar  -->
<!-- END: Content-->
<!-- Modal -->
    
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript">
  document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
    var adobeDCView = new AdobeDC.View({clientId: "d12dff32dbc74b41bbab21e8fa73a12e", divId: "adobe-dc-view"});
    adobeDCView.previewFile({
      content:{location: {url: "https://documentcloud.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf"}},
      metaData:{fileName: "Bodea Brochure.pdf"}
    }, {embedMode: "IN_LINE"});
  });
</script>
