<div class="container">
    <h1 class="h2"><?= $title; ?></h1>
    <hr>

    <?= $this->session->flashdata('flash'); ?>
    <div class="row-mt-3">
        <div class="colmd-6">
            <a href="<?php echo base_url('admin/Jabatan/tambahData') ?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tambah Data Jabatan</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control bg-white" placeholder="Cari Data Jabatan... " name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
        </div>
    </div><br>
    <?php if (empty($jabatan)) : ?>
        <div class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data Jabatan tak ditemukan...
        </div>
    <?php endif; ?>
    <br>
    </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">
                Data Jabatan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-success text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">jabatan</th>
                            <th scope="col">gaji</th>
                            <th scope="col">tunjangan</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            foreach ($jabatan as $j) : ?>
                                <td class="text-dark"><?= ++$start; ?></td>
                                <td class="text-dark"><?= $j['jabatan']; ?></td>
                                <td class="text-dark">Rp. <?= number_format($j['gaji'], 0, ',', '.') ?></td>
                                <td class="text-dark">Rp. <?= number_format($j['tunjangan'], 0, ',', '.') ?></td>
                                <td><a href="<?php echo base_url('admin/jabatan/ubahData/' . $j['id_jabatan']) ?>" class="btn btn-primary"><i class="fas fa-edit"></i>Ubah</a>
                                    <a href="<?php echo base_url('admin/jabatan/hapusData/' . $j['id_jabatan']) ?>" class="btn btn-danger" onclick="return confirm ('Yakin akan dihapus?');">
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