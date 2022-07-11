<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-primary" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" name="nama" id="jabatan" value="<?= $user['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control " name="alamat" id="alamat" value="<?= $user['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= $user['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">nik</label>
                        <input type="text" class="form-control" name="nik" id="nik" value="<?= $user['nik']; ?>">
                    </div>
                    <button name="ubah" type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>

</div>
</div>
</div>