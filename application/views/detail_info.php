 <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Info </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url("info") ?>">List</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                    </li>
                                    <li><a href="#">Detail</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached ">
            <div class="content-body">
                <!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                           <?php foreach($detailinfo as $dtinf) : ?>
                            <div class="card">
                                <!-- <img src="../../../app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Blog Detail Pic" /> -->
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $dtinf->judul ?></h4>
                                    <div class="d-flex">
                                        <div class="author-info">
                                            <small class="text-muted me-25">by</small>
                                            <small><a href="#" class="text-body"><?php echo $dtinf->created_by ?></a></small>
                                            <span class="text-muted ms-50 me-25">|</span>
                                            <small class="text-muted">
                                              <?php echo date("d", strtotime($dtinf->created_date)) ?>
                                                  <?php 
                                                    $bln = date("F",strtotime($dtinf->created_date));
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
                                                   <?php echo date("Y", strtotime($dtinf->created_date)) ?>
                                            </small>
                                        </div>
                                    </div>
                                    <p class="card-text mt-2 mb-2">
                                        <?php echo $dtinf->deskripsi ?>
                                    </p>
                                    
                                   
                                    <hr class="my-2" />
                                    <div class="d-flex align-items-center justify-content-between">
                                        
                                        <div class="dropdown blog-detail-share">
                                            <i data-feather="share-2" class="font-medium-5 text-body cursor-pointer" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="facebook" class="font-medium-3"></i>
                                                </a>
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <i data-feather="message-square" class="font-medium-3"></i>
                                                </a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                        <!--/ Blog -->
                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>
    </div>
</div>