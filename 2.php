<?php
$v = [];
$c = [];

//this is a for cicle and is used to iterate a defined number of times
for ($i=0; $i < 10; $i++) {
    //this is used to fill the array with random numbers
    $v[$i]=rand(0,1);
    echo "$v[$i] - ";
}

echo "<br>";

//this is another for cicle
for ($i=0; $i < 9; $i++) { 
    //this is used to compare one number with the following number
    if ($v[$i] == $v[$i+1]) {
        //if the number is the same of the following number is 0
        array_push($c, 0);
    } else {
        //if not is 1
        array_push($c, 1);
    }
    echo "$c[$i] - ";
}
?>