<?php

class About {
    public function index($nama = 'Andrie', $pekerjaan = 'mahasiswa')
    {
        echo "Halo saya $nama, saya $pekerjaan";
    }

    public function page()
    {
        echo 'about/page';
    }
}