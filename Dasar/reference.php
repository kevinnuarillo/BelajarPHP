<?php

$name = "Ryujin";

$otherName = &$name;
$otherName = "Jeong Yeon";

echo $name . PHP_EOL;


// pass by reference

function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;