<?php 

/* 
Dato un array contenente una serie di array associativi di utenti con nome, 
cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o 
“Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
*/

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name'=> 'Mario', 'surname'=> 'Felice', 'gender'=> 'NB'],
    ['name'=> 'Andrea', 'surname'=> 'Guida', 'gender'=> 'F'],
    ['name'=> 'Francesco', 'surname'=> 'Ingegnere', 'gender'=> 'NB']
];

foreach ($users as $user) {
    $greetings = 'Buongiorno' . " " ;
    
    if ($user['gender'] == 'M') {
        $greetings .= 'Sig. ';
    } elseif ($user['gender'] == 'F') {
        $greetings .= 'Sig.ra ';
    }
    
    $greetings .= $user['name'] . ' ' . $user['surname'];
    
    echo $greetings . "\r\n";
}