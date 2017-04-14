
<!--Tambah Data-->
<?php
include('server.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$nim	= $_POST['id'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$jenisKelamin	= $_POST['jenis_kelamin'];
	
	$sql	= 'insert into tabel_mahasiswa (id,nama,alamat,jenis_kelamin) values ("'.$nim.'","'.$nama.'","'.$alamat.'","'.$jenisKelamin.'")';
	$query	= mysqli_query($con,$sql);
	
	if($query){
		header('location: index.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
?>

<!--blaa blaa blaaa-->
<!--tambahan alamsyah ibrahim-->
<!--Edit/Update-->
<?php
if(isset($_POST['tedit'])){
	$nim	= $_POST['id'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$jenisKelamin	= $_POST['jenis_kelamin'];
	
	
	$sql	= 'update tabel_mahasiswa set nama="'.$nama.'", alamat="'.$alamat.'", jenis_kelamin="'.$jenisKelamin.'" where id="'.$nim.'"';
	$query	= mysqli_query($con,$sql);
	
	if($query){
		header('location: index.php');
	}
	else{
		echo 'Gagal';
	}
}
?>

<!--Delete-->
<?php
include('server.php');
$id	= $_GET['id'];

$sql 	= 'delete from tabel_mahasiswa where id="'.$id.'"';
$query	= mysqli_query($con,$sql);
header('location: index.php');
?>
