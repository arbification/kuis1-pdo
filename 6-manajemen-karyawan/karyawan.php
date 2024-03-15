<?php
class Karyawan {
    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=karyawan_pdo', 'root', '');
    }

    public function tampilKaryawan() {
        $query = $this->db->query("SELECT * FROM karyawan");
        $query->execute();
        return $query;
    }

    public function tambahKaryawan($nama, $jenis_kelamin, $tanggal_lahir) {
        $query = $this->db->prepare("INSERT INTO karyawan (nama, jenis_kelamin, tanggal_lahir) VALUES (:nama, :jenis_kelamin, :tanggal_lahir)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin);
        $query->bindParam(':tanggal_lahir', $tanggal_lahir);
        $query->execute();
        if (!$query) {
            return "Gagal menambahkan karyawan";
        } else {
            return "Berhasil menambahkan karyawan";
        }
    }

    public function editKaryawan($id, $nama, $jenis_kelamin, $tanggal_lahir) {
        $query = $this->db->prepare("UPDATE karyawan SET nama = :nama, jenis_kelamin = :jenis_kelamin, tanggal_lahir = :tanggal_lahir WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama', $nama);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin);
        $query->bindParam(':tanggal_lahir', $tanggal_lahir);
        $query->execute();
        if (!$query) {
            return "Gagal mengubah karyawan";
        } else {
            return "Berhasil mengubah karyawan";
        }
    }

    public function hapusKaryawan($id) {
        $query = $this->db->prepare("DELETE FROM karyawan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if (!$query) {
            return "Gagal menghapus karyawan";
        } else {
            return "Berhasil menghapus karyawan";
        }
    }

    public function lihatKaryawan($id) {
        $query = $this->db->prepare("SELECT * FROM karyawan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if (!$query) {
            return "Gagal melihat karyawan";
        } else {
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }
}