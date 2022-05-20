  <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>KP Tunggul Wulung</title>
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets1/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/strike5.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/pages/app-invoice.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/forms/form-wizard.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/forms/form-wizard.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/pages/modal-create-app.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/app-assets/css/pages/page-knowledge-base.css">
    <!-- END: Custom CSS-->

</head><body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">
<?php foreach ($pesanan as $ps) : ?>
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
<?php endforeach; ?>

<script src="<?php echo base_url()?>assets1/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <script src="https://kit.fontawesome.com/3b7dd5174c.js" crossorigin="anonymous"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url()?>assets1/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/modal-add-new-cc.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/page-pricing.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/modal-add-new-address.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/modal-create-app.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/modal-edit-user.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/modal-share-project.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/pages/app-invoice.js"></script>
    <script src="<?php echo base_url()?>assets1/app-assets/js/scripts/forms/form-wizard.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body></html>