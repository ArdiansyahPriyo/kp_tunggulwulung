 <!-- BEGIN: Content-->
    <div class="app-content content ">
         <?php echo $this->session->flashdata('berhasilEditProfil');  ?>  
         <?php echo $this->session->flashdata('SudahAda');  ?>  
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Profil</h2>
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
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                    <!-- profile -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Profil Saya</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <!-- header section -->
                                <?php foreach ($user as $usr) : ?>
                                <div class="d-flex">

                                    <a href="#" class="me-25">
                                        <img src="<?php echo base_url().'/uploads/'.$usr->foto ?>" alt="profile image" height="100" width="100" />
                                    </a>
                                  <?php endforeach; ?>

                                    <!-- upload and reset button -->
                                    <?php foreach ($user as $usr) : ?>
                                    <form action="<?php echo base_url(). 'profil/edit_profil'; ?>" method="post" enctype="multipart/form-data">
                                    <div class="d-flex  mt-75 ms-1">

                                        <div>
                                            <span class="h3 d-block"><b><?php echo $usr->nama ?></b></span>
                                            <!-- <span class="d-block"><?php echo $this->session->userdata('email') ?></span> -->
                                            <label for="account-upload" class="btn btn-sm btn-outline-secondary mb-75 me-75"><i class="fas fa-pencil-alt"></i> Pilih Gambar</label>
                                            <input type="file" id="account-upload" name="foto" hidden accept="image/*"/>
                                            <small class="d-block">Format Gambar (JPEG/PNG)</label>
                                            <!-- <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75"><i class="fas fa-pencil-alt"></i> Edit Profil</button> -->
                                          </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                               
                                <!--/ header section -->

                                <!-- form -->
                               
                                    <div class="row mt-1">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountFirstName">Nama</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="nama"  value="<?php echo $usr->nama ?>" data-msg="Please enter first name" required/>
                                            <input type="hidden" name="id_user" value="<?php echo $usr->id_user ?>">
                                            <input type="hidden" name="email2" value="<?php echo $usr->email ?>">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="<?php echo $usr->email ?>" required/>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountPhoneNumber">Nomor HP/WA</label>
                                            <input type="number" class="form-control account-number-mask" id="accountPhoneNumber" name="no_hp"  value="<?php echo $usr->no_hp ?>" required/>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountAddress">Alamat</label>
                                            <input type="text" class="form-control" id="accountAddress" name="alamat" value="<?php echo $usr->alamat ?>" required/>
                                        </div> 
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                                <!--/ form -->
                            </div>
                        </div>

                        <!-- deactivate account  -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Hapus Akun</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <div class="alert alert-warning">
                                    <h4 class="alert-heading">Apakah anda yakin akan menghapus akun?</h4>
                                    <div class="alert-body fw-normal">
                                        Akun yang telah dihapus tidak bisa kembali.
                                    </div>
                                </div>

                                <form action="<?php echo base_url(). 'profil/nonaktifkan_akun'; ?>" method="post" >
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" data-msg="Please confirm you want to delete account" onchange="document.getElementById('nonaktif').disabled = !this.checked;"/>
                                        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                        <label class="form-check-label font-small-3" for="accountActivation">
                                            I confirm my account deactivation
                                        </label>
                                    </div>
                                    <div>
                                        <button type="submit" id="nonaktif" class="btn btn-danger deactivate-account mt-1" disabled>Nonaktifkan Akun</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!--/ profile -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
