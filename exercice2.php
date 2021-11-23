<?php
$x = random_int(10,20);
do {
    $x= readline("Donner un nombre compris entre 10 et 20: ");
    if ($x<10) 
        echo " plus grand \n";
        else if ($x>20) 
            echo " plus petit \n";
        
    
  } while ($x<10 || $x>20);
  echo "bravo";

?>