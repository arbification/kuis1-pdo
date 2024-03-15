<?php
class EventManager
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=event_management', 'root', '');
    }

    public function tampilEvent()
    {
        $query = $this->db->query("SELECT * FROM event");
        $query->execute();
        return $query;
    }

    public function tambahEvent($nama_event, $tanggal, $lokasi)
    {
        $query = $this->db->prepare("INSERT INTO event (nama_event, tanggal, lokasi) VALUES (:nama_event, :tanggal, :lokasi)");
        $query->bindParam(':nama_event', $nama_event);
        $query->bindParam(':tanggal', $tanggal);
        $query->bindParam(':lokasi', $lokasi);
        $query->execute();
        if (!$query) {
            return "Gagal menambahkan event";
        } else {
            return "Berhasil menambahkan event";
        }
    }

    public function lihatEvent($id)
    {
        $query = $this->db->prepare("SELECT * FROM event WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if (!$query) {
            return "Gagal melihat event";
        } else {
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }

    public function editEvent($id, $nama_event, $tanggal, $lokasi)
    {
        $query = $this->db->prepare("UPDATE event SET nama_event = :nama_event, tanggal = :tanggal, lokasi = :lokasi WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama_event', $nama_event);
        $query->bindParam(':tanggal', $tanggal);
        $query->bindParam(':lokasi', $lokasi);
        $query->execute();
        if (!$query) {
            return "Gagal mengubah event";
        } else {
            return "Berhasil mengubah event";
        }
    }

    public function hapusEvent($id)
    {
        $query = $this->db->prepare("DELETE FROM event WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if (!$query) {
            return "Gagal menghapus event";
        } else {
            return "Berhasil menghapus event";
        }
    }
}
