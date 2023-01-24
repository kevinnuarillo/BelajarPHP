<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";

// menampilkan tambah todo di list 
function viewAddTodoList(){
		echo "Tambah todolist" . PHP_EOL;

		$todo = input("Isi Todo (x untuk batal)");

		if($todo == "x"){
			echo "Batal menambah Todo" . PHP_EOL;
		}else{
			addTodoList($todo);
		}
}