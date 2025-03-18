<html>
	<head>
		<title>Native MVC Example</title> <!-- Menentukan judul halaman -->

		<!-- Menyertakan file CSS Bootstrap untuk tampilan yang lebih menarik -->
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />

		<!-- Menyertakan file JavaScript Bootstrap untuk mendukung fitur interaktif Bootstrap -->
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>  
	<body> <!-- Awal dari bagian konten halaman -->
		
		<!-- Membuat baris dengan sistem grid Bootstrap -->
		<div class="row">
			<div class="col-md-12"> <!-- Kolom utama yang mencakup seluruh lebar halaman -->

				<!-- Kolom kiri kosong untuk memberikan efek tata letak yang lebih rapi -->
				<div class="col-md-4">&nbsp;</div>

				<!-- Kolom tengah untuk menampilkan data mahasiswa -->
				<div class="col-md-4">
					<h3>Data Mahasiswa</h3> <!-- Judul bagian data mahasiswa -->

					<?php  
						// Menampilkan data mahasiswa menggunakan PHP
						// Pastikan variabel $rs didefinisikan sebelumnya, agar tidak menyebabkan error
						echo 'id: ' . $rs['id'] . '<br/>';
						echo 'NIM: ' . $rs['nim'] . '<br/>';
						echo 'Nama: ' . $rs['nama'] . '<br/>';
					?>
				</div>

				<!-- Kolom kanan kosong untuk memberikan efek tata letak yang lebih rapi -->
				<div class="col-md-4">&nbsp;</div>

			</div>
		</div>

	</body>
</html>

<!-- Kode berikut ini adalah duplikasi HTML yang tidak diperlukan -->
<html>
<head>
</head>
<body>
</body>
</html>
