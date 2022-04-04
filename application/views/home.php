<!--  BEGIN: Content -->
    <div class="app-content content ">
        <?php echo $this->session->flashdata('sudahMembayar');  ?>  
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center" style="background-image: url('<?php echo base_url()?>assets1/app-assets/images/banner/banner.png')">
                                <div class="card-body">
                                    <h2 class="text-primary">Kolam Pemancingan Tunggul Wulung</h2>
                                    <p class="card-text mb-2">
                                        <span class="fw-bolder">Selamat Datang </span><span>di Website Kami </span>
                                    </p>
                                    <form class="kb-search-input">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i data-feather="search"></i></span>
                                            <input type="text" class="form-control" id="searchbar" placeholder="Ask a question..." />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->

                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-header">
                          <h4 class="card-title">Profil</h4>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li>
                                      <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="<?php echo base_url()?>assets2/img/kolam.jpeg" class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>Kolam Pemancingan Tunggul Wulung</h4>
                                    <!-- <span class="card-text item-company">By <a href="#" class="company-name">ADMIN</a></span> -->
                                    
                                    <p class="card-text mt-2" style="text-align: justify;">
                                        Kolam Pemancingan Tunggul Wulung berdiri sejak tahun 2018 dengan luas area sekitar 1 hektar. Terletak di kota Ponorogo tepatnya di Desa Kupuk, Kecamatan Bungkal sebagai kolam pemancingan dan wisata. Kolam pemancingan ini dikelola oleh pihak BUMDes Kupuk dan dibangun untuk memberikan pengalaman yang memuaskan dan menyenangkan untuk para pemancing. Pemancing bisa mengikuti event-event dengan hadiah yang istimewa.
                                    </p>
                                 
                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="#" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
                                          <span class="add-to-cart">View More </span><i data-feather="chevron-right" class="me-50"></i>
                                        </a>
                                     </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                 </section>
                <!-- app e-commerce details end -->
                <!-- Custom Icons Starts -->
               
                <!-- /Custom Icons Ends -->
                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <!-- sales card -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="<?php echo base_url()?>assets1/app-assets/images/illustration/sales.svg" class="card-img-top" alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>Sales Automation</h4>
                                        <p class="text-body mt-1 mb-0">
                                            There is perhaps no better demonstration of the folly of image of our tiny world.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="<?php echo base_url()?>assets1/app-assets/images/illustration/marketing.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Marketing Automation</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="<?php echo base_url()?>assets1/app-assets/images/illustration/api.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>API Questions</h4>
                                        <p class="text-body mt-1 mb-0">every hero and coward, every creator and destroyer of civilization.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="<?php echo base_url()?>assets1/app-assets/images/illustration/personalization.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Personalization</h4>
                                        <p class="text-body mt-1 mb-0">It has been said that astronomy is a humbling and character experience.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="<?php echo base_url()?>assets1/app-assets/images/illustration/email.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Email Marketing</h4>
                                        <p class="text-body mt-1 mb-0">There is perhaps no better demonstration of the folly of human conceits.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- demand -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="<?php echo base_url()?>assets1/app-assets/images/illustration/demand.svg" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Demand Generation</h4>
                                        <p class="text-body mt-1 mb-0">Competent means we will never take anything for granted.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- no result -->
                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
    <!-- END: Content