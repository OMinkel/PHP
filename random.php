<?php

$v = [];
$c = [];
if (isset($_GET['Send'])) {
    
    for ($i = 0; $i < $_GET['num']; $i++) {
        $v[$i]=rand(0,1);
        echo "$v[$i]- ";
    }

    echo "<br>";

    for ($i = 0; $i < 10; $i++) { 
        if ($v[$i] == 0) {
            array_push($c, 1);
        } else {
            array_push($c, 0);
        }

        echo "$c[$i] -";
    }
} else {
    header('location:random.php');
    echo 'You have to fill out the form';
    echo '<a href="random.php">Go to the form</a>';
}




