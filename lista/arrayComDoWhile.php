<?php

$lista = array("a","b","c","d","e","f","g","h");

$i=0;
$total = count($lista);
do {
    print_r($lista[$i]);
    echo "<br>";
    $i++;
} while ($i < $total);