<?php

function createName() {
    $name = "ryujin" . PHP_EOL; // Local scope
}

createName();
echo $name . PHP_EOL; // Error