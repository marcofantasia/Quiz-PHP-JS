<?php

// dato un input XML, trasforma il codice in un array di oggetti tipizzati, e stampa il risultato in JSON

$xml = <<<EOF
    <pazienti>
        <paziente>
            <nome>Mario</nome>
            <cognome>Rossi</cognome>
            <eta>24</eta>
            <alive>true</alive>
            <figli>
                <figlio>
                    <nome>Giuseppe</nome>
                    <cognome>Rossi</cognome>
                    <eta>3</eta>
                    <alive>true</alive>
                </figlio>
            </figli>
        </paziente>
        <paziente>
            <nome>Giuseppe</nome>
            <cognome>Verdi</cognome>
            <eta>30</eta>
            <alive>false</alive>
            <figli>
                <figlio>
                    <nome>Carlo</nome>
                    <cognome>Verdi</cognome>
                    <eta>5</eta>
                    <alive>true</alive>
                </figlio>
                <figlio>
                    <nome>Giovanni</nome>
                    <cognome>Verdi</cognome>
                    <eta>10</eta>
                    <alive>true</alive>
                </figlio>
            </figli>
        </paziente>
    </pazienti>
EOF;

/* Risultato:
[
    {
        "nome": "Mario",
        "cognome": "Rossi",
        "eta": 24,
        "alive": true,
        "figli": [
            {
                "nome": "Giuseppe",
                "cognome": "Rossi",
                "eta": 3,
                "alive": true
            }
        ]
    },
    {
        "nome": "Giuseppe",
        "cognome": "Verdi",
        "eta": 30,
        "alive": false,
        "figli": [
            {
                "nome": "Carlo",
                "cognome": "Verdi",
                "eta": 5,
                "alive": true
            },
            {
                "nome": "Giovanni",
                "cognome": "Verdi",
                "eta": 10,
                "alive": true
            }
        ]
    }
]
*/

// Codice:
