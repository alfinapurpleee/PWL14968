<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
    <script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">&nbsp;</div>
            <div class="col-md-4">
                <h3>Data Mahasiswa</h3>
                <table class="table table-responsive table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Created At</th>
        <th>Aksi</th>
    </tr>
    <?php 
        $no = 1;
        foreach ($rs as $list) {
            echo '<tr>';
            echo '<td>'.$no++.'</td>';
            echo '<td>'.$list['nim'].'</td>';
            echo '<td>'.$list['nama'].'</td>';
            echo '<td>'.$list['created_at'].'</td>';
            echo '<td>
                <a href="?act=tampil-data&i='.$list['id'].'" class="btn btn-info">Detail</a>
                <a href="?act=delete&i='.$list['id'].'" onclick="return confirm(\'Yakin ingin menghapus?\')" class="btn btn-danger">Hapus</a>
            </td>';
            echo '</tr>';
        }
    ?>
</table>
                <a href="/mvc-example/" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>
    </div>
</body>
</html>
