<?php
$z=1;
$tot=0;

do { 
    $x = readline("entrer le prix du produit ".$z." : ") ;
    $z++;
    $tot= $tot+$x;
  
}while ($x!=0);
echo "le total de vos achats est :".$tot."Euro";
$mont= readline("\n entrer votre montant : ");
$due=$mont - $tot;
echo "la monnaie est : ".$due." Euro";
?>