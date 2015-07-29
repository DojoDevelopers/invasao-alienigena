<?php namespace Dojo\Tests;

use Dojo\Ovni;

class OvniTest extends \PHPUnit_Framework_TestCase
{
    public function testSort()
    {
        $actual = (new Ovni)->sort();
        $this->assertEquals([], $actual);
    }
}
