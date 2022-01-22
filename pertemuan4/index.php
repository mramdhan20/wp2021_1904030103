<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 4</title>
</head>
<body>
	<h1>Membuat Array</h1>
	<?php 
	$values = array(1,2,3,4,3.14);
	var_dump($values);
	echo("<br>"); 
	echo($values[4]);

	echo("<br>"); 

	$makanan = ["Nasi Goreng","Ayam Bakar","Nasi Padang","Sate Ayam"];
	var_dump($makanan);

	echo("<br>"); 
	echo "$makanan[2]";

	echo("<br>"); 
	// mengganti isi value
	$makanan[0] = "Nasi Uduk";
	var_dump($makanan);

	echo("<br>"); 
	// menambahkan value
	$makanan[] = "Pecel Lele";
	var_dump($makanan);

	echo("<br>"); 
	// // menghapus salah satu value
	// unset($makanan[0]);
	// var_dump($makanan);
	// echo("<br>");


	// membuat isi array dengan perulangan for
	for($i=0; $i < count($makanan); $i++){
		echo $makanan[$i]."<br>";
	}

	echo("<br>");
	// menghitung total array
	var_dump(count ($makanan));

	 ?>

	 <hr>
	 <h2>Hobi</h2>
	 <?php
	 // membuat array kumpulan hobi
	 $hobi = ["Bermain Sepak Bola","Berenang","Main Game","Rebahan","Sepedahan","Fotografi"];

	 // menampilkan isi array dengan perulangan foreach
	 foreach ($hobi as $hobi) {
	 		echo $hobi."<br>";
	 }
	 ?>

	 <hr>
	 <h1>Map Dengan Array</h1>
	 <?php 

	 // penulisan tipe pertama
	 $ramdhan = array(
	 			"id" => "Ramdhan",
	 			"nama" => "Muhammad Ramdhan",
	 			"umur" => 20
	 	);
	 var_dump($ramdhan);

	 echo("<br>");
	 // penulisan tipe ke-2
	 $doni = [
	 		"id" => "Doni",
	 		"nama" => "Doni Firmansyah",
	 		"umur" => 12,
	 		// Membuat array di dalam array
	 		"alamat" => [
	 			"kota" => "Tangerang",
	 			"prov" => "Banten"
	 			]
	 	];
	 var_dump($doni);

	 // echo("<br>");
	 // echo("Nama ID :" . $doni["id"]);

	 // echo("<br>");
	 // echo("Nama Lengkap :" . $doni["nama"]);

	 // echo("<br>");
	 // echo("Umur : " . $doni["umur"]);
	 ?>

	 <hr>
	 <?php 
	 $bio = [
	 	"nama" => "Muhammad Ramdhan",
	 	"ttl" => "Tangerang, 20 Desember 2000",
	 	"alamat" => "Perum Bumi Asri",
	 	"pekerjaan" => "Mahasiswa",
	 ];

	 // mencetak
	 echo "<h2>Biodata</h2>";
	 echo "<p>Nama: " . $bio["nama"]."</br>";
	 echo "<p>Tempat, Tanggal Lahir: " . $bio["ttl"]."</br>";
	 echo "<p>Alamat: " . $bio["alamat"]."</br>";
	 echo "<p>Pekerjaan: " . $bio["pekerjaan"]."</br>";

	 ?>


	<hr>
	<h2>Array 2 Dimensi</h2>
	<?php 
	// Membuat array 2 dimensi
	$mhs = [
		[
			"nama" => "Muhammad Ramdhan",
			"fk" => "Teknik Informatika"
		],
		[
			"nama" => "Arliandi Pramadika",
			"fk" => "Ilmu Komunikasi"
		],
		[
			"nama" => "Rahmat Setiawan",
			"fk" => "Ilmu Agama Islam"
		]
	];

	// Menampilkan array
	foreach ($mhs as $mhs) {
		echo "<h2>" . $mhs["nama"] . "</h2>";
		echo "<p>" . $mhs["fk"] . "</p>";
		echo "<hr>";
	}

	 ?>




	<h1>Operator Matematika </h1>

	<?php 
	$tambah = 10 + 10;
	$kurang = 100 - 10;
	$kali = 5*5;
	$bagi = 50 / 10;
	$modular = 100 % 3;
	$pangkat = 4**3;
	echo "Tambah : " . $tambah . "<br>";
	echo "Kurang : " . $kurang . "<br>";
	echo "kali : " . $kali . "<br>";
	echo "bagi : " . $bagi . "<br>";
	echo "modular : " . $modular . "<br>";
	echo "pangkat : " . $pangkat . "<br>";

	 ?>

	<hr>
	<h2>Increment</h2>

	<?php 
	$a = 10;
	$a++;
	// $a = $a + 1;
	$a++;

	// $a = $a - 1;
	$a--; 

	echo($a);

	 ?>

</body>
</html>