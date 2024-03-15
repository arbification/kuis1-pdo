<?php

class Pesanan 
{
    public $db;

    public function __construct()
    {
        require 'koneksi.php';
        $this->db = $conn;
    }

    public function tambah($id_pelanggan, $id_barang, $jumlah, $tanggal_pesan)
    {
        $query = $this->db->prepare("INSERT INTO pesanan (id_pelanggan, id_barang, jumlah, tanggal_pesan) VALUES (:id_pelanggan, :id_barang, :jumlah, :tanggal_pesan)");
        $query->bindParam(':id_pelanggan', $id_pelanggan);
        $query->bindParam(':id_barang', $id_barang);
        $query->bindParam(':jumlah', $jumlah);
        $query->bindParam(':tanggal_pesan', $tanggal_pesan);
        $query->execute();
    }

    public function lihat()
    {
        $query = $this->db->prepare("SELECT * FROM pesanan");
        $query->execute();
        return $query->fetchAll();
    }

    public function lihat_id($id)
    {
        $query = $this->db->prepare("SELECT * FROM pesanan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function edit($id, $id_pelanggan, $id_barang, $jumlah, $tanggal_pesan)
    {
        $query = $this->db->prepare("UPDATE pesanan SET id_pelanggan = :id_pelanggan, id_barang = :id_barang, jumlah = :jumlah, tanggal_pesan = :tanggal_pesan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':id_pelanggan', $id_pelanggan);
        $query->bindParam(':id_barang', $id_barang);
        $query->bindParam(':jumlah', $jumlah);
        $query->bindParam(':tanggal_pesan', $tanggal_pesan);
        $query->execute();
    }

    public function hapus($id)
    {
        $query = $this->db->prepare("DELETE FROM pesanan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
    }
}

?>