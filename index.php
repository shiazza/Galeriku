<!DOCTYPE html>
<html>
<head>
	<title>Fitur Upload Foto dengan PHP & Mysql</title>
	<link rel="stylesheet" type="text/css" href="style/gaya.css">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="Inside">
			<div class="keseluruhan">
				<div class="judul">
					<h2>Galeri</h2>
				</div>
				<div class="tmbl_upload">
					<a href="from_upload.php" class="upload">Upload</a>
					<?php 
						include "koneksi.php" ;
						$data = mysqli_query($koneksi, "SELECT * FROM isi_foto order by id_photo DESC") ;
						while ($row = mysqli_fetch_array($data)) {
					?>

					<div class="card w-96 bg-base-100 shadow-xl">
						<div class="gambar">
                        <a href="file/<?php echo $row['foto'] ; ?>" target="_blank">
							<img src="file/<?php echo $row['foto'] ; ?>">
						</div>

						<div class="card-body">
							<h2><?php echo $row['deskripsi'] ; ?></h2>
							<a href="hapus.php?id=<?php echo $row['id_photo'] ; ?>" class="btn btn-error">Delete</a>
						</div>
					</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>