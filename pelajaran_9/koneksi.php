<?php
$pemakai = "root";
$password = "";

$id_mysql = mysql_connect("localhost",$pemakai,$password);

if (! $id_mysql)
die("databasemysql tak dapat di buka");

if(!mysql_select_db("website_db", $id_mysql))
die ("database tidak bisa dipilih");

?>