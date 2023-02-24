<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>

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


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL ;?>/buku/tambah" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul buku</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Penulis buku</label>
                <input type="text" class="form-control" id="penulis" name="penulis">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tahun buku</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Genre buku</label>
                <input type="text" class="form-control" id="genre" name="genre">
            </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>

    </div>
  </div>
</div>