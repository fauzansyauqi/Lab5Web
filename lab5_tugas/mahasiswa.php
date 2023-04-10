<?php
// Include kelas Database
include_once 'database.php';

class Mahasiswa {
    // Variabel untuk menyimpan koneksi database
    private $koneksi;

    // Variabel untuk menyimpan nama tabel
    private $table_name = "mahasiswa";

    // Variabel untuk menyimpan kolom dalam tabel
    public $id;
    public $nim;
    public $nama;
    public $jenis_kelamin;
    public $jurusan;
    public $semester;
    public $alamat;

    // Constructor untuk menghubungkan ke database
    public function __construct($db) {
        $this->koneksi = $db;
    }

    // Fungsi untuk menambahkan data mahasiswa
    function create() {
        $query = "INSERT INTO " . $this->table_name . " SET  nim=:nim, nama=:nama, jenis_kelamin=:jenis_kelamin, jurusan=:jurusan, semester=:semester, alamat=:alamat";

        $stmt = $this->koneksi->prepare($query);

        $this->nim=htmlspecialchars(strip_tags($this->nim));
        $this->nama=htmlspecialchars(strip_tags($this->nama));
        $this->jenis_kelamin=htmlspecialchars(strip_tags($this->jenis_kelamin));
        $this->jurusan=htmlspecialchars(strip_tags($this->jurusan));
        $this->semester=htmlspecialchars(strip_tags($this->semester));
        $this->alamat=htmlspecialchars(strip_tags($this->alamat));

        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":jenis_kelamin", $this->jenis_kelamin);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":semester", $this->semester);
        $stmt->bindParam(":alamat", $this->alamat);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
