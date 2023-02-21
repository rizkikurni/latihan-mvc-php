<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Buku</h3>

            <?php foreach($data['buku'] as $buku) :?>
                <ul>
                    <li><?= $buku['judul'] ;?></li>
                    <li><?= $buku['penulis'] ;?></li>
                    <li><?= $buku['tahun'] ;?></li>
                    <li><?= $buku['genre'] ;?></li>
                </ul>
            <?php endforeach; ?>


        </div>
    </div>
</div>