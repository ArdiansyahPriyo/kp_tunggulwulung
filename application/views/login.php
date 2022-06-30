<div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary mt-5">
              <div class="card-header">
                <h4>LOGIN</h4>
              </div>
               <?php echo $this->session->flashdata('login_gagal') ?>
               <?php echo $this->session->flashdata('harus_login') ?>
               <?php echo $this->session->flashdata('berhasil_daftar') ?>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('login/auth') ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="pass" type="password" class="form-control" name="password" tabindex="2" required><span id="mybutton" style=" position: relative;z-index: 1;left: 90%;top: -30px;cursor: pointer;" onclick="change()"><i class="far fa-eye"></i></span>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
               <div class="mt-3 text-muted text-center">
                Belum punya akun? <a href="<?php echo base_url('register') ?>">Silahkan Daftar</a>
              </div>
              <div class="text-muted text-center">
                <a href="<?php echo base_url('') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
              </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <script type="text/javascript">
     function change()
     {
        var x = document.getElementById('pass').type;

        if (x == 'password')
        {
           document.getElementById('pass').type = 'text';
           document.getElementById('mybutton').innerHTML = '<i class="far fa-eye-slash"></i>';
        }
        else
        {
           document.getElementById('pass').type = 'password';
           document.getElementById('mybutton').innerHTML = '<i class="far fa-eye"></i>';
        }
     }
  </script>