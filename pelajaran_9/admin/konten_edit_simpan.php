<?php
if(isset($_POST['id']))
$id = $_POST['id'];

if(isset($_POST['menu']))
$menu = $_POST['menu'];

if(isset($_POST['isi']))
$isi = $_POST['isi'];

echo "menu=$menu<br>isi=$isi<br>";

include "../koneksi.php";

$hasil = mysql_query("UPDATE konten SET menu='$menu', isi='$isi' WHERE id='$id'", $id_mysql);

if($hasil)
echo ("<h3 align=center>Edit Konten Berhasil</h3>");
else
echo ("<h3 align=center>Edit Konten Gagal</h3>");

print("<html><head><meta http-equiv='refresh' content='1;url=konten.php'></head><body></body></html>");
?>