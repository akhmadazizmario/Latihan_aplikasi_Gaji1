<div class="container">
    <h1 class="h2"><?= $judul; ?></h1>
    <hr>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-warning">Detail Barang</h5>
                <div class="card-body bg-white">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['alamat']; ?></p>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><?= $user['nik']; ?></p>
                    <a href="<?php echo base_url('admin/user') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>