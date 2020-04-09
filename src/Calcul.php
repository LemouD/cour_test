<?php

namespace App;


class Calcul
{
    /** @var float $a */
    private $a;

    /** @var float $b */
    private $b;

    public function __construct(float $a = 0, float $b = 0)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     * @return Calcul
     */
    public function setA(float $a): Calcul
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     * @return Calcul
     */
    public function setB(float $b): Calcul
    {
        $this->b = $b;
        return $this;
    }

    public function add(): float
    {
        return $this->a + $this->b;
    }

    public function sub(): float
    {
        return $this->a - $this->b;
    }

    public function mul(): float
    {
        return $this->a * $this->b;
    }

    public function div(): float
    {
        if($this->b == 0) {
            throw new \Exception('Operand 2 must be a non-zero number');
        }

        return $this->a / $this->b;
    }
}