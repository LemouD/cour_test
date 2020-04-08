<?php
namespace Test;

use App\Calcul;

class CalculTest extends \PHPUnit\Framework\TestCase
{
    public $a = 5;
    public $b = 12;

    public function testAdd()
    {
        $toto = Calcul::add($this->a, $this->b);
        $this->assertEquals($this->a+$this->b, $toto, "Blocked");
    }

}