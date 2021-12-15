<?php
namespace App\Test;

use App\Calculadora;

class CalculadoraTest extends \PHPUnit\Framework\TestCase {
	public function testSuma1()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(7, $calc->suma());
    }

}