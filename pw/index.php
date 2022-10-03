<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Pertemuan 2
*/
?> 
<?php  
require 'functions.php';

// query isi tabel
$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku Novel</title>
	<link rel="stylesheet" href="style.css">
</head>

<body class ="center">
	<div class="container" width="80%">
	<h3>
		<center>DAFTAR BUKU</center>
	</h3>
	<button style="text-align: center;">
	<a href="tambah.php">Tambah Data</a>
	</button>
  	<br><br>

	<table border="1" cellpadding="10" cellspacing="0s" style="margin: 0 auto;">
		<tr>
			<th>ID</th>
			<th>Judul buku</th>
			<th>Penulis</th>
            <th>Penerbit</th>
            <th>Gambar</th>
		</tr>

		<?php if(empty($buku)) : ?>
		<tr>
			<td colspan="4">
				<p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
			</td>	
		</tr>
		<?php endif; ?>

		<?php $i = 1; 
		foreach($buku as $bk) : ?>
		<tr>
			<td><?= $i++; ?></td>
            <td><?= $bk['Judul Buku']; ?></td>
            <td><?= $bk['Penulis']; ?></td>
            <td><?= $bk['Penerbit']; ?></td>
			<td><img src="assets/<?= $bk['Gambar']; ?>" width = "80"></td>
		</tr>
		<tr>
			<td colspan= "5">
				<center>
			 		<a href="hapus.php?id=<?= $bk['ID']; ?>">Hapus</a>
			 	</center>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
</body>
</html>