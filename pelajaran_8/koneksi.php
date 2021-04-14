<?php
$pemakai = "root";
$password = "";

$id_mysql = mysql_connect("localhost",$pemakai,$password);

if (! $id_mysql)
die("Database MySQL tak dapat dibuka");

if (! mysql_select_db("website_db", $id_mysql))
die("Database tidak bisa dipilih");

?>