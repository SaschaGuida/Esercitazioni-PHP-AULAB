<?php

//? scrivere una funzione che consenta di erificare l'idoneità di una password secondo alcuni criteri

//! Lunghezza di almeno 8 caratteri
//! Contenga almeno un carattere maiuscolo
//! Contenga almeno un carattere speciale
//! Contenga almeno un numero


function getPassword() {
    return readline("Inserisci una password sicura: ");
}

function checkPwd(string $password) {
    while (true) {
        if (!checkLength($password)) {
            echo "La password deve contenere almeno 8 caratteri.\n";
        } elseif (!checkUpper($password)) {
            echo "La password deve contenere almeno una lettera maiuscola.\n";
        } elseif (!checkSpecial($password)) {
            echo "La password deve contenere almeno un carattere speciale tra @, !, #, &, $.\n";
        } elseif (!checkNumber($password)) {
            echo "La password deve contenere almeno un numero.\n";
        } else {
            echo "La password è sicura.\n";
            break;
        }

        $password = getPassword();
    }
}

function checkLength(string $password) {
    return strlen($password) >= 8;
}

function checkUpper(string $password) {
    return preg_match('/[A-Z]/', $password);
}

function checkSpecial(string $password) {
    $specialChars = ['@', '!', '#', '&', '$'];
    foreach ($specialChars as $char) {
        if (strpos($password, $char) !== false) {
            return true;
        }
    }
    return false;
}

function checkNumber(string $password) {
    return preg_match('/[0-9]/', $password);
}

$password = getPassword();
checkPwd($password);