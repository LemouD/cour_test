<?php

require('../vendor/autoload.php');

use App\Calcul;
Use Test\CalculTest;

function d(...$values) {
    foreach($values as $value) {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }
}

function dd(...$values) {
    d(...$values);
    die;
}



$calc = new Calcul();

d($calc->setA(12)->setB(5)->add());
d($calc->setA(76)->setB(3)->div());

$test = new CalculTest();
$test->testAdd();
?>