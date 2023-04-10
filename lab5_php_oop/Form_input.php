<?php
/**
* Program untuk menampilkan form input data mahasiswa.
**/
include "Form.php";
include "database.php";
include "config.php";
$form = new Form("", "Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
	<h3>Silahkan isi form berikut ini :</h3>
	<?php
	$form->displayForm();
	?>
</body>
</html>
