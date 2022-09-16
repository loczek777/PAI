<?php

	$liczba1 = 1;
	$liczba2 = 1;
	
	 for ($liczba1 = 1; $liczba1 <= 10; ++$liczba1)
    {
        
        echo "<br>";
		
		for($liczba2 = 1; $liczba2 <=10; $liczba2++){
			
			echo $liczba2 ."*" .$liczba1 ."=" .$liczba2 * $liczba1 ."<br>";
			
		}
	}	
	
	




?>


<hr>


<?php
$x=6;
$y=5;
for($r=1;$r <= $x;$r++) {
	
for($i=1;$i<=$y;$i++) 
{


	echo '*';
	
}
echo '<br>';



}


?>


<hr>



<?php
    $count = 1;

    while($count <=12)
    {
        echo "$count pomnożone przez 12 wynosi ". $count * 12 .
        ++$count;
    }
?>


<?php
    $count = 1;
    do{
        echo "$count pomnożone przez 12 wynosi ".$count * 12.;
    }while(++$count <= 12);
?>


<?php
    for($count = 1; $count <= 12; ++$count)
    {
        echo "$count pomnożone przez 12 wynosi ". $count * 12;
        echo "<br>";
    }
?>

