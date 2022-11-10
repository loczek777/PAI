<html>
<head>
<a href="2.php?page=main"> Podstrona </a>
<title> 777 </title>
</head>

<body>


<?php


if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;

echo "strona: ".$strona."<br>";


echo "Hello World <br> ";

echo "My counter 1 <br>";

echo "Hello Friend <br>";
?>

<?php
