<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data User</h4>
               <div class="card-header-action">
                  <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataUser"><i class="fas fa-plus-circle"></i> Tambah User</button>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahUser');  ?>  
              <?php echo $this->session->flashdata('berhasilEditUser');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusUser');  ?> 
              <?php echo $this->session->flashdata('sudahAda');  ?>  
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Nama User</th>
                      <th>Email</th>
                      <th>Nomor HP</th>
                      <th>Alamat</th>
                      <th>Password</th>
                      <th>Hak Akses</th>
                     <!--  <th style="width: 6%;">Actionss</th> -->
                      <th class="text-center" style="width: 6%;">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($user as $usr) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $usr->nama ?></td>
                      <td><?php echo $usr->email ?></td>
                      <td><?php echo $usr->no_hp ?></td>
                      <td><?php echo $usr->alamat ?></td>
                      <td><?php echo substr($usr->password, 25)?>. . .</td>
                      <td style="text-transform: capitalize;"><?php echo $usr->hak_akses ?></td>
                      <!-- <td><a href="#" class="btn btn-primary">Detail</a></td> -->
                      <td>
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <button class="btn btn-icon icon-left btn-light dropdown-item" data-toggle="modal" data-target="#editDataUser<?php echo $usr->id_user ?>"><i class="far fa-edit"></i> Edit</button>
                            <button class="btn btn-icon icon-left btn-light dropdown-item text-danger" data-toggle="modal" data-target="#hapusDataUser<?php echo $usr->id_user ?>"><i class="fas fa-trash"></i> Hapus</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
     </div>
  </section>
  <div class="settingSidebar">
    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="settingSidebar-body ps-container ps-theme-default">
      <div class=" fade show active">
        <div class="setting-panel-header">Setting Panel
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Select Layout</h6>
          <div class="selectgroup layout-color w-50">
            <label class="selectgroup-item">
              <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
              <span class="selectgroup-button">Light</span>
            </label>
            <label class="selectgroup-item">
              <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
              <span class="selectgroup-button">Dark</span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Sidebar Color</h6>
          <div class="selectgroup selectgroup-pills sidebar-color">
            <label class="selectgroup-item">
              <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
            </label>
            <label class="selectgroup-item">
              <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <h6 class="font-medium m-b-10">Color Theme</h6>
          <div class="theme-setting-options">
            <ul class="choose-theme list-unstyled mb-0">
              <li title="white" class="active">
                <div class="white"></div>
              </li>
              <li title="cyan">
                <div class="cyan"></div>
              </li>
              <li title="black">
                <div class="black"></div>
              </li>
              <li title="purple">
                <div class="purple"></div>
              </li>
              <li title="orange">
                <div class="orange"></div>
              </li>
              <li title="green">
                <div class="green"></div>
              </li>
              <li title="red">
                <div class="red"></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <div class="theme-setting-options">
            <label class="m-b-0">
              <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="mini_sidebar_setting">
              <span class="custom-switch-indicator"></span>
              <span class="control-label p-l-10">Mini Sidebar</span>
            </label>
          </div>
        </div>
        <div class="p-15 border-bottom">
          <div class="theme-setting-options">
            <label class="m-b-0">
              <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="sticky_header_setting">
              <span class="custom-switch-indicator"></span>
              <span class="control-label p-l-10">Sticky Header</span>
            </label>
          </div>
        </div>
        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
          <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
            <i class="fas fa-undo"></i> Restore Default
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--modal tambah data user-->
<div class="modal fade" id="tambahDataUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_user/tambah_user'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nama</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="nama" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
              
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="" name="email" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Nomor HP</label>
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="no_hp" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <div class="input-group">
              <textarea class="form-control" name="alamat" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
             <!--  <input type="password" id="pass" class="form-control" tabindex="2" name="password" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')"><span id="mybutton" style=" position: relative;z-index: 1;left: 90%;top: -30px;cursor: pointer;" onclick="change()"><i class="far fa-eye"></i></span> -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="mybutton" onclick="change()">
                    <i class="far fa-eye"></i>
                  </div>
                </div>
                <input type="password" id="pass" class="form-control" name="password" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Hak Akses</label>
            <select class="form-control" name="hak_akses" required>
              
                <option value="pemancing">Pemancing</option>
                <option value="panitia">Panitia</option>
             
            </select>
          </div>
       </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- akhir modal -->

<!--modal edit user-->
<?php 
foreach ($user as $usr) : ?>
<div class="modal fade" id="editDataUser<?php echo $usr->id_user?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_user/edit_user'; ?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Nama</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="nama" value="<?php echo $usr->nama ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
              <input type="hidden" value="<?php echo $usr->id_user ?>" type="text" name="id_user">
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $usr->email ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Nomor HP/WA</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="no_hp" value="<?php echo $usr->no_hp ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <div class="input-group">
              <textarea class="form-control" name="alamat" required><?php echo $usr->alamat ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <input type="password" class="form-control" placeholder="" name="password" value="<?php echo $usr->password ?>" required oninvalid="this.setCustomValidity('Data wajib diisi!')" oninput="setCustomValidity('')">
               <input type="hidden" value="<?php echo $usr->password ?>" type="text" name="password2">
            </div>
          </div>
          <div class="form-group">
            <label>Hak Akses</label>
            <select class="form-control" name="hak_akses" required>
                <option ><?php echo $usr->hak_akses ?></option>
                <?php if ($usr->hak_akses == "admin"): ?>
                <option disabled value="admin">admin</option>
              <?php elseif($usr->hak_akses == "panitia"): ?>
                <option value="admin">admin</option>
              <?php else:?>
                <option disabled value="pemancing">pemancing</option>
                <?php endif;?>
            </select>
          </div>
       </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- Akhir modal -->

<!-- modal hapus user-->
<?php foreach ($user as $usr) : ?>
<div class="modal fade" id="hapusDataUser<?php echo $usr->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_user/hapus_user') ?>" method="post">
        <input hidden value="<?php echo $usr->id_user ?>" type="text" name="id_user">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini ?
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-primary">Ya</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

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