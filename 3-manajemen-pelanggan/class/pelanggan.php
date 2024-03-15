<?php

class Pelanggan
{
    private $db;
    public function __construct() 
    {
        global $db;
        require 'koneksi.php';    
    }

    public function TampilPelanggan() 
    {
        $query = $this->db->query("SELECT * FROM pelanggan");
        $query->execute();
        return $query;    
    }

    public function TambahPelanggan($nama, $alamat, $email) 
    {
        $query = $this->db->prepare("INSERT INTO pelanggan (nama, alamat, email) VALUES (:nama, :alamat, :email)");
        $query->bindParam(':nama', $nama); 
        $query->bindParam(':alamat', $alamat); 
        $query->bindParam(':email', $email); 
        $query->execute(); 
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function HapusPelanggan($id)
    {
        $query = $this->db->prepare("DELETE FROM pelanggan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function AmbilPelanggan($id)
    {
        $query = $this->db->prepare("SELECT * FROM pelanggan WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($query) {
            return $query;
        } else {
            return 'gagal';
        }
    }

    public function EditPelanggan($id, $nama, $alamat, $email) 
    {
        $query = $this->db->prepare("UPDATE pelanggan SET nama = :nama, alamat = :alamat, email = :email WHERE id = :id");
        $query->bindParam(':id', $id);    
        $query->bindParam(':nama', $nama);    
        $query->bindParam(':alamat', $alamat);    
        $query->bindParam(':email', $email);    
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}
?>