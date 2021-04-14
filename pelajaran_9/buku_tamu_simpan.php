<?php
$tanggal=date('Y-m-d');

if(isset($_POST['nama']))
$nama = $_POST['nama'];

if(isset($_POST['alamat']))
$alamat = $_POST['alamat'];

if(isset($_POST['komentar']))
$komentar = $_POST['komentar'];

echo "nama=$nama<br>alamat=$alamat<br>komentar=$komentar<br>tanggal=$tanggal<br>";

include "koneksi.php";

$hasil = mysql_query("INSERT INTO buku_tamu (nama, alamat, komentar, tanggal) VALUES ('$nama', '$alamat', '$komentar', '$tanggal')", $id_mysql);

if($hasil)
echo ("Simpan Buku Tamu Berhasil<br>");
else
echo ("Simpan Buku Tamu Gagal<br>");

header('Location: buku_tamu_lihat.php');
exit;
?>