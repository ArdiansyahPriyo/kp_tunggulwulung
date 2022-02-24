<div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary ">
              <div class="card-header">
                <h4>REGISTER</h4>
              </div>
              <?php echo $this->session->flashdata('sudah_ada')?>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register')?>">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="nama" type="text" class="form-control" name="nama" required>
                    <div class="invalid-feedback"></div>
                    
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                    <div class="invalid-feedback"></div>
                   
                  </div>
                  <div class="form-group">
                    <label for="phone">Nomor HP</label>
                    <input id="no_hp" type="number" class="form-control" name="no_hp" required>
                    <div class="invalid-feedback"></div>
                    
                  </div>
                  <div class="form-group">
                    <label for="phone">Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Desa, Kecamatan, Kota/Kabupaten" required></textarea>
                    <div class="invalid-feedback"></div>
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password1"><span id="mybutton1" style=" position: relative;z-index: 1;left: 90%;top: -30px;cursor: pointer;" onclick="view1()"><i class="far fa-eye"></i></span>
                      <?php echo form_error('password1', '<div class="text-danger small">','</div>') ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Konfirmasi Password</label>
                      <input id="password2" type="password" class="form-control" name="password2"><span id="mybutton2" style=" position: relative;z-index: 1;left: 90%;top: -30px;cursor: pointer;" onclick="view2()"><i class="far fa-eye"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" onchange="document.getElementById('register').disabled = !this.checked;">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="register" id="register" value="Send" disabled>
                      Register
                    </button>
                  </div>
                </form>
                <div class="mb-4 text-muted text-center">
                  Sudah Mendaftar? <a href="<?php echo base_url('login') ?>">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script type="text/javascript">
     function view1()
     {
        var x = document.getElementById('password1').type;

        if (x == 'password')
        {
           document.getElementById('password1').type = 'text';
           document.getElementById('mybutton1').innerHTML = '<i class="far fa-eye-slash"></i>';
        }
        else
        {
           document.getElementById('password1').type = 'password';
           document.getElementById('mybutton1').innerHTML = '<i class="far fa-eye"></i>';
        }
     }

     function view2()
     {
        var x = document.getElementById('password2').type;

        if (x == 'password')
        {
           document.getElementById('password2').type = 'text';
           document.getElementById('mybutton2').innerHTML = '<i class="far fa-eye-slash"></i>';
        }
        else
        {
           document.getElementById('password2').type = 'password';
           document.getElementById('mybutton2').innerHTML = '<i class="far fa-eye"></i>';
        }
     }
  </script>