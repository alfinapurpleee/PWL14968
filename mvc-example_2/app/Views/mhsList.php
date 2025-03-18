<html>
<head>
    <title>Data Mahasiswa</title> <!-- Menentukan judul halaman -->

    <!-- Menyertakan file CSS Bootstrap untuk tampilan yang lebih menarik -->
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />

    <!-- Menyertakan file JavaScript Bootstrap untuk mendukung fitur interaktif Bootstrap -->
    <script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
</head>
<body>
    <!-- Membuat baris dalam sistem grid Bootstrap -->
    <div class="row">
        <div class="col-md-12"> <!-- Kolom utama yang mencakup seluruh lebar halaman -->

            <!-- Kolom kiri kosong untuk merapikan tata letak -->
            <div class="col-md-4">&nbsp;</div>

            <!-- Kolom tengah yang berisi tabel data mahasiswa -->
            <div class="col-md-4">
                <h3>Data Mahasiswa</h3> <!-- Judul tabel -->

                <!-- Tabel untuk menampilkan data mahasiswa -->
                <table class="table table-responsive table-bordered table-striped">
                    <tr>
                        <th>No</th> <!-- Nomor urut -->
                        <th>NIM</th> <!-- Nomor Induk Mahasiswa -->
                        <th>Nama</th> <!-- Nama Mahasiswa -->
                        <th>Created At</th> <!-- Tanggal pembuatan data -->
                        <th>Aksi</th> <!-- Kolom aksi (tombol detail & hapus) -->
                    </tr>

                    <?php 
                        $no = 1; // Inisialisasi nomor urut

                        // Looping untuk menampilkan setiap data mahasiswa
                        foreach ($rs as $list) {
                            echo '<tr>';
                            echo '<td>'.$no++.'</td>'; // Menampilkan nomor urut
                            echo '<td>'.$list['nim'].'</td>'; // Menampilkan NIM
                            echo '<td>'.$list['nama'].'</td>'; // Menampilkan Nama
                            echo '<td>'.$list['created_at'].'</td>'; // Menampilkan tanggal dibuatnya data
                            echo '<td>
                                <!-- Tombol untuk melihat detail mahasiswa -->
                                <a href="?act=tampil-data&i='.$list['id'].'" class="btn btn-info">Detail</a>

                                <!-- Tombol untuk menghapus data, dengan konfirmasi sebelum menghapus -->
                                <a href="?act=delete&i='.$list['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')" class="btn btn-danger">Hapus</a>
                            </td>';
                            echo '</tr>';
                        }
                    ?>
                </table>

                <!-- Tombol untuk menambah data baru -->
                <a href="/mvc-example/" class="btn btn-primary">Tambah Data</a>
            </div>

            <!-- Kolom kanan kosong untuk merapikan tata letak -->
            <div class="col-md-4">&nbsp;</div>

        </div>
    </div>
</body>
</html>
