<?php

// Global Scope
{
    $nama = "Kevin";

    function sayHello() {
        global $nama;
        echo $nama . PHP_EOL; // Error
    }

    sayHello();
}

{
    $nami = "Kevin";

    function sayHi() {
        global $nami; // global keyword
        echo $nami . PHP_EOL;
    }

    sayHi();
}