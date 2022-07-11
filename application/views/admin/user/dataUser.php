<div class="container">
    <h1 class="h2"><?= $title; ?></h1>
    <hr>

    <br>
    </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">
                Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-success text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            foreach ($user as $u) : ?>
                                <td class="text-dark"><?= ++$start; ?></td>
                                <td class="text-dark"><?= $u['nama']; ?></td>
                                <td class="text-dark"><?= $u['alamat']; ?></td>
                                <td class="text-dark"><?= $u['email']; ?></td>
                                <td class="text-dark"><?= $u['nik']; ?></td>
                                <td><a href="<?php echo base_url('admin/user/ubahData/' . $u['id_user']) ?>" class="btn btn-primary"><i class="fas fa-edit"></i>Ubah</a>
                                    <a href="<?php echo base_url('admin/user/detail/' . $u['id_user']) ?>" class="btn btn-success"><i class="fas fa-eye"></i>Lihat</a>
                                    <a href="<?php echo base_url('admin/user/hapusData/' . $u['id_user']) ?>" class="btn btn-danger" onclick="return confirm ('Yakin akan dihapus?');">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                                </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>