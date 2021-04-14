<?php
include "header.php";
include "../koneksi.php";
if(isset($_GET['id']))
$id = $_GET['id'];

$hasil = mysql_query("SELECT * FROM konten WHERE id='$id'",$id_mysql);
if (! $hasil)
	die("Permintaan konten gagal dilaksanakan");

echo "<h3 align=center>EDIT KONTEN</h3>";

while ( $baris = mysql_fetch_array($hasil) )
	{
?>

<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
				mode : "textareas",
				theme : "advanced",
		});
	</script>

<form action="konten_edit_simpan.php" method="POST">
<table width="300" align="center" border="0">
	<tr><td width=150>Menu</td><td width=15>:</td><td>
		<input type="text" name="menu" value='<?php echo "$baris[menu]"; ?>'></td></tr>
	<tr><td>Isi</td><td>:</td><td>
		<textarea name="isi" rows="6" cols="30"><?php echo"$baris[isi]"; ?></textarea></td></tr>
	<tr><td colspan=3 align=center>
<input type="hidden" name="id" value='<?php echo "$baris[id]"; ?>'>

		<input type="submit" value="Simpan"></td></tr>
</table>
</form>
<hr width=80%>

<?php
	}
include "konten_list.php";
include "footer.php";
?>