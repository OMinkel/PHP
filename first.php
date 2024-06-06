<?php
   //line comment
   /* block comment*/
    // to print in the document we use the word echo or print
    echo '<h1>Hello World<br>';
    print 'Hello World</h1>';
    // the disadvantage is that doesn't show colours that diference labels 
    
    echo date('Y-M-D'. '<br>'); // Added semicolon here
    
    $a = date('M');
    $b = date('Y');
    $days = date('d');
    
    
    if (date('m') == 6) {
        echo "we are in june of the year $b"; // Added concatenation operators and semicolon
    } else {
        echo 'we are in another month'; // Added concatenation operators and semicolon
    }

    
    for ($i=0; $i < $days; $i++) { 
        echo "<br>have passed $i days in the month ";
    }
    

    
?>