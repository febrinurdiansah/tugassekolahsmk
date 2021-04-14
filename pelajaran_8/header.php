<!DOCTYPE html>
<html>
<head>
<title>Template</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
</head>
<body>

<div class="container">

<div class="header">
	<h1>City Gallery</h1>
</div>

<?php
include "koneksi.php";

$hasil = mysql_query("SELECT * FROM konten",$id_mysql);
	if(! $hasil)
		die("Permintaan mencari menu gagal dilaksanakan");
	
echo "<nav><ul>";
echo "<li><a href='index.php?id=0'>Home</a><li>";
 while ( $baris = mysql_fetch_array($hasil) )
{
echo "<li><a href='index.php?id=$baris[id]'>$baris[menu]</a></li>";
}
?>
	</ul>
</nav>
<article>