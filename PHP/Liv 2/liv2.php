<?php

// dato un array di stringhe, ottenere il numero di telefono di ogni persona in un array

$persone = [
    'Nome: Mario, Cognome: Rossi, Telefono: 3331234567',
    'Nome: Giuseppe, Cognome: Verdi, Telefono: 3337654321',
    'Nome: Carlo, Cognome: Bianchi, Telefono: 3334567890',
    'Nome: Giovanni, Cognome: Neri, Telefono: 3332345678',
];

// Soluzione livello 2

$numeriDiTelefono = [];

foreach($persone as $persona){
    preg_match('/Telefono: (\d+)/', $persona, $id);
    if(isset($id[1])){
        $numeriDiTelefono[] = $id[1];
    }
}

print_r($numeriDiTelefono);
