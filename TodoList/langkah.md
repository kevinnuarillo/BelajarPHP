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
		#PART1 - File starter
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

# business logic

		#PART4 - RemoveTodoList
1. set parameter int $number
2. set global todoList
3. buat perulangan for untuk menggeser value yang tidak dihapus
		#LOGIC
		// 1. makan
		// 2. minum
		// 3. tidur
		// setelah dihapus nomer 2
		// 1. makan
		// 2. tidur
4. set : bool setelah parameter untuk mengecek apakah value ada di todolist
5. cek jika number lebih besar dari sizeof todolist maka return false
6. setelah perulangan, unset todolist dari array/value sizeof todolist
7. terakhir return true

# Test
		#PART4 - TestRemoveTodoList
1. require yang dibutuhkan
2. tambah beberapa todolist untuk di test
3. remove todolist untuk test dan show kembali

# Input
		#PART1 - Buat folder dan file
1. buat folder bernama 'Helper'
2. buat file didalam folder 'Helper' Input.php

		#PART2 - Input.php
1. buat function bernapa input dengan parameter string $info dan menghasilkan string ':'
2. echo "$info :"
3. $result = fgets(STDIN)
4. return trim($result) //trim karena agar spasi dan enter di hapus

		#PART3 - TestInput.php
1. buat file test input di folder Test
2. requireonce input
3. buat input seperti $name = input("name")
4. echo "Hello $name ....

# View
		#PART2 - ViewShowTodoList
1. require dari folder Model, BusinessLogic, View, Helper. cek satu satu apa yang dibutuhkan
2. masukan function showTodoList();
3. echo "MENU" dan pilihan 1,2,x
4. isi $Pilihan = input("Pilihan")
5. buat if statement jika pilihan 1 view, pilihan 2 remove, dan x keluar. else piliha tidak ada
6. kemas seluruh isi di function ViewShowTodoList() ke while(true)
7. buat echo informasi bahwa keluar dari aplikasi di luar while

# Test
		PART5 - TestViewShowTodoList
1. require once yang dibutuhkan dari View,BusinessLogic
2. masukan function viewShowTodoList()
3. tambahan untuk menambah todolist addTodoList(); require once jangan lupa

# View
		PART3 - ViewAddTodoList.php
1. Require_once yang dibutuhkan dari Helper, BusinessLogic, Model
2. di dalam function, isi echo tambah todolist
3. buat input dari variable $todo = input("...")
4. cek jika $todo sama dengan "x" maka echo berhasil batal, else addTodoList()

# Test
		PART6 - TestViewAddTodoList.php
1. Requireonce yang perlu dari view, businessLogic.
2. jika ingin menambah untuk menampilkan todolist masukan require BusinessLogic/AddTodoList
3. test masukan function viewAddTodoList() lalu showTodoList()






