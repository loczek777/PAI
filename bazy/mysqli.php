<?php
$hostname = 'localhost';
$database = 'bazunia'; 
$username = 'root';
$password = ''; 

$conn = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM klient";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)){
    echo $row[0]. ' '. $row[1]. ' '. $row[2]. ' '. $row[3]."<br>";
}

$ID = "id";
$imie = "imie";
$Nazwisko = "melepeta";
$Adres_email = "gmail";  

$sql = "INSERT INTO `klient` (`id`, `imie`, `melepeta`, `gmail`)
        VALUES (NULL, '$ID', '$imie', '$Nazwisko', '$Adres_email')";

if($result = mysqli_query($conn, $sql)) echo "Dodales";
else echo "Nie dodales";

mysqli_close($conn);

?>
