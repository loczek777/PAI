<html>
<head>
    <title> PAI </title>
</head>
<body>

    <?php
        
    require_once 'essa1.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

    $query = "SELECT * FROM fantasy";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'id: ' .$row['ID'] .'<br>';
        echo 'tytul: ' .$row['tytul'] .'<br>';
        echo 'autor: ' .$row['autor'] .'<br>';
		echo 'rok wydania: ' .$row['rok wydania'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
   
    ?>

</body>
</html>