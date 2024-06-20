<?php
$v = [];
$v2 = [];
$c = [];

//this is a for cicle and is used to iterate a defined number of times
for ($i=0; $i < 10; $i++) {
    //this is used to fill the array with random numbers
    $v[$i]=rand(0,1);
    echo "$v[$i] - ";
}

echo "<br>";

//this is a for cicle and is used to iterate a defined number of times
for ($i=0; $i < 10; $i++) {
    //this is used to fill the array with random numbers
    $v2[$i]=rand(0,1);
    echo "$v2[$i] - ";
}

echo "<br>";

//this is a for cicle 
for ($i=0; $i < 10; $i++) { 
    //this is used to compare v and v1 
    if ($v[$i] and $v2[$i]) {
        //if the two number are 1 it is 1
        array_push($c, 1);
    } else {
        //if the number is 1 and 0 it is 0, if the two numbers are 0 it´s 0
        array_push($c, 0);
    }
    echo "$c[$i] - ";
}
?>