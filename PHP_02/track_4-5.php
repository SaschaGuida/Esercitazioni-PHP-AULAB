<?php 

/* 
Track_4
- Creare una variabile $temperatura ed utilizzando if, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
- Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
- Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.

Track_5
Integra il seguente array con la traccia precedente, stampando per ogni riga la stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”
*/

echo "Traccia 4 " ."\n";

$temperatura = "-10";

if ($temperatura < 0) {
    echo "Surgelati";
} else {
    if ($temperatura < 15) {
        echo "Fa freddo";
    } else {
        if ($temperatura <= 25) {
            echo "Fa caldo";
        } else {
            echo "Fa molto caldo";
        }
    }
}
echo "\r\n";
echo "\r\n";

echo  "Traccia 5" ."\r\n";

$temperature = [ 
    "Venezia" => 16, 
    "Bari" => 32, 
    "Roma" => 28, 
    "Napoli" => 30, 
    "Milano" => 13, 
    "Palermo" => 14, 
    "Torino" => 24, 
    "Lecce" => 27, 
    "Genova" => 30, 
    "Catania" => 11, 
    "Cosenza" => 9, 
];

foreach ($temperature as $citta => $temperatura) {
    echo "A $citta fa ";

    if ($temperatura < 0 ) {
        echo "PO-PO-PO-PO-POLARETTI";
    } elseif ($temperatura < 15) {
        echo "freddo.";
    } elseif ( $temperatura >= 15 && $temperatura <= 25) {
        echo "caldo.";
    } else {
        echo "molto caldo.";
    }

    echo "\n";

}