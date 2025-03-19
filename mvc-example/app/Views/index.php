<html>
	<head>
		<title>Native MVC Example</title> <!-- Menentukan judul halaman -->

		<!-- Menyertakan file CSS Bootstrap untuk tampilan yang lebih menarik -->
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />

		<!-- Menyertakan file JavaScript Bootstrap untuk mendukung fitur interaktif Bootstrap -->
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<!-- Membuat baris untuk tata letak dengan Bootstrap -->
		<div class="row">
			<div class="col-md-12"> <!-- Kolom utama yang mencakup seluruh lebar halaman -->

				<!-- Menyediakan ruang kosong di sebelah kiri -->
				<div class="col-md-4">&nbsp;</div>

				<!-- Kolom tengah yang berisi form input data -->
				<div class="col-md-4">
					<h3>Isikan data Anda di sini</h3>
					
					<!-- Formulir untuk menginput data -->
					<form method="post" action="/mvc-example/?act=simpan">
						<div class="form-group">
							<label for="exampleInputNim">NIM</label>
							<!-- Input untuk NIM -->
							<input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM">
						</div>
						<div class="form-group">
							<label for="exampleInputNama">Nama</label>
							<!-- Input untuk Nama -->
							<input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama">
						</div>

						<!-- Tombol untuk mengirim data -->
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					
					<br/>
					<!-- Link untuk melihat data yang telah disimpan -->
					<a href="/mvc-example/?act=tampil-data">Lihat Hasil Input</a>
				</div>

				<!-- Menyediakan ruang kosong di sebelah kanan -->
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
