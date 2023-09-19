<?php 

/* 
Popola un array con i numeri da 0 a 90, dove ogni decina di numeri deve appartenere ad un'array separato

Es. risultato

    $tombola = [ 
    [0,1,,2,3,4,5,6,7,8,9], [...] , [...], ... 
    ];

Fare il var_dump dell’array e verificare che sia stato popolato correttamente

HINT: utilizza due cicli for annidati
*/

$tombola = array();

for ($i = 0; $i < 9; $i++) {
    $decina = array();
    for ($j = 0; $j < 10; $j++) {
        $numero = $i * 10 + $j + 1;
        $decina[] = $numero;
    }
    $tombola[] = $decina;
}

var_dump($tombola);