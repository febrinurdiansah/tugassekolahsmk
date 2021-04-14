<?php
include "header.php";
echo "<h3 align=center>ENTRI KONTEN</h3>";
?>

<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
				mode : "textareas",
				theme : "advanced",
		});
	</script>

<form action="konten_simpan.php" method="POST">
<table width="500" align="center" border="0">
	<tr><td width=150>Menu</td><td width=15>:</td><td>
		<input type="text" name="menu"></td></tr>
	<tr><td>Isi</td><td>:</td><td>
		<textarea name="isi" rows="6" cols="30"></textarea></td></tr>
	<tr><td colspan=3>
		<input type="submit" value="Simpan"></td></tr>
</table>
</form>
<hr width=80%>

<?php
include "konten_list.php";
include "footer.php";
?>