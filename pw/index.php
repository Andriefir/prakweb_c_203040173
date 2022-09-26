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
	<title>Daftar Buku</title>
</head>

<body class ="center" >
	<div class="container" style = "margin : "auto"
>
	<h3 >Daftar Buku</h3>

	<table border="1" cellpadding="10" cellspacing="0s">
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
		<?php endforeach; ?>
	</table>
	</div>
</body>
</html>