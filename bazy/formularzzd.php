
<form method="POST" action="formularzzd.php">
    <b>Login:</b> <input type="text" name="login"><br><br>
    <b>Hasło:</b> <input type="password" name="haslo1"><br>
    <b>Zapamietaj mnie:</b> <input type="checkbox" name="pamietaj"><br>
    <input type="submit" value="Utwórz konto" name="rejestruj">
</form>

<?php

if(isset($_POST['login'])){
echo "Login: " . htmlspecialchars($_POST['login']). "<br>";
}

if(isset($_POST['haslo1'])){
echo "Haslo: " . htmlspecialchars($_POST['haslo1']). "<br>";}


if(isset($_POST['pamietaj'])) echo "Zapamietaj: "; 
else echo "Nie zostalo wybrane";







?>
