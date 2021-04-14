<?php
include "header.php";

echo "<h2 align=center>BUKU TAMU</h2>";

include "koneksi.php";

$hasil = mysql_query("SELECT * FROM buku_tamu",$id_mysql);
	if (! $hasil)
	 die("Permintaan mencari isi gagal dilaksanakan");
	 
echo "<table border=1 align=center width=400 ><tr><td>No</td><td>Nama</td><td>Alamat</td><td>Komentar</td><td>Tanggal</td></tr>";

$no=1;
	while ( $baris = mysql_fetch_array($hasil) )
{
echo "<tr><td>$no</td><td>$baris[nama]</td><td>$baris[alamat]</td><td>$baris[komentar]</td><td>$baris[tanggal]</td></tr>";
$no++;
}
echo "</table>";
include "footer.php";
?>