<?php

namespace Models;
use Libraries\Database;
use PDO;

class Model_mhs
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Database::getInstance();
    }

    // Fungsi untuk menyimpan data mahasiswa
    function simpanData($nim, $nama)
    {
        $sql = "INSERT INTO mahasiswa (nim, nama, created_at) VALUES (:nim, :nama, NOW())";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        return $stmt->execute();
    }

    // Fungsi untuk melihat semua data mahasiswa yang belum dihapus
    function lihatData()
    {
        $sql = "SELECT * FROM mahasiswa WHERE deleted_at IS NULL ORDER BY created_at DESC";
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Mengembalikan array asosiatif
    }
    
    // Fungsi untuk melihat detail mahasiswa berdasarkan ID
    function lihatDataDetail($id)
    {
        $sql = "SELECT * FROM mahasiswa WHERE id = :id AND deleted_at IS NULL";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fungsi untuk melakukan soft delete (menandai deleted_at tanpa menghapus data)
    function hapusData($id)
    {
        $sql = "UPDATE mahasiswa SET deleted_at = NOW() WHERE id = :id";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Fungsi untuk memperbarui data mahasiswa yang belum dihapus
    function perbaruiData($id, $nim, $nama)
    {
        $sql = "UPDATE mahasiswa SET nim = :nim, nama = :nama WHERE id = :id AND deleted_at IS NULL";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        return $stmt->execute();
    }
}
