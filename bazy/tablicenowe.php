<?php
 $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
                foreach($items as $key => $value){
					
				if($key == 'copier' || $key == 'ball' || $key == 'tape') {
					
                    echo "$section: \t $key \t ($value)<br>";
				}}
            echo "</pre>";    

	


?>

<?php

 $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    echo "<pre>";
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";
	
	
	$chessboard[6][3]= " "
	$chessboard[5][3]= "P"
	
	echo "<pre"
	foreach($chessboard as $row)
	{
		foreach($row as $piece)
		echo "$piece"
		echo "<br>"
	}
	
	echo "</pre>"

?>