<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM MAHASISWA</title>
</head>
<body>
    <h2>FORM MAHASISWA</h2>
    <form action="" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">NAMA:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <button type="submit">Kirim</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = htmlspecialchars($_POST["nim"]);
        $nama = htmlspecialchars($_POST["nama"]);

        echo "<h2>Data Mahasiswa</h2>";
        echo "NIM: " . $nim . "<br>";
        echo "NAMA: " . $nama . "<br>";
        echo "<p style='color: green; font-weight: bold;'>Anda dengan NIM <strong>$nim</strong> dan Nama <strong>$nama</strong> berhasil dikirim!</p>";
        echo "<p style='color: blue; font-weight: bold;'>Anda dengan NIM <strong>$nim</strong> dan Nama <strong>$nama</strong> berhasil login.</p>";
    } 
    ?>
</body>
</html>
