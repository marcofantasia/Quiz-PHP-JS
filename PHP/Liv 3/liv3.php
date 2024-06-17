<?php

// Dato un codice HTML, ottenere un array associativo contenente il nome e cognome della persona indicata

$html = <<<EOF
    <html>
        <head>
            <title>Test</title>
        </head>

        <body>
            <table>
                <tr>
                    <td>Nome</td>
                    <td>Cognome</td>
                </tr>
                <tr>
                    <td>Mario</td>
                    <td>Rossi</td>
                </tr>
        </body>
    </html>
EOF;

// soluzione livello 3 

$dom = new DOMDocument;
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);
$rows = $xpath->query('//table/tr');

$associativeArray = [];

if ($rows->length > 1) {
    $nameRow = $rows->item(1);
    $columns = $nameRow->getElementsByTagName('td');

    if ($columns->length >= 2) {
        $associativeArray['Nome'] = $columns->item(0)->nodeValue;
        $associativeArray['Cognome'] = $columns->item(1)->nodeValue;
    }
}

print_r($associativeArray);
