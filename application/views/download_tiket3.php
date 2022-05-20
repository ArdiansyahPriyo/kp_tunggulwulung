<!DOCTYPE html>
<html><head>
  <title>Report detail</title>
  <link rel="stylesheet" type="text/css" href="">
 
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
   
  </style>
</head><body>
  <img src="assets/img/tunggul_wulung4.jpg" width="300" style="margin-left: 190px; margin-right: 190px;">
  <!-- <h2 style="text-align: center;">KOLAM PEMANCINGAN TUNGGUL WULUNG</h2><br> -->
  <label style="text-align: center; display: block; margin-top: 10px;">Ds. Kupuk, Kec. Bungkal, Kab. Ponorogo</label><br>
   
    <hr class="line-tittle" style="margin-top: 20px;">
    <?php foreach ($pesanan as $ps): ?>
   <table style="margin-top: 25px; margin-left: 150px;">
     <tr>
       <td>No Tiket</td>
       <td>:</td>
       <td><?php echo $ps->id_tiket ?></td>
     </tr>
     <tr>
       <td>Event</td>
       <td>:</td>
       <td><?php echo $ps->event ?></td>
     </tr>
     <tr>
       <td>Nama </td>
       <td>:</td>
       <td><?php echo $ps->nama ?></td>
     </tr>
     <tr>
       <td>Alamat </td>
       <td>:</td>
       <td><?php echo $ps->alamat ?></td>
     </tr>
     <tr>
       <td>No HP</td>
       <td>:</td>
       <td><?php echo $ps->no_hp ?></td>
     </tr>
     
   </table>
        
 <?php endforeach; ?>
 
	<!-- <table class="table">
		<tr>
			<th width="30" class="table">No</th>
			<th width="200" class="table">Nama Produk</th>
			<th width="60" class="table">Jumlah</th>
			<th width="100" class="table">Harga Satuan</th>
			<th width="110" class="table">Sub Total</th>
			
		</tr>

		<?php 

		$no= 1;
    $total=0;
		foreach ($pesanan as $psn): 
      $subtotal = $psn->jumlah * $psn->harga;
      $total += $subtotal; ?>

			<tr>
				<td align="center" class="table"><?php echo $no++ ?></td>
				<td class="table"><?php echo $psn->nama_barang ?></td>
        <td align="center" class="table"><?php echo $psn->jumlah ?></td>
        <td class="table">Rp. <?php echo number_format($psn->harga,0,',','.') ?></td>
        <td class="table">Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
			</tr>

		<?php endforeach; ?>

    <tr>
        <td colspan="4" align="center" class="table"><b>Total</b></td>
        <td  align="left" class="table"><b>Rp. <?php echo number_format($total,0,',','.') ?></b></td>
      </tr>
	</table> -->


</body></html>