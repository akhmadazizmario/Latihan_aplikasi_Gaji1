<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_jabatan" class="form-label">id</label>
                    <input type="text" class="form-control" name="id_jabatan" id="id_jabatan">
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">jabatan</label>
                    <input type="text" class="form-control " name="jabatan" id="jabatan">
                </div>
                <div class="mb-3">
                    <label for="gaji" class="form-label">gaji</label>
                    <input type="text" class="form-control" name="gaji" id="gaji">
                </div>
                <div class="mb-3">
                    <label for="tunjangan" class="form-label">tunjangan</label>
                    <input type="text" class="form-control" name="tunjangan" id="tunjangan">
                </div> <button name="tambah" type="submit" class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>