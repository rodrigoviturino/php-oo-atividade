<?php

$salario= 1501;


if($salario <= 1000):
    echo "Uau! você não vai pagar nada de imposto!";
elseif ($salario <= 1500):
    echo "Puts! você precisa pagar 10% de imposto";
elseif ($salario <= 2000):
    echo "Puts! voce vai ter pagar 15% de imposto";
else:
    echo "Puts! voce terá que pagar 20% de imposto";
endif;
