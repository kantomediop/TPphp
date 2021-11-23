<?php
$x=1;
$n = readline("donner un nombre");
for ($i=1; $i<$n ; $i++) { 
    $x += $i;
    $x++;
    }
echo "la somme des ".$n."premiere nombre est: ".$x;
?>