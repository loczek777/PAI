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
<title> Inne gadgety </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1.css">
</head>
<body>
<a href="inne.php?page=inne"> Gadgety </a> <br>


	<section id="Baner">
	
	</section>
	<section id="header">
	<ul>
		<li class="p1" style="float:right"><a href="index.php">Wroc na strone glowna</a></li>
	</ul>
	</section>
	<section id="body">
	
	
	<div id="kwadraty">
	
	<label for="show">
		<span>
	Pogon Szczecin
	<img src="zd7.jpg" width="200" height="200" border="5">  
		</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
  
  <label for="show">
		<span>
	Paprykarz szczeciński
	<img src="zd8.jpg" width="200" height="200" border="5" >  
  </span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
  
  <label for="show">
		<span>
	Wheel of stettin
	<img src="zd9.jpg" width="200" height="200" border="5">   
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
  
  <label for="show">
		<span>
	Pasztecik szczeciński
	<img src="zd10.jpg" width="200" height="200" border="5" >  
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
 
  <label for="show">
		<span>
	Żurawie szczecińskie
	<img src="zd11.jpg" width="200" height="200" border="5" >  
</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>	
	
   <label for="show">
		<span>
	Jarmark szczeciński
	<img src="zd18.jpg" width="200" height="200" border="5" >  
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>	
  
	
	</div>
	
	
	<div id="kwadraty2">
	
	   <label for="show">
		<span>
	Pyromagic
	<img src="zd12.jpg" width="200" height="200" border="5"> 
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To  </span>	
	
	
	   <label for="show">
		<span>
	Floating Stettin 
	<img src="zd13.jpg" width="200" height="200" border="5"> 
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
	
	<label for="show">
		<span>
	RabBar Kebap
    <img src="zd14.jpg" width="200" height="200" border="5"> 
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
	
	<label for="show">
		<span>
	Ronda Szczecińskie
	<img src="zd15.jpg" width="200" height="200" border="5">
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
	
	<label for="show">
		<span>
	Marina Szczecin
	<img src="zd16.jpg" width="200" height="200" border="5"> 
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
	
	<label for="show">
		<span>
	Wyspa Grodzka
	<img src="zd17.jpg" width="200" height="200" border="5"> 
	</span>
	</label>
	<input type=radio id="show" name="grupa">
	<span id="content"> To ma byc </span>
	
	
	</div>
	</section>
	<section>
	
	<?php if(($strona)!=null) include($strona.".php"); ?>
	
	</section>
</body>
<footer>
	<section id="footer">
	<ul>
	
	</ul>
	</section>
</footer>
</html>