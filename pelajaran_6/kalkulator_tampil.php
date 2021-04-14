<html>
<head>
<title>Tampil</title>
</head>
<body>
<?php
if(isset($_POST['a']))
$a = $_POST['a'];

if(isset($_POST['b']))
$b = $_POST['b'];

$c = $a + $b;
echo "$a + $b = $c";
?>
</body>
</html>