<!DOCTYPE html>
<html><head>
</head><body>
	<?php foreach ($pesanan as $ps) : ?>
		<h2 style="text-align: center;">K.P TUNGGUL WULUNG</h2><br>
		<label style="text-align: center; display: block;">Ds. Kupuk, Kec. Bungkal, Kab. Ponorogo</label>

		<table style="margin-top: 30px; margin-left: 20px;">
			<tr>
				<td >No Tiket</td>
				<td> : </td>
				<td><?php echo $ps->id_tiket ?></td>
			</tr>
			<tr>
				<td>Event</td>
				<td> : </td>
				<td><?php echo $ps->event ?></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td> : </td>
				<td><?php echo $ps->tanggal_pelaksanaan ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><?php echo $ps->nama ?></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td> : </td>
				<td><?php echo $ps->no_hp ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><?php echo $ps->alamat ?></td>
			</tr>
		</table>
	<?php endforeach ; ?>
</body></html>

