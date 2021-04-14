<?php
include "header.php";

if(isset($_GET['id']))
$id = $_GET['id'];
else
$id=0;

if(!isset($_GET['id']) || $id==0)
echo "<h2>Selamat datang di website Febri Nurdiansah</h2>";

$hasil = mysql_query("SELECT * FROM konten WHERE id='$id'",$id_mysql);
	if (!$hasil)
		die("Permintaan mencari isi gagal dilaksanakan");
	
 while ( $baris = mysql_fetch_array($hasil) )
{
echo "<h2 align=center>$baris[menu]</h2>$baris{isi]";
}
include "footer.php";
?>