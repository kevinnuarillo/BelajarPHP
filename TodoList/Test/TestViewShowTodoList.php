<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Kevin");
addTodoList("Nikah");
addTodoList("Dengan");
addTodoList("Jisoo");

viewShowTodoList();