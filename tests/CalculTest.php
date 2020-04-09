<?php

namespace Test;


use App\Calcul;


class CalculTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd() {
        $a = 10;
        $b = 20;
        $result = 30;
        $calc = new Calcul();
        $calc->setA($a)->setB($b);
        $this->assertEquals($result, $calc->add());
    }

    public function testSub() {
        $a = 20;
        $b = 5;
        $result = 15;
        $calc = new Calcul();
        $calc->setA($a)->setB($b);
        $this->assertEquals($result, $calc->sub());
    }

    public function testMul() {
        $a = 20;
        $b = 5;
        $result = 100;
        $calc = new Calcul();
        $calc->setA($a)->setB($b);
        $this->assertEquals($result, $calc->mul());
    }

    public function testDiv() {
        $a = 20;
        $b = 4;
        $result = 5;
        $calc = new Calcul();
        $calc->setA($a)->setB($b);
        $this->assertEquals($result, $calc->div());
    }

    public function testDivException() {
        $a = 20;
        $b = 0;
        $calc = new Calcul();
        $this->expectException(\Exception::class);
        $calc->setA($a)->setB($b)->div();
    }
}