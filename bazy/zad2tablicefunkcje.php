<form action="./zad2tablicefunkcje.php" method="POST">
        <input type="text" name="text" placeholder="text" ></br><br>
        <button type="submit" name="subek" >Zostaw cos po sobie</button>
    </form>
    <form action="./zad2tablicefunkcje.php" method="POST">
        <input type="num" name="num" placeholder="num" ></br><br>
        <button type="submit" name="submit" >Zostaw cos po sobie</button>
		   <button type="reset" name="reset" >Reset</button>
    </form>

    <?php

       if(isset($_POST['subek'])){
            one();
    }
        if(isset($_POST['submit'])){
            two();
    }

    function one() {
        $text = $_POST['text'];
        
        if(strlen($text)== 0) {
            echo "<br>Brak tekstu";
        }
        else{
            echo "<br>Jest tekst: ".$text;
        }

    }



    function two() {
        $num = $_POST['num'];

        if(strlen($num)== 0) {
            echo "<br>Gdzie liczba";
        }
        else{
            echo "<br>Jeeest liczbaa ".$num;
        }

    }
    
	function three(){
		$res = $_POST['res'];
		
		array_pop($res);
		echo "usunieto";
	}
		

    ?>