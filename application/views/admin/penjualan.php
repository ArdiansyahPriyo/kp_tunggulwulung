<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Laporan Penjualan Tiket</h4>
               <div class="card-header-action">
                <form method="POST" action="<?php echo base_url(). 'admin/data_penjualan'; ?>">
                  <h6>Pilih Bulan</h6>
                  <div class="input-group">
                    <input type="month" class="form-control" name="bulan">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
                  <!-- <input type="month" class="form-control">
                  <a data-collapse="#event-collapse" class="btn btn-icon btn-secondary" href="#"><i class="fas fa-minus"></i></a> -->
                </div>
            </div>
            <div class="collapse show" id="event-collapse">
            <div class="card-body">
              <?php echo $this->session->flashdata('berhasilTambahSistem');  ?>  
              <?php echo $this->session->flashdata('berhasilEditSistem');  ?> 
              <?php echo $this->session->flashdata('berhasilHapusSistem');  ?> 
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th style="width: 10%;">No</th>
                      <th>Bulan</th>
                      <th class="text-center">Total Penjualan Tiket</th>
                      
                   </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1;
                    foreach($penjualan as $pnj) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <th><?php if ($pnj->total_penjualan==null) {
                        echo "-";
                      }else{
 
                        $bln = date("F",strtotime($pnj->transaction_time));
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
                        };
                         echo date(" Y", strtotime($pnj->transaction_time)); }?></th>
                      <td class="text-center">Rp. <?php echo number_format($pnj->total_penjualan,0,'.','.') ?></td>
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

