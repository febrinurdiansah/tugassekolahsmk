<html>
<head>
<title>Template</title>

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>

<div class="container">

<div class="header">
	<h1>WEBSITE FEBRI NURDIANSAH</h1>
</div>

<?php
include "koneksi.php";

$hasil=mysql_query("SELECT * FROM konten",$id_mysql);
if (! $hasil)
	die("permintaan mencari menu gagal dilakukan");

echo "<nav><ul>";
echo "<li><a href='index.php?id=0'>Home</a></li>";
while ( $baris = mysql_fetch_array($hasil) )
{
echo "<li><a href='index.php?id=$baris[id]'>$baris[menu]</a></li>";
}
?>

<li><a href="buku_tamu.php">Buku Tamu</a></li>
<li><a href="buku_tamu_lihat.php">Lihat Tamu</a></li>

	</ul>
<p style="text-align: center;"><iframe src="http://jadwalsholat.org/adzan/ajax.row.php" frameborder="0" width="180" height="200"></iframe></p>

</nav>
<article>