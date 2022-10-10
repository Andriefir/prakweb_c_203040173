<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach( $data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['Nama']; ?></li>
                    <li><?= $mhs['NRP']; ?></li>
                    <li><?= $mhs['Email']; ?></li>
                    <li><?= $mhs['Jurusan']; ?></li>
                </ul> 
            <?php endforeach; ?>
        </div>
    </div>

</div>