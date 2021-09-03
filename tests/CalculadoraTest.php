<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	private $calc;
	
	public function setUp(): void
	{
		$this->calc = new Calculadora;
	}
	
	public function testSoma()
	{
		$this->calc->setValores([5,20]);
		$this->assertEquals(25, $this->calc->soma());
	}
	
	public function testSubtrai()
	{
		$this->calc->setValores([7,5,3]);
		$this->assertEquals(-15, $this->calc->subtrai());
	}
	
	public function testMult()
	{
		$this->calc->setValores([2,5,3]);
		$this->assertEquals(30, $this->calc->mult());
	}	
	
	//Teste para divisão comum
	public function testDiv1()
	{
		$this->calc->setValores([10,2]);
		$this->assertEquals(5, $this->calc->div());
	}
	
	//Teste para verificar se a divisão por zero é tratada
	public function testDiv2()
	{
		$this->calc->setValores([10,0]);
		$this->assertEquals('Erro!', $this->calc->div());
	}
		
	//Teste para verificar se é realizada a divisão quando tem-se mais de dois valores no vetor
	public function testDiv3()
	{
		$this->calc->setValores([7,5,3]);
		$this->assertEquals('Para divisão, são aceitos apenas dois valores!', $this->calc->div());
	}
	
}