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
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                       <i class="fas fa-money-check-alt" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Pembayaran</span>
                                        <!-- <span class="bs-stepper-subtitle">Add Social Links</span> -->
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
                                        <input type="text" readonly class="form-control" value="<?php echo $tk->subevent ?>" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-email">Harga Tiket</label>
                                        <input type="email" class="form-control" value="Rp. <?php echo $tk->harga ?>" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 form-password-toggle col-md-6">
                                        <label class="form-label" for="modern-password">Password</label>
                                        <input type="password" id="modern-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    </div>
                                    <div class="mb-1 form-password-toggle col-md-6">
                                        <label class="form-label" for="modern-confirm-password">Confirm Password</label>
                                        <input type="password" id="modern-confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
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
                                    <h5 class="mb-0">Personal Info</h5>
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
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="social-links-modern" class="content" role="tabpanel" aria-labelledby="social-links-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Social Links</h5>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-twitter">Twitter</label>
                                        <input type="text" id="modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-facebook">Facebook</label>
                                        <input type="text" id="modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-google">Google+</label>
                                        <input type="text" id="modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="mb-1 col-md-6">
                                        <label class="form-label" for="modern-linkedin">Linkedin</label>
                                        <input type="text" id="modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                    </div>
                                </div>
                                <?php foreach($tiket as $tk) : ?>
                                <form id="payment-form" action="<?=site_url()?>/tiket/finish" method="post">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <input type="hidden" name="nama" id="nama" value="<?php echo $this->session->userdata('nama') ?>">
                                    <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
                                    <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email') ?>">
                                    <input type="hidden" name="no_hp" id="no_hp" value="<?php echo $this->session->userdata('no_hp') ?>">
                                    <input type="hidden" name="alamat" id="alamat" value="<?php echo $this->session->userdata('alamat') ?>">
                                    <input type="hidden" name="subevent" id="subevent" value="<?php echo $tk->subevent ?>">
                                    <input type="hidden" name="id_subevent" id="id_subevent" value="<?php echo $tk->id_subevent ?>">
                                    <input type="hidden" name="harga" id="harga" value="<?php echo $tk->harga ?>">
                                    <input type="hidden" name="result_type" id="result-type" value="">
                                    <input type="hidden" name="result_data" id="result-data" value="">
                                    <button id="bayar" class="btn btn-success">Bayar</button>
                                </div>
                                </form>
                              <?php endforeach; ?>
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
    var id_subevent = $("#id_subevent").val();
    var email = $("#email").val(); 
    var no_hp = $("#no_hp").val(); 
    var alamat = $("#alamat").val(); 
    var subevent = $("#subevent").val();    
    var harga = $("#harga").val(); 
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('tiket/token')?>",
      data: {nama:nama,id_user:id_user,id_subevent:id_subevent,email:email,no_hp:no_hp,alamat:alamat,subevent:subevent,harga:harga},
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