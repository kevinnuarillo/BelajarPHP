<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Mencari kerja");
addTodoList("Mencari nafkah");

viewAddTodoList();
 
showTodoList();

viewAddTodoList();

showTodoList();