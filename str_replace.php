<?php
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

echo $newphrase;

$str = str_replace("ll", "", "goolld golly miss molly!", $count);
echo $count;



