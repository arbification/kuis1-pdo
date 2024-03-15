<?php
class Proyek
{
    private $db;

    public function __construct()
    {
        require 'koneksi.php';
        $this->db = $db;
    }

    public function TampilProyek()
    {
        $query = $this->db->query("select * from proyek");
        $query->execute();
        return $query;
    }

    public function TambahProyek($id, $nama_proyek, $deskripsi, $deadline)
    {
        $query = $this->db->prepare("insert into proyek (id,nama_proyek,deskripsi,deadline)values(:id,:nama_proyek,:deskripsi,:deadline)");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama_proyek', $nama_proyek);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':deadline', $deadline);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function EditProyek($id, $nama_proyek, $deskripsi, $deadline)
    {
        $query = $this->db->prepare("update proyek set nama_proyek=:nama_proyek, deskripsi=:deskripsi, deadline=:deadline where id=:id");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama_proyek', $nama_proyek);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':deadline', $deadline);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }


    public function AmbilProyek($id)
    {
        $query = $this->db->prepare("select * from proyek where id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($query) {
            return $query;
        } else {
            return 'gagal';
        }
    }

    public function HapusProyek($id)
    {
        $query = $this->db->prepare("delete from proyek where id =:id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}
