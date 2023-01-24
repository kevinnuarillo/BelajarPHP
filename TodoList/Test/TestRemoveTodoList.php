<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Shin");
addTodoList("Ryu");
addTodoList("Jin");
addTodoList("Kevin");
addTodoList("Nuarillo");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(3);

showTodoList();

// yang tidak ada value/number nya

removeTodoList(4);

$success = removeTodoList(4);

var_dump($success);