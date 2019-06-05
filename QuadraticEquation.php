<?php


class QuadraticEquation
{
    public $a, $b, $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getterA()
    {
        return $this->a;
    }

    function getterB()
    {
        return $this->b;
    }

    function getterC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        $denta = $this->b * $this->b - (4 * $this->a * $this->c);
        return $denta;
    }

    function getRoot1()
    {
        if ($this->getDiscriminant() >= 0) {
            $r1 = (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        } else {
            $r1 = 0;
        }
        return $r1;
    }

    function getRoot2()
    {
        if ($this->getDiscriminant() >= 0) {
            $r2 = (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        } else {
            $r2 = 0;
        }
        return $r2;
    }

}