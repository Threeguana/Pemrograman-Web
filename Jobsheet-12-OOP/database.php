<?php
class Database
{
    private $host = "localhost";
    private $user = "postgres";
    private $password = "awsome";
    private $dbname = "prakwebdb";

    public $conn;

    public function __construct()
    {
        $connectionString = "host=$this->host dbname=$this->dbname user=$this->user password=$this->password";

        $this->conn = pg_connect($connectionString);

        if (!$this->conn) {
            die("Connection failed!");
        }
    }
}
?>
