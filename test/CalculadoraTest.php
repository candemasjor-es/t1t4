<?php
namespace App\Test;

use App\Calculadora;

class CalculadoraTest extends \PHPUnit\Framework\TestCase {
    public function testDividir() {
        $calc = new Calculadora(6, 10);
        $this->assertEquals(0.6, $calc->dividir());
    }

    public function testMultiplicar(){
        $calc = new Calculadora(9, 9);
        $this->assertEquals(81, $calc->mulstiplicar());
    }
    

}