<?php

{
    require "lib/myFunction.php";

    echo sayHello("Shin", "Ryujin") . PHP_EOL;
}

{
    require_once "lib/myFunction.php";
    require_once "lib/myFunction.php";

    echo sayHello("Shin", "Ryujin");
}
