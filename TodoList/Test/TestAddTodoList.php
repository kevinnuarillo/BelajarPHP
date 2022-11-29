<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Halo");
addTodoList("Ryujin");

var_dump($todoList);