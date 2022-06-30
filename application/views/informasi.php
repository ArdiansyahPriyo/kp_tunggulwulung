<!-- BEGIN: Content-->
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
                                    <li class="breadcrumb-item"><a href="#">List</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="content-detached content-left">
                <div class="content-body">
                    <!-- Blog List -->
                    <div class="blog-list-wrapper">
                        <!-- Blog List Items -->
                        <div class="row">
                           <?php foreach ($info as $inf) : ?>
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <a href="#">
                                        <img class="card-img-top img-fluid" src="<?php echo base_url().'/uploads/'.$inf->gambar ?>" alt="Blog Post pic" />
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading"><?php echo $inf->judul ?>
                                        </h4>
                                        <div class="d-flex">
                                            <!-- <div class="avatar me-50">
                                                <img src="<?php echo base_url('')?>/assets1/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                                            </div> -->
                                            <div class="author-info">
                                                <small class="text-muted me-25">by</small>
                                                <small><a href="#" class="text-body"><?php echo $inf->created_by ?></a></small>
                                                <span class="text-muted ms-50 me-25">|</span>
                                                <small class="text-muted">
                                                  <?php echo date("d", strtotime($inf->created_date)) ?>
                                                  <?php 
                                                    $bln = date("F",strtotime($inf->created_date));
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
                                                   <?php echo date("Y", strtotime($inf->created_date)) ?>
                                                </small>
                                            </div>
                                        </div>
                                        
                                        <p class="card-text blog-content-truncate mt-2">
                                            <?php echo substr($inf->deskripsi, 0, 100) ." . . . " ?>
                                        </p>
                                        <hr />
                                        <form action="<?php echo base_url(). 'info/read_more'; ?>" method="post">
                                          <input type="hidden" name="id_pengumuman" value="<?php echo $inf->id_pengumuman?>">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <button type="submit" class="btn btn-flat-primary">
                                                  <span>Read More</span>
                                                  <i data-feather='chevron-right' class="me-25"></i>
                                                </button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach; ?>
                        </div>
                        <!--/ Blog List Items -->
                    </div>
                    <!--/ Blog List -->

                </div>
            </div>
         
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="blog-sidebar my-2 my-lg-0">
                        <!-- Search bar -->
                        <div class="blog-search">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="Search here" />
                                <span class="input-group-text cursor-pointer">
                                    <i data-feather="search"></i>
                                </span>
                            </div>
                        </div>
                        <!--/ Search bar -->

                        <!-- Recent Posts -->
                        <div class="blog-recent-posts mt-3">
                            <h6 class="section-label">Recent Posts</h6>
                            <div class="mt-75">
                                <?php foreach ($recentinfo as $reinf) : ?>
                                <div class="d-flex mb-2">
                                    <a href="#" class="me-2">
                                        <img class="rounded" src="<?php echo base_url('')?>/assets1/app-assets/images/banner/banner-39.jpg" width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="blog-info">
                                        <h6 class="blog-recent-post-title">
                                            
                                            <label class="text-body-heading"><?php echo $reinf->judul ?></button>
                                        </h6>
                                        <div class="text-muted mb-0">
                                          <?php echo date("d", strtotime($reinf->created_date)) ?>
                                                  <?php 
                                                    $bln = date("F",strtotime($reinf->created_date));
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
                                                   <?php echo date("Y", strtotime($reinf->created_date)) ?>
                                        </div>
                                        <form action="<?php echo base_url(). 'info/read_more'; ?>" method="post">
                                          <input type="hidden" name="id_pengumuman" value="<?php echo $reinf->id_pengumuman?>">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <button type="submit" class="btn btn-sm btn-flat-primary">
                                                  <span>Read More</span>
                                                  <i data-feather='chevron-right' class="me-25"></i>
                                                </button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!--/ Recent Posts -->

                        <!-- Categories -->
                        <!-- <div class="blog-categories mt-3">
                            <h6 class="section-label">Categories</h6>
                            <div class="mt-1">
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-primary rounded">
                                            <div class="avatar-content">
                                                <i data-feather="watch" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">Fashion</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-success rounded">
                                            <div class="avatar-content">
                                                <i data-feather="shopping-cart" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">Food</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="command" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">Gaming</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">Quote</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-warning rounded">
                                            <div class="avatar-content">
                                                <i data-feather="video" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">Video</div>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!--/ Categories -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
