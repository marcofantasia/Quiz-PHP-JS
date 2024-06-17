<?php

// Dato un testo, restituire il numero di parole che contengono un numero di lettere dispari
$testo = 'Questo è un testo di esempio per effettuare questo esercizio';

// Soluzione livello 1:

function contaParoleConLettereDispari($testo){

    $parole = explode(' ', $testo);
    $contatore = 0;

    foreach($parole as $parola){
        $parola = preg_replace('/[^\p{L}]/u', '', $parola);
        if(mb_strlen($parola) % 2 != 0){
            $contatore++;
        }
    }
    return $contatore;
    
}

echo contaParoleConLettereDispari($testo);
