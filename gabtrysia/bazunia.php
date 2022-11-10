<?php
$hostname = 'localhost'; 
$database = 'bazunia'; 
$username = 'root'; 
$password = ''; 

$conn = new mysqli($hostname, $username, $password, $database);

$ID = "id";
$imie = "imie";
$Nazwisko = "nazwisko";
$Adres_email = "adresmail";

$sql = "INSERT INTO `klient` (`ID`, `imie`, `Nazwisko`, `Adres_email`)
        VALUES (NULL, '$imie', '$nazwisko', '$Adres_email')";

if($result = $conn -> query($sql)) echo "Dodano nowy rekord";
else echo "Nie udało się dodać nowego rekordu";

?>
?>