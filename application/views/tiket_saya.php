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
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pesanan Saya</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Detail</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#"></a>
                                    </li>
                                    <!-- <li class="breadcrumb-item active"> Account
                                    </li> -->
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Horizontal Wizard -->

               <!-- <section class="horizontal-wizard">

                    <div class="bs-stepper horizontal-wizard-example">

                        <div class="bs-stepper-header" role="tablist">
                            <h4 class="mb-0">Pembayaran</h4>
                        </div>
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step active" data-target="#account-details" role="tab" id="account-details-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">1</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Belum Dibayar</span>
                                        <span class="bs-stepper-subtitle">Setup Account Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">2</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Menunggu Konfirmasi</span>
                                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#address-step" role="tab" id="address-step-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Pembayaran Berhasil</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>  -->
                <!-- /Horizontal Wizard -->
            <div class="content-body">
              <!-- Tabs with Icon starts -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tiket</h4> 
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true"><i data-feather="home"></i> Belum Digunakan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false"><i data-feather="tool"></i> Sedang Aktif</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="aboutIcon-tab" data-bs-toggle="tab" href="#aboutIcon" aria-controls="about" role="tab" aria-selected="false"><i data-feather="user"></i> Sudah Selesai</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">

                                       <!-- divide -->
                                        <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                          <?php foreach ($pesanan as $ps) : ?>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0"><?php echo $ps->subevent ?></p>
                                                    <span>Total pesanan Rp.<?php echo number_format($ps->harga,0,'.','.') ?></span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#detailTiketSaya<?php echo $ps->id_pesanan ?>">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                        <?php endforeach; ?>
                                        </div>
                                        

                                        <!-- divide -->
                                        <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                            <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event B1</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event B2</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event B3</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event B4</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- divide -->
                                        <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
                                            <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event C1</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event C2</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event C3</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="d-flex mt-2">
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Event C4</p>
                                                    <span>Not Connected</span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="eye" class="font-medium-3"></i> Tiket
                                                    </button>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- divide -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabs with Icon ends -->
                    </div>
               
                <!-- Basic Tabs end -->
              <!-- <div class="col-md-6 col-12">
                  <div class="card">
                      <div class="card-header border-bottom">
                          <h4 class="card-title">Tiket Saya</h4>
                      </div>
                      <div class="card-body pt-2">
                         
                          
                          <div class="d-flex mt-2">
                              
                              <div class="d-flex justify-content-between flex-grow-1">
                                  <div class="me-1">
                                      <p class="fw-bolder mb-0">Event</p>
                                      <span>Not Connected</span>
                                  </div>
                                  <div class="mt-50 mt-sm-0">
                                      <button type="button" class="btn btn-icon btn-outline-secondary">
                                          <i data-feather="eye" class="font-medium-3"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex align-items-start mt-2">
                              
                              <div class="d-flex justify-content-between flex-grow-1">
                                  <div class="me-1">
                                      <p class="fw-bolder mb-0">Event</p>
                                      <a href="https://twitter.com/pixinvent" target="_blank">@pixinvent</a>
                                  </div>
                                  <div class="mt-50 mt-sm-0">
                                      <button type="button" class="btn btn-icon btn-outline-secondary">
                                          <i data-feather="eye" class="font-medium-3"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex mt-2">
                              
                              <div class="d-flex justify-content-between flex-grow-1">
                                  <div class="me-1">
                                      <p class="fw-bolder mb-0">Event</p>
                                      <a href="https://www.linkedin.com/company/pixinvent" target="_blank"> @pixinvent </a>
                                  </div>
                                  <div class="mt-50 mt-sm-0">
                                      <button type="button" class="btn btn-icon btn-outline-secondary">
                                          <i data-feather="eye" class="font-medium-3"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex mt-2">
                              
                              <div class="d-flex justify-content-between flex-grow-1">
                                  <div class="me-1">
                                      <p class="fw-bolder mb-0">Event</p>
                                      <span>Not Connected</span>
                                  </div>
                                  <div class="mt-50 mt-sm-0">
                                      <button type="button" class="btn btn-icon btn-outline-secondary">
                                          <i data-feather="eye" class="font-medium-3"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex mt-2">
                              
                              <div class="d-flex justify-content-between flex-grow-1">
                                  <div class="me-1">
                                      <p class="fw-bolder mb-0">Event</p>
                                      <span>Not Connected</span>
                                  </div>
                                  <div class="mt-50 mt-sm-0">
                                      <button type="button" class="btn btn-icon btn-outline-secondary">
                                          <i data-feather="eye" class="font-medium-3"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                        </div>
                  </div>
              </div> -->
               <!-- Vertical Wizard -->
               <!-- <div class="row">
                <div class="col-md-5 col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Pembayaran</h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="timeline">
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                    <h6>Belum Dibayar</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                    <h6>Menunggu Konfirmasi</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                    <h6>Pembayaran Berhasil</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
               
                <div class="col-md-6 col-12">
                  <div class="card">
                      <div class="card-header border-bottom">
                          <h4 class="card-title">Tiket Saya</h4>
                      </div>
                      <div class="card-body pt-2">
                         <iframe src="https://documentcloud.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf" width="100%" height="240px"></iframe>
                      </div>
                  </div>
              </div> -->


              <!--           
              </div>
             
                <div class="row">
                    <div class="col-12">
                    
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Tiket Saya</h4>
                            </div>
                            <div class="card-body py-2 my-25"> -->
                              <?php foreach ($user as $usr) : ?>
                              <!-- <div id="adobe-dc-view" style="width: 100%;"></div> -->
                              <!-- <iframe src="https://documentcloud.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf" width="100%" height="500px"></iframe>
                              <input type="hidden" name="foto" id="foto" value="<?php echo $usr->foto ?>">
                             <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div> -->
               <!--  end -->

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
                                                        <h5 class="text-primary mb-30"><b><?php echo $ps->subevent ?></b></h5>
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
                                                  <h5><?php echo $ps->event ?></h5>
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
                        <a class="btn btn-primary" href="#" target="_blank"> Download </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    
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
