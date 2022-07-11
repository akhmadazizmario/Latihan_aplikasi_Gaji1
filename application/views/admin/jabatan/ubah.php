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
                    <input type="hidden" name="id_jabatan" id="id_jabatan" value="<?= $jabatan['id_jabatan']; ?>">
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $jabatan['jabatan']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gaji" class="form-label">gaji</label>
                        <input type="text" class="form-control " name="gaji" id="gaji" value="<?= $jabatan['gaji']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tunjangan" class="form-label">tunjangan</label>
                        <input type="text" class="form-control" name="tunjangan" id="tunjangan" value="<?= $jabatan['tunjangan']; ?>">
                    </div>
                    <button name="ubah" type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>

</div>
</div>
</div>