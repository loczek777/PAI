<?php
session_start();



if(isset ($_POST['submit'])){
	
$_SESSION["login"] = $_POST['login'];
$_SESSION["haslo"] = sha1($_POST['haslo']);

	}


?>

<B>Podaj login i hasło</B>

  <form action="trojka2410.php" method="POST">

Login: <input name="login" type="text" />
Haslo: <input name="haslo" type="password" />
    <input type="submit" value="Zaloguj się" name="cyk">
  </form>
  
  
 