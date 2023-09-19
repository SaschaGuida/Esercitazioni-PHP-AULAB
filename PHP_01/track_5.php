<?php

/* 
    Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”
    con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso

    Es.
    $corsoHackademy = [ "docenti" => ["daniele", "emanuele"], "studenti" => ["pippo", "franco", "coppola"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];

    Usate questo array per stampare in console una frase di presentazione a piacere:
    Es.
    “Sono pippo e sto studiando bootstrap con daniele” 
    */

    $corsoHackademy = [
        "docenti" => ["Jeremy" , "Andrea" , "Daniele" ],
        "studenti" => ["Francesco" , "Dario" , "Sascha"],
        "argomenti" => ["HTML" , "JS" , "React"]
    ];

    $pres1 = "Piacere sono " . $corsoHackademy['studenti'][1] . " e sto studiando " . $corsoHackademy['argomenti'][0] . " con il professore " . $corsoHackademy['docenti'][1];

    echo $pres1 ."\n";

    $pres2 = "Piacere sono " . $corsoHackademy['studenti'][0] . " e sto studiando " . $corsoHackademy['argomenti'][0] . " con il professore " . $corsoHackademy['docenti'][2];

    echo $pres2 ."\n";

    $pres3 = "Piacere sono " . $corsoHackademy['studenti'][2] . " e sto studiando " . $corsoHackademy['argomenti'][2] . " con il professore " . $corsoHackademy['docenti'][0];

    echo $pres3 ."\n";