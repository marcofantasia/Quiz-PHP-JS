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

// Soluzione livello 4 

$pazienti = new SimpleXMLElement($xml);


$pazientiArray = [];


foreach ($pazienti->paziente as $paziente) {
    
    $pazienteObj = new stdClass();
    $pazienteObj->nome = (string) $paziente->nome;
    $pazienteObj->cognome = (string) $paziente->cognome;
    $pazienteObj->eta = (int) $paziente->eta;
    $pazienteObj->alive = (bool) $paziente->alive;

    $figliArray = [];

    
    foreach ($paziente->figli->figlio as $figlio) {
        $figlioObj = new stdClass();
        $figlioObj->nome = (string) $figlio->nome;
        $figlioObj->cognome = (string) $figlio->cognome;
        $figlioObj->eta = (int) $figlio->eta;
        $figlioObj->alive = (bool) $figlio->alive;

       
        $figliArray[] = $figlioObj;
    }

    
    $pazienteObj->figli = $figliArray;

    
    $pazientiArray[] = $pazienteObj;
}


$jsonResult = json_encode($pazientiArray, JSON_PRETTY_PRINT);
echo $jsonResult;
