<?php

$hello  = "\t\tHello World";
$test = "\nThis is BITM";

var_dump( $hello);
var_dump($test);
echo $test;
echo "<br>";
$trimmed = rtrim($hello, "Hdle");
$testtrim = trim($test);

var_dump($trimmed);
var_dump($testtrim);