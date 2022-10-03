<?php
require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ubah Data</title>
</head>
<body>
    <h3>Ubah Data</h3>
    <form action="" method="POST">
        <ul>
          <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <li>
                <label>
                  Judul Buku :
                  <input type="text" name="Judul Buku" required value="<?= $bk['Judul Buku']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Penulis :
                  <input type="text" name="Penulis" autofocus required value="<?= $bk['Penulis']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Penerbit :
                  <input type="text" name="Penerbit" required value="<?= $bk['Penerbit']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Gambar :
                  <input type="text" name="Gambar" required value="<?= $bk['Gambar']; ?>">
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>