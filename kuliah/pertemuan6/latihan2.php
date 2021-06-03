<?php

// Nama : Fajar Nur Sidiq 
// NRP : 203040074
// Kelas : B
// Pertemuan ke 6

// $mahasiswa = [
// ["Fajar Nur Sidiq", "203040074", "fajarns13@gmail.com", "Teknik Informatika"],
// ["", "", "", ""]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[	
		"nrp" => "203040074",
		"nama" => "Fajar Nur Sidiq",
		"email" => "fajarns13@gmail.com",
		"jurusan" => "Teknik Informatika"
	],
	// [
	// 	"nama" => "", 
	// 	"nrp" => "",
	// 	"email" => "",
	// 	"jurusan" => "",
	// 	"gambar" => "team.png"
	// ]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>