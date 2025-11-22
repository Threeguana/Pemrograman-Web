<?php
require_once 'database.php';

class Crud
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Create
    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        return pg_query($this->db->conn, $query);
    }

    // Read
    public function read()
    {
        $query = "SELECT * FROM jabatan ORDER BY id ASC";
        $result = pg_query($this->db->conn, $query);

        $data = [];
        while ($row = pg_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    // Read by ID
    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = $id LIMIT 1";
        $result = pg_query($this->db->conn, $query);
        return pg_fetch_assoc($result);
    }

    // Update
    public function update($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan='$jabatan', keterangan='$keterangan' WHERE id = $id";
        return pg_query($this->db->conn, $query);
    }

    // Delete
    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id = $id";
        return pg_query($this->db->conn, $query);
    }
}
?>
