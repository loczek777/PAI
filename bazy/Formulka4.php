<form action="./Formulka4.php" method="POST">
 <div>

<h1> Ankieta</h1>
<br>
<p> Robota: <p>
	<select name="robota">
		<option>Cos</option>
		<option>Drugie cos</option>
		<option> Nic </option>
	</select>
<br>
<p>Dodatki:<p>
<input type="radio" name="dod" value="x"> Kibel
<input type="radio" name="dod" value="y"> Dzwig
<input type="radio" name="dod" value="z"> Krysztal
<br>
<p> Kwota: <p>
<input type="checkbox" name="zl"> 20Ziko
<input type="checkbox" name="zl1"> 40ziko 
<input type="checkbox" name="zl2"> tyisak 

<input type="submit" value="Wyslij ankiete" name="poka">
</form>

<?php

if(isset($_POST['poka'])){

if(isset($_POST['robota'])){
echo "Robota: " . $_POST['robota']. "<br>";
}

if(isset($_POST['dod'])){
	if($_POST['dod'] == 'x') echo "Wybrales kibel" . "<br>";
	elseif(($_POST['dod']) == 'y') {
		echo "Wybrales dzwig" . "<br>";
	}
	else echo "Wybrales Krysztal" . "<br>";
}

if(isset($_POST['zl'])) echo "20Ziko";
if(isset($_POST['zl1'])) echo "40ziko";
if(isset($_POST['zl2'])) echo "tysiak";

}



?>
</body>