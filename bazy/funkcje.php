

<form method="POST" action="funkcje.php">
    <b>Liczba:</b> <input type="number" name="wiek"><br><br>
    
    <input type="submit" >
</form>

<br>

<?php
function wiek($liczba) {
 if ($liczba <= 0) {
   echo "??";
 } else if ($liczba <=18){
   echo "mlodo";
 } 
 else if ($liczba <=39){
   echo "dorosly";
 } 
 else{ "stara kwa";
}
}
if(isset($_POST['wiek'])){
echo "Masz: " . (int)$_POST['wiek']. "lata";
$wyswietl = (int)$_POST['wiek'];
wiek($wyswietl);
}
?>
