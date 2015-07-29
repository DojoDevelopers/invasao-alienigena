<?php

namespace Dojo\Tests;

class OvniTest extends \PHPUnit_Framework_TestCase
{

	protected $ovni;

	public function setUp()
	{
		$this->ovni =  new \Dojo\Ovni();

	}
	public function testInstanceOfFirstClass()
	{
		$this->assertInstanceOf('Dojo\Ovni', new \Dojo\Ovni);
	}

	public function testValidarDados()
	{
		$cometas = [
            'HALLEY',
            'ENCKE',
            'WOLF',
            'KUSHIDA'
        ];

        $this->assertEquals($cometas, $this->ovni->comet);

        $group = [
             'AMARELO',
            'VERMELHO',
            'PRETO',
            'AZUL'
        ];

        $this->assertEquals($group, $this->ovni->group);
	}

	public function testValidarProdutoDoNome()
	{
		$expected = 30240;
		$this->assertEquals($expected, $this->ovni->getProdutoByName("LARANJA"));
	}

	public function testGetNumeroDaLetra()
	{
		$expected = 1;
		$this->assertEquals($expected, $this->ovni->getNumeroDaLetra('A'));

		$expected = 26;
		$this->assertEquals($expected, $this->ovni->getNumeroDaLetra('Z'));

		$expected = 1;
		$this->assertEquals($expected, $this->ovni->getNumeroDaLetra('a'));
	}

	public function testSort()
	{
		$this->assertEquals([1 => 'VERMELHO'], $this->ovni->sort());
	}
}
