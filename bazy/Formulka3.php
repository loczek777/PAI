
<form method="POST" action="Formulka3.php">
    <b>Pseudonim:</b> <input type="text" name="login"><br><br>
    <b>Komentarz:</b> <textarea name="Komentarz" cols="x" rows="y">Tu wpisz swoj komentarz</textarea> <br>
	<input type="submit" value="Pokaz komentarz" name="poka">
</form>

<?php

if(isset($_POST['login'])){
echo "Pseudonim: " . htmlspecialchars($_POST['login']). "<br>";
}

if(isset($_POST['Komentarz'])){
echo "Komentarz: " . htmlspecialchars($_POST['Komentarz']).  $_POST['Komentarz'] . "<br>";} 





?>
