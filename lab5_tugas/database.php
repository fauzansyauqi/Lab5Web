<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_mahasiswa";

    public $koneksi;

    // Fungsi untuk menghubungkan ke database
    public function getConnection() {
        $this->koneksi = null;

        try {
            $this->koneksi = new PDO("mysql:host=".$this->host.";dbname=".$this->database, $this->username, $this->password);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }

        return $this->koneksi;
    }
}
?>
