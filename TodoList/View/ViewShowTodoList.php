<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

// menampilkan view todo list 
function viewShowTodoList(){
		while(true) {
				showTodoList();

				echo "MENU" . PHP_EOL;
				echo "1. Tambah Todolist" . PHP_EOL;
				echo "2. Hapus Todolist" . PHP_EOL;
				echo "x. Keluar Todolist" . PHP_EOL;

				$Pilihan = input("Pilih salah satu");

				if($Pilihan == "1") {
						viewAddTodoList();
				}else if($Pilihan == "2") {
						viewRemoveTodoList();
				}else if($Pilihan == "x") {
						break;
				}else{
						echo "Pilih antara 1,2, dan x" . PHP_EOL;
				}
		}
		echo "Sampai jumpa kembali" . PHP_EOL;
		echo "By Kevin Nuarillo" . PHP_EOL;
}