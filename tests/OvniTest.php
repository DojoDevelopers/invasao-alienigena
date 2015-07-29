<?php namespace Dojo\Tests;

use Dojo\Ovni;

class OvniTest extends \PHPUnit_Framework_TestCase
{
    public function testSort()
    {
        $expected = ['VERMELHO'];
        $actual = (new Ovni)->sort();
        $this->assertEquals($expected, $actual);
    }
}
