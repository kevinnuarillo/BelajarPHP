# App.php

1. Buat file App.php
2. test file dengan echo

# Model

1. buat folder Model
2. buat file TodoList.php
3. di dalam file, buat array kosong yang nantinya akan diisikan

! Masukan require_once file ini ke App.php

# Business Logic

		#PART1 - Buat file

1. buat folder BusinessLogic
2. tentukan business logic, di todolist ini kita tentukan dengan:
		- AddTodoList.php
		- RemoveTodoList.php
		- ShowTodoList.php
   jadi kita tentukan tambah, hapus, dan tampilkan.
3. buat function berdasarkan business logic

		#PART2 - Kode logic ShowTodoList.php
1. di dalamfunction masukan global $todoList
2. test dengan echo
3. buat foreach dengan $todoList sebagai number => $value
4. echo dengan $number. $value

*value disini adalah todolist yang akan dimasukan kepada array todoList nantinya.
		
		#PART3 - Kodelogic ShowTodoList.php
1. masukan parameter string $todo ke function
2. Di dalam function masukan global todoList
3. cari tau berapa length todolist dengan number = sizeof pada todoList ditambah 1
4. selanjutnya masukan todolist[$number] = $todo

! masukan require_once file ini ke App.php

# View

1. buat folder view
2. buat file view masing2 sesuai tampilan yang ditetapkan
		- ViewAddTodoList.php
		- ViewRemoveTodoList.php
		- ViewShowTodoList.php
3. masukan function di tiap file sesuai namanya

! msukan require_once setiap file di view ke App.php

# Test

1. Buat folder test
2. buat file tiap Test
		- TestAddTodoList.php
		- TestRemoveTodoList.php
		- TestShowTodoList.php

		#PART1 - TestShowTodoList.php
1. require once dari Model ambil TodoList.php
2. require once dari BusinessLogic ambil ShowTodoList.php
3. masukan function yang sudah dibuat sebelumnya di ShowTodoList.php (BusinessLogic)
4. masukan todoList[1] = value , sebelum function showTodolist dimasukan.

! test

		#PART2 - TestAddTodoList.php
1. require once dari Model ambil TodoList.php
2. require once dari BusinessLogic ambil AddTodoList.php
3. test dengan function yang telah dibuat addTodoList()
4. var_dump $todoList. 