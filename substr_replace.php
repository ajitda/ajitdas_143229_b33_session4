<?php
$input = array('A: XXX', 'B: XXX', 'C: XXX');

echo implode('; ', substr_replace($input, 'YYY', 3, 3))."\n";