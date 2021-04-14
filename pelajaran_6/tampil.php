<html>
<head>
<title>Tampil</title>
</head>
<body>
<?php
if(isset($_POST['nama']))
$nama = $_POST['nama'];

if(isset($_POST['alamat']))
$alamat = $_POST['alamat'];

if(isset($_POST['tempat_lahir']))
$tempat_lahir = $_POST['tempat_lahir'];

if(isset($_POST['agama']))
$agama = $_POST['agama'];

if(isset($_POST['kelamin']))
$kelamin = $_POST['kelamin'];

echo "Yang Anda masukkan adalah:<br>";
echo "Nama : $nama<br>";
echo "Alamat : $alamat<br>";
echo "Tempat Lahir : $tempat_lahir<br>";
echo "Agama : $agama<br>";
echo "Jenis Kelamin : $kelamin<br>";

?>
</body>
</html>