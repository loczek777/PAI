<?php
$hostname = 'localhost'; 
$database = 'bazunia'; 
$username = 'root'; 
$password = ''; 
$conn = new mysqli($hostname, $username, $password, $database);
?>

<form method="POST" action="gabi2.php">
    <b>Login:</b> <input type="text" name="login"><br><br>
    <b>Hasło:</b> <input type="password" name="haslo1"><br>
    <b>Zapamietaj mnie:</b> <input type="checkbox" name="pamietaj"><br>
    <input type="submit" value="Utwórz konto" name="rejestruj">
</form>

<?php

if(!isset($_POST['rejestruj'])){
exit(0);
	
}

if(isset($_POST['login'])){
	$loginy = $_POST['login'];
}

if(isset($_POST['haslo1'])){
	$hasla = $_POST['haslo1'];
} 

if(isset($_POST['pamietaj'])) echo "Zapamietaj: "; 
else echo "Nie zostalo wybrane";

$sql = "INSERT INTO `klient` (`ID`, `imie`, `Nazwisko`, `Adres_email`)
        VALUES (NULL, '$loginy', '$hasla', ' ')";

if($result = $conn -> query($sql)) echo "Dodano nowego uzytkownika";
else echo "Nie udało się dodać nowego uzytkownika";
$conn->close();
?>