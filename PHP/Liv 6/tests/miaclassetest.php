<?php


use App\Codice\MiaClasse;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Codice/MiaClasse.php';

class MiaClasseTest extends TestCase
{
    public function testPrimaFunzione()
    {
        $miaClasse = new MiaClasse();
        $risultato = $miaClasse->primaFunzione();
        $this->assertEquals(2, $risultato);
    }

    public function testSecondaFunzione()
    {
        $miaClasse = new MiaClasse();
        $risultato = $miaClasse->secondaFunzione();
        $this->assertEquals(2, $risultato);
    }
}
