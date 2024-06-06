<?php

$add = $_GET['OZN1'] + $_GET['OZN2'];
$x = $add * $_GET['minutes'];
echo "the value that you have to pay is ". "$". $x . "<br>"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>forms</h1>
    <form action="captures.php" method="get">
    
    From where did you did the call <br>

    <input type="radio" name="OZN1" id="1" value="2">America Norte<br>
    <input type="radio" name="OZN1" id="2" value="3">America Sur<br>
    <input type="radio" name="OZN1" id="3" value="4">America Central<br>
    <input type="radio" name="OZN1" id="4" value="1">Europa<br>

    <button type="submit"> 
    Send
    </button> <br>

    Where was the destination of your call <br>

    <input type="radio" name="OZN2" id="1" value="2">America Norte<br>
    <input type="radio" name="OZN2" id="2" value="3">America Sur<br>
    <input type="radio" name="OZN2" id="3" value="4">America Central<br>
    <input type="radio" name="OZN2" id="4" value="1">Europa<br>

    <button type="submit"> 
    Send
    </button> <br>

    How many minutes did you pass on the call <br>

    <input type="number" name="minutes" id="1">
    
    <button type="submit"> 
    Send
    </button>
    
    </form>

</body>
</html>