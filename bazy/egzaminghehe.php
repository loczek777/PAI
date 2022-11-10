<?php
            $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            $sql = "SELECT nazwa, wystepowanie FROM 'ryby' WHERE styl_zycia = 1 ";
            $wynik = mysqli_query($conn, $sql);
            while ($wiersz = $wynik->fetch_assoc()) {
                $nazwa = $wiersz['nazwa'];
			$wystepowanie = $wiersz['wystepowanie'];
			}
                echo "<li>$nazwa, wystepowanie: $wystepowanie </li>";
?>  

   




 