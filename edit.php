<html>
<head>
	
</head>
<body>
	<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('server.php');
	if(isset($_GET['id'])){
		$id		= $_GET['id'];
		$query	= mysqli_query($con,'select * from tabel_mahasiswa where id = "'.$id.'"');
		$data  	= mysqli_fetch_array($query);
		$nama	= $data['nama'];
		$alamat	= $data['alamat'];
		$jenisKelamin	= $data['jenis_kelamin'];
	}
	else{
	$nama = '';
	$alamat = '';
	$jenisKelamin = '';
	}
?>
</p></h2>
<form method="post" name="frm" action="aksi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIM</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $nama; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $alamat; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jenis Kelamin</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
    <select name="jenis_kelamin">
        <option value= ""selected="selected">--Pilih--</option>
        <option>Laki-laki</option>
        <option>Perempuan</option>
          </select>
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>
</body>
</html>