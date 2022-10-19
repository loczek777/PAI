 <?php


    $array_tablica1  = [11,12,13,14,66,69,88,77,43,55];
    $tablica2 = "Elo elo elo elo Igi";
   
    print_r($array_tablica1);
    echo " </br>";
    echo $tablica2."</br>"."</br>";

    
    $array_tablica3 = explode(' ', $tablica2);

    
    echo "Ilość w tablica1: ".count($array_tablica1)."</br>";
    echo "Ilość w tablicy3: ".count($array_tablica3)."</br>"."</br>";

    
    sort($array_tablica1, SORT_NUMERIC);
    sort($array_tablica3, SORT_STRING);
    
    echo "Posortowana tablica1: ";
    print_r($array_tablica1);
    echo "</br>";

    echo "Posortowana tablica3: ";
    print_r($array_tablica3); 
    echo"</br>"."</br>";
    
    

	shuffle($array_tablica1);
	shuffle($array_tablica3);

	echo "Potasowane liczby: ";
	print_r($array_tablica1);
	echo "</br>";

	echo "Potasowane zdanie: ";
	print_r($array_tablica3);
	echo "</br>"."</br>";

    
    $array_tablica4 = array("Blue cica", "Red maciach", "Yellow cake", "Czekoladowe oko", "Bomba w odb", "Krowka mleczna");
    echo "Zerowy element: ".current($array_tablica4)."<br>";

    next($array_tablica4);
    next($array_tablica4);
    echo "Dwa elementy w przod yahoo: ".current($array_tablica4)."<br>";

    reset($array_tablica4);
    echo "Wskaźnik: ".current($array_tablica4)."<br>";
    ?>        
