<!DOCTYPE html>
<html>
<head>
	<title>Upload Gambar</title>
    <link rel="stylesheet" type="text/css" href="style/gaya.css">   
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@2.13.6/dist/full.css">
</head>
<body>
	<div class="container mx-auto">
		<div class="flex justify-center mt-5">
			<div class="w-96">
				<div class="text-center mb-5">
					<h2>Upload foto Anda</h2>
				</div>
				<div class="mb-5">
					<form enctype="multipart/form-data" method="post" action="upload.php">

						<div class="form-control mb-3">
    <label class="label" for="foto">Foto</label>
    <input type="file" name="foto" id="foto" style="display: none;" onchange="updateLabel(this)">
    <label for="foto" class="btn btn-wide">Unggah</label>
    <label id="label-foto" class="label">Tak ada yang dipilih</label>
						</div>

                        <div class="form-control mb-3">
						  <label class="label" for="deskripsi">Deskripsi</label>
						  <input type="text" name="deskripsi" id="deskripsi" class="input input-bordered">
						</div>

						<div class="text-end">
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="js/index.js"></script>
</html>