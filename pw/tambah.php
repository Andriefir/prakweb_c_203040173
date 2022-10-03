<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                  Judul Buku :
                  <input type="text" name="Judul Buku" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Penulis :
                  <input type="text" name="Penulis" autofocus required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Penerbit :
                  <input type="text" name="Penerbit" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Gambar :
                  <input type="text" name="Gambar" required>
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>