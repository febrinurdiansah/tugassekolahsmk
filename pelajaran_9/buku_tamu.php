<?php
include"header.php";
?>

<h2 align="center">BUKU TAMU</h2>
<form action="buku_tamu_simpan.php" method="POST">
<table align="center" width="400">
<tr><td align="center" >Nama</td> <td>:</td><td> <input type="text" name="nama"></td></tr>
<tr><td align="center" >Alamat</td> <td> :</td> <td> <input type="text" name="alamat"></td></tr>
<tr><td align="center" >Komentar</td> <td> :</td> <td> <input type="text" name="komentar"></td></tr>
<tr><td align="center" ><input type="submit" value="simpan"></td></tr>
</table>
</form>

<?php
include "footer.php";
?>