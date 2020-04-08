<?php

use PHPUnit\Framework\TestCase;
require('vendor/autoload.php');

class Calcul
{

    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function minus($a, $b)
    {
        return $a - $b;
    }

    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    public static function division($a, $b)
    {
        if($b === 0) {
            die;
        }

        return $a / $b;
    }
}
