<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$x =12;
$y ='ciacho';  

$_SESSION["x"] = $x;
$_SESSION["y"] = $y;
echo "Dziala dziadzie.";
?>

</body>
</html>