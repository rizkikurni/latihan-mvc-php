<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Buku</h3>

                <ul class="list-group">
                    <?php foreach($data['buku'] as $buku) :?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <?= $buku['judul'] ;?>
                            <a href="<?= BASEURL ;?>/buku/detail/<?= $buku['id'] ;?>" class="badge text-bg-primary">detail</a>
                        </li>
                        
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>