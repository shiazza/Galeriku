<?php 
	include "koneksi.php" ;
	$foto = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'] ;
	$deskripsi = $_POST['deskripsi'];
	move_uploaded_file($file_tmp, 'file/'.$foto) ;
	$query = "INSERT INTO isi_foto SET
                                    deskripsi = '$deskripsi', 
								    foto = '$foto'
	";
	mysqli_query($koneksi, $query) 
	or die("SQL Error " .mysqli_error($koneksi));
	header('location:index.php');
?>