<!DOCTYPE html>
<html>
<head>
	<title>pertemuan 3</title>
</head>
<body>
	<!-- PHP dalam HTML -->
	<h1>selamat datang, <?php echo "Bambang"; ?></h1>

	<!-- tag HTML dalam PHP -->
	<?php  echo "<h2> di Pembelajaran Web Programing</h2>";?>

	<hr>
	<h2>tipe data integer</h2>

	<?php
	echo "Desimal : "; var_dump(1966); echo "<br>";
	echo "octa : "; var_dump(01234); echo "<br>";
	echo "Hexadecimal : "; var_dump(0x1a); echo "<br>";
	echo "binary : "; var_dump(0b111111); echo "<br>";
	echo "underscore di nomor : "; var_dump(1_505_000); echo "<br>";
	?>

	<hr>
	<h2>variabel</h2>
<?php 
$namadepan = "Muhammad";
$namablk = "Ramdhan";
$mk = "Web Programing";
$hobi = "Touring";
 ?>

<h4>identitas diri</h4>
<p>Nama : <?php echo $namadepan ." ". $namablk; ?></p>
<p>Mata Kuliah : <?php echo $mk; ?></p>
<p>Hobi : <?php echo $hobi; ?></p>

<hr>
<h4>Contoh perintah echo</h4>
<?php 
echo ("Halo Semua!<br>");
echo "Nama saya ramdhan",", ","umur saya 20 tahun.";
 ?>

<br>
<h4>Contoh perintah print</h4>
<?php 
print("Halo Semua!<br>");
print "Nama saya ramdhan,<br>";
print "umur saya 20 tahun."
 ?>
</body>
</html>