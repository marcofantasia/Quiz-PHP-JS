<?php

// dato un array di stringhe, ottenere l'indirizzo di residenza di ogni utente

$persone = [
    'Fabio Cappellieri - Via Inghilterra 1, 88900 Crotone',
    'Antonio Rossi - Via Mario Rossi 5, 10100 Milano',
    'Stefano Venneri - Minami-Azabu 4-11-44, Shinjuku-ku, Tōkyō',
    'Pinco Pallino - Trav. 2 - Via Roma 10, 10100 Torino',
];

// soluzione livello 2-2

$indirizzi = [];

foreach($persone as $persona){
    preg_match('/- (.*)/', $persona, $id);
    if(isset($id[1])){
        $indirizzi[] = $id[1];
    }
}

print_r($indirizzi);
