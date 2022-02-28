<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Panitia</h4>

                <div class="card-header-action">
                  <!-- <button class="btn btn-icon icon-left btn-primary mr-1" data-toggle="modal" data-target="#tambahDataEvent"><i class="fas fa-plus-circle"></i> Tambah Event</button> -->
                  <a href="<?php echo base_url('admin/data_panitia/') ?>"><div class="btn btn-icon icon-left btn-warning mr-1"><i class="fas fa-arrow-left"></i> Kembali</div></a>
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <h6 class="ml-4">Sub Event : <?php echo $subevent->subevent ?></h6>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilHapusPanitia');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 10%;">No</th>
                      <th>Nama</th>
                      <th class="text-center" style="width: 20%;" >Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($nama_panitia as $nmpnt) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $nmpnt->nama ?></td>
                      <td class="text-center"><button class="btn btn-light btn-icon icon-left text-danger " data-toggle="modal" data-target="#hapusDataPanitia<?php echo $nmpnt->id_user ?>"><i class="fas fa-trash"></i> Hapus</button></td>
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

<!-- modal hapus event-->
<?php foreach ($nama_panitia as $nmpnt) : ?>
<div class="modal fade" id="hapusDataPanitia<?php echo $nmpnt->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/data_panitia/hapus_panitia') ?>" method="post">
        <input hidden value="<?php echo $nmpnt->id_panitia ?>" type="text" name="id_panitia">
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