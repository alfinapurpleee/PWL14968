<?php 

namespace Controllers;
use Models\Model_mhs;

class Mahasiswa
{
    private $mhs;

    public function __construct()
    {
        $this->mhs = new Model_mhs();
    }

    /**
     * Menampilkan halaman utama (form input mahasiswa)
     */
    public function index()
    {
        require_once 'app/Views/index.php';
    }

    /**
     * Menampilkan daftar mahasiswa atau detail mahasiswa jika ada parameter ID
     */
    function show_data()
    {
        if (!isset($_GET['i'])) {
            // Jika tidak ada parameter ID, tampilkan semua data mahasiswa yang belum dihapus
            $rs = $this->mhs->lihatData();
            require_once 'app/Views/mhsList.php';
        } else {
            // Jika ada parameter ID, tampilkan detail mahasiswa tersebut
            $detail = $this->mhs->lihatDataDetail($_GET['i']);
            $rs = $detail;  // Pastikan variabel ini tersedia di view
            require_once 'app/Views/mhsDetail.php';

        }
    }

    /**
     * Menyimpan data mahasiswa ke database
     */
    function save()
    {
        if (!isset($_POST['nim']) || !isset($_POST['nama']) || empty($_POST['nim']) || empty($_POST['nama'])) {
            echo "Data tidak boleh kosong!";
            return;
        }

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        // Simpan data ke database
        $this->mhs->simpanData($nim, $nama);

        // Redirect kembali ke halaman daftar mahasiswa
        header("Location: /mvc-example/?act=tampil-data");
        exit;
    }

    /**
     * Soft delete data mahasiswa berdasarkan ID
     */
    function delete()
    {
        if (isset($_GET['i'])) {
            $id = $_GET['i'];
            if ($this->mhs->hapusData($id)) {
                header("Location: /mvc-example/?act=tampil-data");
                exit;
            } else {
                echo "Gagal menghapus data.";
            }
        } else {
            echo "ID tidak ditemukan.";
        }
    }
}
