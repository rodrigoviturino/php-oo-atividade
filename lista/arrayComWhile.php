<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

$array = array(
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10
);

$i = 0;

while($i < count($array)){
    print_r($array[$i]);
    echo "<br>";
$i++;
}