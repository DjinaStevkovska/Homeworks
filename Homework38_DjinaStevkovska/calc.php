<?php

include 'includes/Calc.php';

use Calculator\Calc;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calc = $_POST['cal'];

// create (instanciate) Calc class with paramters $num1, $num2, $calc
$calcClass = new Calc($num1, $num2, $calc);

// output result
echo 'The result is: '.$calcClass->calcMethod();

?>

<a href="./index.php">Back to Calculator</a>
