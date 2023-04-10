<head>
  <title>Form Input Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
include_once 'database.php';
include_once 'mahasiswa.php';

$database = new Database();
$db = $database->getConnection();

$mahasiswa = new Mahasiswa($db);

if($_POST) {
    $mahasiswa->nim = $_POST['nim'];
    $mahasiswa->nama = $_POST['nama'];
    $mahasiswa->jenis_kelamin = $_POST['jenis_kelamin'];
    $mahasiswa->jurusan = $_POST['jurusan'];
    $mahasiswa->semester = $_POST['semester'];
    $mahasiswa->alamat = $_POST['alamat'];

    if($mahasiswa->create()) {
        echo "<div>Data berhasil disimpan.</div>";
    } else {
        echo "<div>Data gagal disimpan.</div>";
    }
}
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="container">
            <h2 class="form-title">Form Input Data Mahasiswa</h2>
                <div class="form-group">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" checked>
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
                <div class="form-group">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-select">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Hubungan Internasional">Hubungan Internasional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" id="semester" name="semester" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-input" required>
                </div>
                    <input type="submit" value="Simpan" class="form-submit">
        </div>
    </form>

