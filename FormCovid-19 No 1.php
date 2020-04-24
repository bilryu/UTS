<!DOCTYPE html>
<html>
	<head>
		<title>UTS PemWeb 2</title>
	</head>
	<body>
		<form method="get">
		<tr>
            <td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
			<tr>
				<td>Nama Wilayah</td> 
				<td>:</td>
				<td><select name="namaWilayah">
					<option>Nama Wilayah</option>
					<option value="DKI Jakarta">DKI Jakarta</option>
					<option value="Jawa Barat">Jawa Barat</option>
					<option value="Banten">Banten</option>
					<option value="Jawa Tengah">Jawa Tengah</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Positif</td> 
				<td>:</td> 
				<td><input type="text" name="jmlPositif"></td>
			</tr>
			<tr>
				<td>Jumlah Dirawat</td> 
				<td>:</td> 
				<td><input type="text" name="jmlDirawat"></td>
			</tr>
			<tr>
				<td>Jumlah Sembuh</td> 
				<td>:</td> 
				<td><input type="text" name="jmlSembuh"></td>
			</tr>
			<tr>
				<td>Jumlah Meninggal</td> 
				<td>:</td> 
				<td><input type="text" name="jmlMeninggal"></td>
			</tr>
			<tr>
				<td>Nama Operator</td> 
				<td>:</td> 
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM Mahasiswa</td> 
				<td>:</td> 
				<td><input type="text" name="nim"></td>
			</tr>
				<td></td>
				<td></td>
				<td><input type="submit"></input></td>
		</form></table></tr><br><br><br><br>
		<style>
			table, th{
				border: 1px solid black;
			}
		</style>
		<center><h2>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>
		<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
		<?php echo $_GET['nama']; ?> 
		<?php echo $_GET['nim']; ?></h2>
		<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0"><h3>
			<tr>
				<th>Positif</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>
			</tr>
			<tr>
				<th><?php echo $_GET['jmlPositif']; ?></th>
				<th><?php echo $_GET['jmlDirawat']; ?></th>
				<th><?php echo $_GET['jmlSembuh']; ?></th>
				<th><?php echo $_GET['jmlMeninggal']; ?></th>
			</tr>
		</h3></table></center>
		<?php
			if(isset($_GET['nama']))
			{
				$namaWilayah=$_GET['namaWilayah'];
				$jmlPositif=$_GET['jmlPositif'];
				$jmlDirawat=$_GET['jmlDirawat'];
				$jmlSembuh=$_GET['jmlSembuh'];
				$jmlMeninggal=$_GET['jmlMeninggal'];
				$nama=$_GET['nama'];
				$nim=$_GET['nim'];
				$fp = fopen('data.txt', 'a');
				fwrite($fp, $namaWilayah);
				fwrite($fp, $jmlPositif);
				fwrite($fp, $jmlDirawat);
				fwrite($fp, $jmlSembuh);
				fwrite($fp, $jmlMeninggal);
				fwrite($fp, $nama);
				fwrite($fp, $nim);
				fclose($fp);
			}
		?>
	</body>
</html>