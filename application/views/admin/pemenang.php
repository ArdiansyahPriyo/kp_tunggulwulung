<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Pemenang</h4>
               <div class="card-header-action">
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a>
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 5%;">No</th>
                      <th>Event</th>
                      <th>Hari/Tanggal</th>
                      <th class="text-center" style="width: 20%;">Action</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($event as $evt):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $evt->event ?></td>
                      <td><?php 
                      $hari = date("D",strtotime($evt->tanggal_pelaksanaan));
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
                     ?>, <?php echo date("d", strtotime($evt->tanggal_pelaksanaan)) ?>

                     <?php 
                      $bln = date("F",strtotime($evt->tanggal_pelaksanaan));
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
                     <?php echo date("Y", strtotime($evt->tanggal_pelaksanaan)) ?></td>
                      <td class="text-center"><button class="btn btn-light btn-icon icon-left " data-toggle="modal" data-target="#lihatDataPemenang<?php echo strtotime($evt->tanggal_pelaksanaan) ?>" ><i class="fas fa-search-plus"></i> Detail</button></td>
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



<!-- detail modal -->
<?php foreach ($event as $evt) : ?>
<div class="modal fade bd-example-modal-lg" id="lihatDataPemenang<?php echo strtotime($evt->tanggal_pelaksanaan) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Data Peringkat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;">No</th>
                <th>Nomor Tiket</th>
                <th>Nama</th>
                <th class="text-center">Berat Ikan</th>
                <th class="text-center">Peringkat</th>
                <!-- <th class="text-center" style="width: 30%;">Action</th> -->
             </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              foreach($ranking as $rk) : ?>
                <?php if (strtotime($rk->created_date) == strtotime($evt->tanggal_pelaksanaan)) {  ?>
                  <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $rk->id_tiket ?></td>
                    <td><?php echo $rk->nama ?></td>
                    <td class="text-center"><?php echo $rk->berat_ikan ?></td>
                    <td class="text-center"> 
                      <div class="badge badge-success badge-shadow"><?php echo $rk->urutan ?></div>
                    </td>
                   
                    <!-- <td class="text-center"><?php echo anchor('admin/data_pemenang/hapus/' .$rk->id_ranking, '<div class="btn btn-light btn-icon icon-left text-danger"><i class="fas fa-trash"></i> Hapus</div>') ?></td> -->
                  </tr>
                <?php } ?> 
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>  
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- End modal -->

