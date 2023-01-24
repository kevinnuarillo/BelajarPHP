<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";

addTodoList("Kevin");
addTodoList("Ryujin");
addTodoList("Jisoo");
addTodoList("Yerin");
addTodoList("Nayeon");

showTodoList();

viewRemoveTodoList();

showTodoList();