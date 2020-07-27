<?php

$a="Medha";
$b="Bhowmik";
echo "$a";
echo "<br>";
echo strlen($a);
echo "<br>";
echo "the length is ". strlen($a);
echo "<br>";
echo "$a " . " $b";
echo "<br>";
$c="My name is Medha";
echo str_word_count($c);
echo "<br>";
echo strrev($c);
echo "<br>";
echo strpos($c,"Medha");
echo "<br>";
echo str_replace("Medha" , "Rimi" , $c);
echo "<br>";
echo str_repeat($c,5);
echo "<br>";
echo "<pre>";
echo rtrim("   this is a good boy");
echo "<br>";
echo ltrim("   this is a good boy");
echo "</pre>";







?>