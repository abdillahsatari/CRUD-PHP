<?php 
	//Import File Koneksi Database
	require_once('server.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM tabel_mahasiswa";

	//mendapatkan hasil
	$r= mysqli_query($con,$sql);
	//Membuat Array Kosong 
	$result = array();
?>
<html>
	<head>
		
	</head>
	<body>
		<h2><p align="center">TAMBAH DATA</p></h2>
		<form method="post" action="aksi.php">
		<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
		  <!--DWLayoutTable-->
		  <tr>
		    <td width="50" height="20"> </td>
		    <td width="50"> </td>
		    <td width="50"> </td>
		  </tr>
		  <tr>
		    <td height="27" align="left" valign="middle">NIM</td>
		    <td align="center" valign="top">:</td>
		    <td valign="middle"><label>
		      <input name="id" type="text" size="50">
		    </label></td>
		  </tr>
		  <tr>
		    <td height="27" align="left" valign="middle">Nama</td>
		    <td align="center" valign="top">:</td>
		    <td valign="middle"><label>
		      <input type="text" name="nama" size="50">
		    </label></td>
		  </tr>
		  <tr>
		    <td height="27" align="left" valign="middle">Alamat</td>
		    <td align="center" valign="top">:</td>
		    <td valign="middle"><label>
		      <input name="alamat" type="text" size="50">
		    </label></td>
		  </tr>
		  <tr>
		    <td height="27" align="left" valign="middle">Jenis Kelamin</td>
		    <td align="center" valign="top">:</td>
		    <td valign="middle"><label>
		      <select name="jenis_kelamin">
			  	<option selected="selected">--Pilih--</option>
				<option>Laki-laki</option>
				<option>Perempuan</option>
		      </select>
		    </label></td>
		  </tr>
		  <tr>
		    <td height="42"> </td>
		    <td> </td>
		    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
		  </tr>

		</table>
		</form>
		<h2 align="center">Daftar Mahasiswa</h2>
		<table border="1" cellpadding="0" cellspacing="0" width="700" align="center">
			<thead>
				<th>No.</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Pilihan</th >
			</thead>

			<tbody>
				<?php
				$no 	= 1;
				while ($row = mysqli_fetch_array($r)){
					echo '<tr>
							<td align="center">'.$no.'</td>
							<td align="center">'.$row['id'].'</td>
							<td align="center">'.$row['nama'].'</td>
							<td align="center">'.$row['alamat'].'</td>
							<td align="center">'.$row['jenis_kelamin'].'</td>
							<td align="center">
							<a href="edit.php?id='.$row["id"].'" title="Edit Data Ini">|| Edit ||</a>
							<a href="aksi.php?id='.$row["id"].'" title="Hapus Data Ini">|| Hapus ||</a>
							</td>
						</tr>';
					$no++;
				}?> 
			</tbody>

		</table>		
	</body>
</html>
