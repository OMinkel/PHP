<?php
$v = [];
$times = 0;
$count = 0;

//this is used to make a cicle, while the number of times is under 5 it will continue making it and it's used to count the times that it drop heads if it drops heads 5 times it finishes
while ($times < 5) {
    //this is used to drop heads and tails
    array_push($v, rand(0,1));
    //this is an if statement that is used to compare if it is heads or tails if is heads it is 1 time more
    if ($v[$count] == 1) {
        $times++;
        echo "heads<br>";
    } else {
        echo "tails<br>";
    }
    //this is used to count the number of rounds it takes to
    $count++;
}

echo "it cost $count rounds to drop heads 5 times";
?>