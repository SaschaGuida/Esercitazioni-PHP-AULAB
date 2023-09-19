<?php 

/* 
Dato un array di numeri a scelta, scrivere un programma che calcoli 
la media solo dei numeri pari contenuti all’interno dell’array
*/

$numeri = [2, 5, 8, 12, 7, 6, 10, 100];

$sommaPari = 0;
$conteggioPari = 0;

for ($i = 0; $i < count($numeri); $i++) {
    if ($numeri[$i] % 2 == 0) {
        $sommaPari += $numeri[$i];
        $conteggioPari++;
    }
}

if ($conteggioPari > 0) {
    $mediaPari = $sommaPari / $conteggioPari;
    echo "La media dei numeri pari è: " . $mediaPari;
} else {
    echo "Nessun numero pari presente nell'array.";
}