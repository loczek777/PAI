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
<title> Twoje konto </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css">
</head>
<body>
<a href="ty.php?page=ty"> Rejestracja </a> <br>


	<section id="Baner">
	
	</section>
	<section id="header">
	<ul>
		<li class="p1" style="float:right"><a href="index.php">Wroc na strone glowna</a></li>
	</ul>
	</section>
	<section id="body">
	
	<div id="panel">
<form method="POST" action="konto.php">

<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="username">
<label for="password">Hasło:</label>
<input type="password" id="password" name="password">
<input type="checkbox" name="klk"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
<input type="submit" value="Login">
<input type="submit" value="Register" name="reg">


</form>
</div>
	<?php

if(isset($_POST['username'])){
echo "Twoj login to: " . htmlspecialchars($_POST['username']). "<br>";
}

if(isset($_POST['password'])){
echo "Haslo: " . sha1(htmlspecialchars($_POST['password'])). "<br>";} 


if(isset($_POST['klk'])) echo "Zapamietaj: "; 
else echo "Nie zostalo wybrane";

if(isset($_POST['reg'])){
echo "Zajerestrowano pomyslnie " . (htmlspecialchars($_POST['reg'])). "<br>";} 
?>
	</section>
	<section>
	
	<?php if(($strona)!=null) include($strona.".php"); ?>
	
	</section>
</body>
<footer>
	<section id="footer">
	<ul>
		<li class="p1"><a href="promo">Promocje !</a> </li>
		<li class="p1"><a href="kontakt">Informacje kontaktowe</a></li>
		<li class="p1"><a href="inne">Inne gadgety</a></li>
	</ul>
	</section>
</footer>
</html>