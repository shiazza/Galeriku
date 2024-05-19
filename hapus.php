<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * FROM isi_foto WHERE id_photo = '$_GET[id]' ") ;
	$row = mysqli_fetch_array($data) ;

	$foto = $row['foto'] ;
	if(file_exists('file/'.$foto))
	{
		unlink('file/'.$foto) ;
	}
	$query = "DELETE FROM isi_foto WHERE id_photo = '$_GET[id]' ";
	mysqli_query($koneksi, $query) or die ("SQL Error ".mysqli_error($koneksi)) ;
	header('location:index.php')
?>