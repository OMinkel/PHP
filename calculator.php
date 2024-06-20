<?php
function add($n1, $n2){
    echo $_GET['n1']. ' + ' .$_GET['n2'].' = ';
    echo '<h1>'.$n1.' + '.$n2.' = ';
    $add = $n1 + $n2;
    echo $add. '</br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" name="n1" value="">insert a number
    <input type="number" name="n2" value="">insert another number
    <input type="button" name="add">+
    <input type="button" name="add">*
    <input type="button" name="add">/
    <input type="button" name="add">
    <input type="button" name="add">
</body>
</html>