<?php 
/**
 * Bootstrap page
 * Require file autoload dari vendor atau manual
 */

// Cek apakah autoload.php tersedia sebelum require
$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
} else {
    die("Error: Autoload file tidak ditemukan! Pastikan sudah menjalankan 'composer dump-autoload'.");
}

// Pastikan namespace Controllers ada
use Controllers\Mahasiswa;

try {
    /**
     * Buat objek dari kelas Mahasiswa
     */
    $controller = new Mahasiswa();
    
    // Tentukan bagaimana halaman akan di-load
    $action = $_GET['act'] ?? 'home';

    switch ($action) {
        case 'home': 
            $controller->index();
            break;
        
        case 'simpan':
            $controller->save();
            break;

        case 'tampil-data':
            $controller->show_data();
            break;

        case 'delete':  // Tambahkan aksi hapus agar berfungsi
            $controller->delete();
            break;

        default: 
            $controller->index();
            break;
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
