<?php
$v = [];
$c = [];

//this is used to fill an array with random numbers
for ($i=0; $i < 10; $i++) { 
    $v[$i]=rand(0,1);
    echo "$v[$i] - ";
}

echo "<br>";
//this is a for cicle used to count a defined amount of times
for ($i=0; $i < 10; $i++) { 
    //this is used to compare the numbers in the array 
    if ($v[$i] == 0) {
        //this is used to put the opposite number in another array
        array_push($c, 1);
    } else {
        //this is used to the same of above
        array_push($c, 0);
    }

    echo "$c[$i] - ";
}




?>