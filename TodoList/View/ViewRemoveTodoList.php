<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

// menampilkan view remove 
function viewRemoveTodoList(){
		echo "Menghapus TodoList" . PHP_EOL;

		$Pilihan = input("Nomor (x untuk batal)");

		if($Pilihan == "x"){
				echo "Batal menghapus todo" . PHP_EOL;
		}else{
				$success = removeTodoList($Pilihan);

				if($success){
					echo "Sukses menghapus TodoList nomor $Pilihan" . PHP_EOL;
				}else{
					echo "Gagal menghapus TodoList nomor $Pilihan" . PHP_EOL;
				}
		}
}