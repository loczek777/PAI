<?php 

if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;

echo "strona: ".$strona."<br>";

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Szczecin gadgets </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css">
</head>
<body>
<a href="ty.php?page=ty"> Moje konto </a> <br>
<a href="gadget.php?page=gadget"> Wyszukaj gadget </a>
<a href="my.php?page=my"> O nas </a>
<a href="konto.php?page=konto"> Login/Rejestracja </a>	
<a href="dodaj.php?page=dodaj"> Dodaj gadget </a>
<a href="kontakt.php?page=kontakt"> Informacje kontaktowe </a>
<a href="inne.php?page=inne"> Wszystkie gadgety </a>
	<section id="Baner">
	
	</section>
	<section id="header">
	<ul>
		<li class="p1"><a href="ty.php">Moje konto</a></li>
		<li class="p1"><a href="gadget.php">Wyszukaj gadget</a> </li>
		<li class="p1"><a href="my.php">O nas</a></li>
		<li class="p1" style="float:right"><a href="konto.php">Login/Rejestracja</a></li>
	</ul>
	</section>
	<section id="body">
	
	<div id="kwadraty">

	<div id="zd1"><img src="zd1.jpg" width="200" height="200" border="5"> </div>

	<div id="zd2"><img src="zd2.jpg" width="200" height="200" border="5"> </div>
	
	<div id="zd3"><img src="zd3.jpg" width="200" height="200" border="5"> </div>
	
	</div>
	
	<div id="kwadraty2">
	
	<div id="zd4"><img src="zd4.jpg" width="200" height="200" border="5"> </div>
	
	<div id="zd5"><img src="zd5.jpg" width="200" height="200" border="5"> </div>

	<div id="zd6"><img src="zd6.jpg" width="200" height="200" border="5"> </div>
	
	</div>
	
	
	</section>
	<section>
	
	<?php if(($strona)!=null) include($strona.".php"); ?>
	
	</section>
</body>
<footer>
	<section id="footer">
	<ul>
		<li class="p1"><a href="dodaj.php">Dodaj gadget</a> </li>
		<li class="p1"><a href="kontakt.php">Informacje kontaktowe</a></li>
		<li class="p1"><a href="inne.php">Inne gadgety</a></li>
		<li class="p1" style="float:right"><a href=" ">Autor: Igor Jaworski</a></li>
	</ul>
	</section>
</footer>
</html>