<?php 

class About {
    public function index($nama = 'Rizki', $pekerjaan = 'Programmer'){
        echo "Halo, Nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page(){
        echo 'about/page';
    }
};?>