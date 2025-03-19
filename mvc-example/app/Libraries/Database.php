<?php 
// Mendeklarasikan namespace Libraries untuk mengorganisir kode dalam proyek
namespace Libraries;

// Menggunakan class PDO untuk koneksi database
use PDO;

class Database {
    // Properti statis untuk menyimpan instance tunggal dari kelas Database
    private static $instance = NULL;

    // Konstruktor dibuat private untuk mencegah instansiasi langsung dari luar kelas
    public function __construct() {}

    // Method __clone() dibuat private untuk mencegah cloning instance
    private function __clone() {}

    // Method untuk mendapatkan satu instance dari koneksi database (Singleton Pattern)
    public static function getInstance() {
        // Mengecek apakah instance sudah dibuat atau belum
        if (!isset(self::$instance)) {
            // Mengatur opsi untuk koneksi database (menampilkan error dalam bentuk exception)
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            // Membuat instance PDO untuk koneksi ke database MySQL
            self::$instance = new PDO('mysql:host=localhost;dbname=fina', 'root', '', $pdo_options);
        }
        // Mengembalikan instance yang sudah dibuat
        return self::$instance;
    }
}
?>
