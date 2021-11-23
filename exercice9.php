<?php
$z=1;
$max=0;
$pos=0;
do { 
    $x = readline("entrer le nombre numero ".$z." : ") ;
    $z++;
    if ($x>$max) {
        $max=$x;
        $pos=$z-1;
    }
  
}while ($x!=0);
echo "le max est ".$max;
echo "\n la position du max est: ".$pos;
?>