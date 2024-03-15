<?php
  class Barang {
    private $db;
    public function __construct() 
    {
      require 'koneksi.php';  
    }

    public function tampilBarang(){
      $query = $this->db->query('SELECT * FROM barang');
      $query->execute();
      return $query;
    }

    public function tambahBarang($nama_barang, $harga, $stok){
      $query = $this->db->prepare('INSERT INTO barang (nama_barang, harga, stok) VALUES (?, ?, ?)');
      $query->bindParam(1, $nama_barang);
      $query->bindParam(2, $harga);
      $query->bindParam(3, $stok);
      $query->execute();
    }

    public function updateBarang($id, $nama_barang, $harga, $stok){
      $query = $this->db->prepare('
        UPDATE barang 
        SET nama_barang = ?, harga = ?, stok = ? 
        WHERE id = ?');
        $query->bindParam(1, $nama_barang);
        $query->bindParam(2, $harga);
        $query->bindParam(3, $stok);
        $query->bindParam(4, $id);
        $query->execute();
      }

      public function tampilBarangId($id){
        $query = $this->db->prepare('SELECT * FROM barang WHERE id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        return $query;
      }

    public function hapusBarang($id){
      $query = $this->db->prepare('DELETE FROM barang WHERE id = ?');
      $query->bindParam(1, $id);
      $query->execute();
    }

  }
