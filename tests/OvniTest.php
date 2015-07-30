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

	public function testSort()
	{
		$this->assertEquals([0 => 'VERMELHO'], $this->ovni->sort());
	}
}
