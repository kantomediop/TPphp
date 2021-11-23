<?php
function fact($a){
    $fac=1;
    for ($i=1; $i < $a ; $i++) { 
        $fac=$fact*$i;

    }
    return $u;
}
$n=readline("entrer le nombre de chevaux partants :");
$p=readline("entrer le nombre de chevaux joues :");
$X=(fact($n))/(fact($n-$p));
$Y=(fact($n))/(fact($p)*fact($n-$p));
$ordre=1/$X;
$desordre=1/$Y;
echo" la valeur dans l'ordre est :".$ordre;
echo "\n la valeur dans le desodre est :".$desodre;

?>