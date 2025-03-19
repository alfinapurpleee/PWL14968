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
    // Jika tidak pakai Composer, include manual controller
    require_once __DIR__ . '/app/Controllers/Mahasiswa.php';
}

// Pastikan namespace sesuai dengan struktur folder
use Controllers\Mahasiswa;

try {
    /**
     * Buat objek dari kelas Mahasiswa
     */
    $controller = new Mahasiswa();
    
    // Gunakan filter_input() untuk keamanan
    $action = filter_input(INPUT_GET, 'act', FILTER_SANITIZE_STRING) ?? 'home';

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

        case 'delete':  
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
