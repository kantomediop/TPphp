<?php
$z=1;
$max=0;
$pos=0;
for ($i=0; $i < 20 ; $i++) { 
    $x = readline("entrer le nombre numero 1: ");
    $z++;
    if ($x>$max) {
        $max=$x;
        $pos=$z-1;
    }
    
}
echo "le max est ".$max;
echo "\n la position du masx est: ".$pos;
?>