<?php
if(isset($_POST['menu']))
$menu = $_POST['menu'];

if(isset($_POST['isi']))
$isi = $_POST['isi'];

date_default_timezone_set('Asia/Jakarta');
$tanggal = date ("Y-m-d");
echo "menu=$menu<br>isi=$isi<br>tanggal=$tanggal<br>";

include "../koneksi.php";

$hasil = mysql_query("INSERT INTO konten(menu, isi, tanggal) VALUES ('$menu', '$isi', '$tanggal')", $id_mysql);

if($hasil)
echo ("<h3 align=center>Simpan Konten Berhasil</h3>");
else
echo ("<h3 align=center>Simpan Konten Gagal</h3>");

print("<html><head><meta http-equiv='refresh' content='1;url=konten.php'></head><body></body></html>");
?>