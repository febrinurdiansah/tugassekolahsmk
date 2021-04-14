<?php
include "../koneksi.php";

$hasil = mysql_query("SELECT * FROM konten",$id_mysql);
if (! $hasil)
	die("Permintaan konten gagal dilaksanakan");

echo "<p align=center><b>DAFTAR KONTEN</p>";
echo "<table align=center border=1 width=800 cellpadding=3 cellspacing=0>
		<tr>
		<td width=30 align=center>no</td>
		<td width=100 align=center>Menu</td>
		<td width=300 align=center>Isi</td>
		<td align=center>Aksi</td></tr>";
$i=1;
	while ( $baris = mysql_fetch_array($hasil) )
	{
echo "<tr><td align=center>$i</td> <td>$baris[menu]</td><td>$baris[isi]</td><td align=center>";
echo "<a href=konten_edit.php?id=$baris[id]>Edit</a> | ";
?>
<a href=konten_hapus.php?id=<?php echo "$baris[id]"; ?>onclick="retrun confirm('Yakin Hapus?')">Hapus</a>
<?php
echo "</td></tr>";
	$i++;
}
echo "</table><br>";
mysql_close($id_mysql);
?>	