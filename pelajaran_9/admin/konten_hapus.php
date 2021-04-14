<?php
include "../koneksi.php";

if(isset($_GET['id']))
$id = $_GET['id'];

$hasil = mysql_query("DELETE FROM konten WHERE id='$id'",$id_mysql);

if($hasil)
echo ("<h3 align=center> Hapus Konten Berhasil</h3>");
else
echo ("<h3 align=center> Hapus Konten Gagal</h3>");

print("<html><head><meta http-equiv='refresh' content='1;url=konten.php'></head><body></body></html>");
?>