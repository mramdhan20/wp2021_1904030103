<!DOCTYPE html>
<html>
<head>
	<title>UTS WEB PROGRAMING</title>
</head>
<body>
	<h1>Muhammad Ramdhan</h1>
	<h1>1904030103</h1>
	<hr/>

	<h2>Jawaban No 1</h2>
	<p>array dapat menyimpan lebih dari 1 data dengan nama yang sama sedangkan variabel hanya dapat menampung 1 data saja. <br>
array dapat diakses berdasarkan indexnya, sedangkan variabel langsung diakses lewat nama variabelnya.</p>
	<hr/>

	<h2>Jawaban No 2 (Array Asosiatif)</h2>
	<?php 
	 $bio = [
	 	"nama" => "Muhammad Ramdhan",
	 	"ttl" => "Tangerang, 20 Desember 2000",
	 	"jk" => "Laki - Laki",
	 	"agama" => "Islam",
	 	"alamat" => "Perum Bumi Asri",
	 	"pekerjaan" => "Mahasiswa",
	 	"telp" => "082114453363",
	 	"hobi" => "Touring & Fotografi",
	 ];

	 // mencetak
	 echo "<h3>Biodata</h3>";
	 echo "<p>Nama: " . $bio["nama"]."</br>";
	 echo "<p>Tempat, Tanggal Lahir: " . $bio["ttl"]."</br>";
	 echo "<p>Jenis Kelamin: " . $bio["jk"]."</br>";
	 echo "<p>Agama: " . $bio["agama"]."</br>";
	 echo "<p>Alamat: " . $bio["alamat"]."</br>";
	 echo "<p>Pekerjaan: " . $bio["pekerjaan"]."</br>";
	 echo "<p>No Telepon: " . $bio["telp"]."</br>";
	 echo "<p>Hobi: " . $bio["hobi"]."</br>";
	 ?>
	 <hr/>

	 <h2>Jawaban No 3 (Array Multidimensi)</h2>
	<?php 
	$mhs = [
		[
			"nama" => "Muhammad Ramdhan",
			"univ" => "Universitas Islam Syekh Yusuf",
			"fk" => "Teknik Informatika",
			"alamat" => "Bumi Asri"
		],
		[
			"nama" => "Arliandi Pramadika",
			"univ" => "Universitas Islam Syekh Yusuf",
			"fk" => "Ilmu Komunikasi",
			"alamat" => "Kota Bumi"
		],
		[
			"nama" => "Rahmat Setiawan",
			"univ" => "Universitas Islam Syekh Yusuf",
			"fk" => "Ilmu Agama Islam",
			"alamat" => "Grendeng"
		]
	];

	foreach ($mhs as $mhs) {
		echo "Nama : ".$mhs['nama']."<br>";
		echo "Universitas : ".$mhs['univ']."<br>";
		echo "Fakultas : ".$mhs['fk']."<br>";
		echo "Alamat : ".$mhs['alamat']."<br>";
		echo "<hr>";
	}

	 ?>

	 <h2>Jawaban No 4 (else if)</h2>
	 <?php 

	 $paket = 301;

	 if ($paket >= 303) {
	 	echo "Paket Visual Foxpro & biaya 400000" . "</br>";
	 }	else if ($paket >= 302) {
	 	echo "Paket Visual Basic & biaya 450000" . "</br>";
	 }	else if ($paket >= 301){
	 	echo "Paket Microsoft Office & biaya 350000" . "</br>";
	 }	else {
	 	echo "Anda Belum Memilih Paket" . "</br>";
	 }
	 

	  ?>

</body>
</html>