



<?php
    $str= ( "To zdanie składa 5 slow");
	$numTab = array(11,12,21,37,44,55,66,77,88);
	foreach($numTab as $i){
		echo "$i";
	}
	echo "<br> ilosc elementow ". count($numTab) . "<br>"; 
	
	$strTab = explode (" ",$str);
	
	foreach($strTab as $i){
		echo "$i";
	} 
	echo "<br> ilosc elementow : " .count($strTab) . "<br>";
	
	$numTabSorted = sort($numTab,  SORT_NUMERIC);
	
	$numTabReverseSort= rsort($numTab, SORT_NUMERIC);
	
	$strTabSort = sort($strTab, SORT_STRING);
	
	$strTabReverseSort = sort($strTab, SORT_STRING);
	
	foreach($numTabSorted as $i){
		echo " $i";
	}
	echo "<br> ilosc elementow: " . count($numTab) . "<br">

			  

    
	
	
	
	
	
	
	
	

?>
