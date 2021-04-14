<?php
include "header.php";
include "koneksi.php";

if(isset($_GET['id_user']))
$id = $_GET['id_user'];

$hasil = mysql_query("SELECT * FROM konten WHERE id_user='$id_user'",$id_mysql);

if (! $hasil)
	die("Permintaan konten gagal dilaksanakan");

while ( $baris = mysql_fetch_array($hasil) )
?>
<TABLE border=0 cellPadding=0 cellSpacing=0 width="400" align=center>
	<TBODY>
	<TR><TD colspan=3 height=40 ><p align="center"><b>EDIT USER</b></TD></TR>
<FROM action="user_edit_simpan.php" method="POST">
	<TR>
	<TD width="100">