<?php
    $paper[0] = "Ksiazka";
    $paper[1] = "Autor";
    $paper[2] = "Tytul";
    $paper[3] = "Rodzaj";

    for($j =3; $j >= 0; --$j){
        echo  "$paper[$j] <br>" ;
    }
    
?>

<?php
$tab ["good"] = "dobrze";
$tab ["bad"] = "zle";
$tab ["baddest"] = "najgrzoej";

foreach($tab as $item => $description){
        echo "$item: $description <br>";
		
    }
	
	echo $tab["good"]."<br>" .$tab["baddest"]

?>