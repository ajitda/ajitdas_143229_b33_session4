<?php
$input = "Abatar";
echo str_pad($input, 10).'<br>';
echo str_pad($input, 10, "-=", STR_PAD_LEFT).'<br>';
echo str_pad($input, 10, "_", STR_PAD_BOTH).'<br>';
echo str_pad($input,  6, "___").'<br>';
echo str_pad($input,  3, "*").'<br>';