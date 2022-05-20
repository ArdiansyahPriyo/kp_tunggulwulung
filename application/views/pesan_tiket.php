<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
           <div class="content-body">
                <!-- Modern Horizontal Wizard -->
                <div class="container">
                
                </div>
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-modern" role="tab" id="account-details-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i class="fa-solid fa-ticket" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Data Tiket</span>
                                       <!--  <span class="bs-stepper-subtitle">Setup Account Details</span> -->
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i class="fa fa-user" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Data Pemesan</span>
                                        <!-- <span class="bs-stepper-subtitle">Add Personal Info</span> -->
                                    </span>
                                </button>
                            </div>
                            
                        </div>

                        <?php foreach($tiket as $tk) : ?>
                            
                        <div class="bs-stepper-content">
                            <div id="account-details-modern" class="content" role="tabpanel" aria-labelledby="account-details-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Data Tiket</h5>
                                    <!-- <small class="text-muted">Enter Your Account Details.</small> -->
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-username">Event</label>
                                        <input type="text" readonly class="form-control" value="<?php echo $tk->event ?>" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-email">Harga Tiket</label>
                                        <input type="email" class="form-control" value="Rp. <?php echo $tk->harga ?>" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 form-password-toggle col-md-6">
                                        <label class="form-label" for="modern-password">Pelaksanaan Event</label>
                                        <input type="text" class="form-control" readonly value="<?php $hari = date("D",strtotime($tk->tanggal_pelaksanaan));
                                                          if ($hari == "Sun") {echo "Minggu" ;
                                                          }elseif ($hari == "Mon") {echo "Senin" ;
                                                          }elseif ($hari == "Tue") {echo "Selasa" ;
                                                          }elseif ($hari == "Wed") {echo "Rabu" ;
                                                          }elseif ($hari == "Thu") {echo "Kamis" ;
                                                          }elseif ($hari == "Fri") {echo "Jumat" ;
                                                          }elseif ($hari == "Sat") {echo "Sabtu" ;
                                                          }else{echo "";
                                                          }
                                                         ?>, <?php echo date("d", strtotime( $tk->tanggal_pelaksanaan)) ?> <?php 
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
                                                         ?> <?php echo date("Y", strtotime($tk->tanggal_pelaksanaan)) ?>" />
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="personal-info-modern" class="content" role="tabpanel" aria-labelledby="personal-info-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Data Pemesan</h5>
                                    <!-- <small>Enter Your Personal Info.</small> -->
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-first-name">Nama</label>
                                        <input type="text" class="form-control" placeholder="John" value="<?php echo $this->session->userdata('nama') ?>" readonly />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-last-name">Email</label>
                                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('email') ?>" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="mb-1 col-md-6">
                                      <label class="form-label" for="modern-last-name">No HP</label>
                                      <input type="text" class="form-control" value="<?php echo $this->session->userdata('no_hp') ?>" readonly />
                                  </div>
                                  <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-last-name">Alamat</label>
                                        <input type="text" class="form-control" value="<?php echo $this->session->userdata('alamat') ?>" readonly />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <?php foreach($tiket as $tk) : ?>
                                    <form id="payment-form" action="<?=site_url()?>tiket/finish" method="post">
                                        <input type="hidden" name="nama" id="nama" value="<?php echo $this->session->userdata('nama') ?>">
                                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                        <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email') ?>">
                                        <input type="hidden" name="no_hp" id="no_hp" value="<?php echo $this->session->userdata('no_hp') ?>">
                                        <input type="hidden" name="alamat" id="alamat" value="<?php echo $this->session->userdata('alamat') ?>">
                                        <input type="hidden" name="event" id="event" value="<?php echo $tk->event ?>">
                                        <input type="hidden" name="id_event" id="id_event" value="<?php echo $tk->id_event ?>">
                                        <input type="hidden" name="harga" id="harga" value="<?php echo $tk->harga ?>">
                                        <input type="hidden" name="result_type" id="result-type" value="">
                                        <input type="hidden" name="result_data" id="result-data" value="">
                                        <button id="bayar" class="btn btn-success">Bayar</button>
                                    </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            
                        </div>
                      <?php endforeach;?>
                    </div>
                </section>
                <!-- /Modern Horizontal Wizard -->
            </div>
          </div>
        </div>

                <!-- /Horizontal Wizard -->
    <script type="text/javascript">
  
    $('#bayar').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");

    var nama = $("#nama").val();
    var id_user = $("#id_user").val();
    var id_event = $("#id_event").val();
    var email = $("#email").val(); 
    var no_hp = $("#no_hp").val(); 
    var alamat = $("#alamat").val(); 
    var event = $("#event").val();    
    var harga = $("#harga").val(); 
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('tiket/token')?>",
      data: {nama:nama,id_user:id_user,id_event:id_event,email:email,no_hp:no_hp,alamat:alamat,event:event,harga:harga},
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>