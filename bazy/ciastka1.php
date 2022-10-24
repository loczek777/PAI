<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action= "./ciastka1.php" method="POST">
<input type="submit" value="delete" name="delete">
<?php
if(isset($_SESSION["x"]) || (isset($_SESSION["y"]))){
echo "Lubie kolor ten " . $_SESSION["x"] . "<br>";
echo "Lubie zwierze te hehe " . $_SESSION["y"] . ".";
}

if(isset($_POST['delete'])){
		session_destroy();
		echo "delete frajera";
}
?>

</body>
</html>