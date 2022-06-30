<!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0"><a href="<?php echo base_url('tiket') ?>">Tiket</a></h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Pilih
                                    </li>
                                    <li class="breadcrumb-item active">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="content-body">
                <section id="modal-examples">
                    <div class="row">
                        <!-- add new card  -->
                        <?php foreach ($tiket as $tk) : 
                        if (strtotime($tk->mulai) <= time() AND strtotime($tk->akhir) >= time()) :?>

                        <?php if ($beli != null): ?>
                        <?php foreach ($beli as $bl) : 
                          $sub[] = $bl->id_event;?>
                        <?php endforeach; ?>  
                        <?php if (in_array($tk->id_event, $sub)) {?>


                        <?php }else{ ?>
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-body text-center">
                                  <div class="d-flex justify-content-between align-items-start">
                                    <span class="badge badge-light-primary">
                                      <?php echo $tk->sistem ?>
                                    </span> 
                                    <span class="badge rounded-pill badge-light-success">Stok : <?php echo $tk->stok ?></span>
                                  </div>
                                   <!-- <i class="fa-solid fa-ticket font-large-2 mb-1 mt-1"></i> -->
                                   <i class="far fa-credit-card font-large-2 mb-1 mt-1"></i>
                                    <h4 class="card-text text-primary"><b><?php echo $tk->event ?></b></h4>
                                    <h6 class="badge badge-light-dark"> 
                                      
                                        <?php 
                                        $hari = date("D",strtotime($tk->tanggal_pelaksanaan));
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
                                       ?>, <?php echo date("d", strtotime($tk->tanggal_pelaksanaan)) ?>

                                       <?php 
                                        $bln = date("F",strtotime($tk->tanggal_pelaksanaan));
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
                                       <?php echo date("Y", strtotime($tk->tanggal_pelaksanaan)) ?>
                                     
                                    </h6><br>
                                    <h6 class="badge bg-light-warning">Rp. <?php echo number_format($tk->harga,0,'.','.') ?></h6><br>

                                    <!-- modal trigger button -->
                                   
                                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createAppModal<?php echo $tk->id_event ?>">
                                            Lihat Detail <i data-feather='chevron-right'></i>
                                        </button>
                                  
                                
                                </div>
                            </div>
                        </div>
                      <?php } ?>
                    <?php else : ?>
                      <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-body text-center">
                                  <div class="d-flex justify-content-between align-items-start">
                                    <span class="badge badge-light-primary">
                                      <?php echo $tk->sistem ?>
                                    </span> 
                                    <span class="badge rounded-pill badge-light-success">Stok : <?php echo $tk->stok ?></span>
                                  </div>
                                   <!-- <i class="fa-solid fa-ticket font-large-2 mb-1 mt-1"></i> -->
                                   <i class="far fa-credit-card font-large-2 mb-1 mt-1"></i>
                                    <h4 class="card-text text-primary"><b><?php echo $tk->event ?></b></h4>
                                    <h6 class="badge bg-light-warning"> 
                                      
                                        <?php 
                                        $hari = date("D",strtotime($tk->tanggal_pelaksanaan));
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
                                       ?>, <?php echo date("d", strtotime($tk->tanggal_pelaksanaan)) ?>

                                       <?php 
                                        $bln = date("F",strtotime($tk->tanggal_pelaksanaan));
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
                                       <?php echo date("Y", strtotime($tk->tanggal_pelaksanaan)) ?>
                                     
                                    </h6><br>

                                    <!-- modal trigger button -->
                                   
                                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createAppModal<?php echo $tk->id_event ?>">
                                            Lihat Detail <i data-feather='chevron-right'></i>
                                        </button>
                                  
                                
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php  endif; ?>
                        <!-- / add new card  -->
                        
                        <?php endforeach; ?>

                    </div>
                </section>
              </div>
          

                <!-- create app modal -->
                <?php foreach ($tiket as $tk) : ?>
                <div class="modal fade" id="createAppModal<?php echo $tk->id_event ?>" tabindex="-1" aria-labelledby="createAppTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-3 px-sm-3">
                                <h1 class="text-center mb-3" id="createAppTitle"><b><?php echo $tk->event ?></b></h1>
                               <!--  <h5 class="mt-2">Detail Event</h5> -->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-0 px-0">
                                            <label for="createAppCrm" class="d-flex cursor-pointer">
                                                <span class="avatar avatar-tag bg-light-info me-1">
                                                    <i data-feather="dollar-sign" class="font-medium-5"></i>
                                                </span>
                                                <span class="d-flex align-items-center justify-content-between flex-grow-1">
                                                    <span class="me-1">
                                                        <span>Harga Tiket</span>
                                                        <span class="h5 d-block fw-bolder">
                                                          Rp. <?php echo number_format($tk->harga,0,'.','.') ?>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <label for="createAppEcommerce" class="d-flex cursor-pointer">
                                                <span class="avatar avatar-tag bg-light-success me-1">
                                                    <i data-feather="calendar" class="font-medium-5"></i>
                                                </span>
                                                <span class="d-flex align-items-center justify-content-between flex-grow-1">
                                                    <span class="me-1">
                                                      <span>Jadwal Event</span>
                                                        <span class="h5 d-block fw-bolder">
                                                          <?php 
                                                          $hari = date("D",strtotime($tk->tanggal_pelaksanaan));
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
                                                         ?>, <?php echo date("d", strtotime($tk->tanggal_pelaksanaan)) ?>

                                                         <?php 
                                                          $bln = date("F",strtotime($tk->tanggal_pelaksanaan));
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
                                                         <?php echo date("Y", strtotime($tk->tanggal_pelaksanaan)) ?>
                                                        </span>
                                                      </span>
                                                    
                                                </span>
                                            </label>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <label for="createAppOnlineLearning" class="d-flex cursor-pointer">
                                                <span class="avatar avatar-tag bg-light-danger me-1">
                                                    <i class="fa fa-fish font-medium-5"></i> 
                                                </span>

                                                <span class="d-flex align-items-center justify-content-between flex-grow-1">
                                                    <span class="me-1">
                                                        <span>Total Ikan</span>
                                                        <span class="h5 d-block fw-bolder"><?php echo $tk->berat_ikan ?> Kg (<?php if ($tk->jenis_ikan == "patin") {
                                                          echo "Ikan Patin";
                                                        }elseif($tk->jenis_ikan == "nila"){
                                                          echo "Ikan Nila";
                                                        }elseif($tk->jenis_ikan == "ikan_mas"){
                                                          echo "Ikan Mas";
                                                        } ?>)</span>
                                                    </span>
                                                    
                                                </span>
                                            </label>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <label for="createAppOnlineLearning" class="d-flex cursor-pointer">
                                                <span class="avatar avatar-tag bg-light-warning me-1">
                                                    <i class="fa fa-clock font-medium-5"></i> 
                                                </span>

                                                <span class="d-flex align-items-center justify-content-between flex-grow-1">
                                                    <span class="me-1">
                                                        <span>Waktu Event</span>
                                                        <span class="h5 d-block fw-bolder"><?php echo substr($tk->jam_mulai, 0, 5)?> WIB s/d <?php echo substr($tk->jam_selesai, 0, 5)?> WIB</span>
                                                    </span>
                                                    
                                                </span>
                                            </label>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <label for="createAppOnlineLearning" class="d-flex cursor-pointer">
                                                <span class="avatar avatar-tag bg-light-primary me-1">
                                                    <i class="fa fa-user-group font-medium-5"></i>
                                                </span>

                                                <span class="d-flex align-items-center justify-content-between flex-grow-1">
                                                    <span class="me-1">
                                                        <span>Jumlah Lapak</span>
                                                        <span class="h5 d-block fw-bolder"><?php echo $tk->jumlah_lapak ?></span>
                                                    </span>
                                                    
                                                </span>
                                            </label>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <label for="createAppOnlineLearning" class="d-flex cursor-pointer">
                                                <span class="avatar avatar-tag bg-light-primary me-1">
                                                    <i class="fas fa-file font-medium-5"></i>
                                                </span>

                                                <span class="d-flex align-items-center justify-content-between flex-grow-1">
                                                    <span class="me-1">
                                                        <span>
                                                          <a class="badge badge-glow bg-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="" aria-expanded="false" aria-controls="collapseExample">
                                                              Lihat Brosur
                                                          </a>
                                                        </span>
                                                        
                                                    </span>
                                                    
                                                </span>
                                            </label>
                                        </li>
                                        <div class="collapse" id="collapseExample">
                                            <div class="d-flex p-1 border">
                                                 <embed src="<?php echo base_url().'/uploads/'.$tk->file ?>" frameborder="0" width="100%" height="600px">
                                            </div>
                                        </div>
                                      </ul>
                                  </div>
                                <div class="modal-footer">
                                 
                                  <form action="<?php echo base_url(). 'tiket/pesan_tiket'; ?>" method="post">
                                    <input type="hidden" name="id_event" value="<?php echo $tk->id_event?>">
                                    <button type="submit" class="btn btn-warning">
                                      <i data-feather="shopping-cart" class="me-25"></i>
                                      <span>Pesan Tiket</span>
                                    </button> 
                                  </form>
                                   
                                </div>
                        </div>
                    </div>
                </div>
                <!-- / create app modal -->
              <?php endforeach; ?>

              </div>
        </div>
    </div>
    </div>
    <!-- END: Content-->
