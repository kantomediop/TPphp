<?php
 
$nombre = readline("donner un nmbr");
$fact = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}
 
echo 'Le factoriel de ' . $nombre . ' noté ' .$nombre .'! est: '.$fact;
?>