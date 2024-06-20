<?php
if (isset($_GET['btn'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $prof = $_GET['prof'];
    
    if ($age > 18) {
        echo "Hello $name you are $age years old and your profession is $prof <br>";
    } else {
        echo "Hello $name you are a younger person of $age years old and you're studying $prof <br>";
    }
    
}else {
    
}

for ($i=0; $i < $age; $i++) { 
    echo "$i. $prof <br>";
}

?>