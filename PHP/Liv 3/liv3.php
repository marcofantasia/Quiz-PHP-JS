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

/* Soluzione
Array
(
    [Nome] => Mario
    [Cognome] => Rossi
)
*/


// Codice:
