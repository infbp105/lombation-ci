<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="font-family:'Poppins'">Tabel Daftar Lomba</h1>
    <div class="row mt-3">
        <div class="col-6">
            <a href="<?= base_url('admin/tambah') ?>" class="btn btn-info mb-3" type="button">Tambah Data</a>



            <a class="btn btn-danger mb-3" href="<?= base_url('admin/expdf') ?>">Export sebagai PDF</a>
            <a class="btn btn-success mb-3" href="<?= base_url('admin/exexcel') ?>">Export sebaga Excel</a>

            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('deleted'); ?>
            <table class="table table-hover">
                <thead>
                    <tr class="table">
                        <th>Kode Lomba</th>
                        <th>Kategori Lomba</th>
                        <th>Jumlah Lomba</th>
                        <th>Aksi</th>
                        <?php foreach ($lombation as $lmb) : ?>

                    </tr>
                </thead>

                <?php $i = 1; ?>
                <tr>
                    <th><?= $lmb["id"]; ?></th>
                    <th><?= $lmb["kategori_lomba"]; ?></th>
                    <th><?= $lmb["jml_lomba"]; ?></th>
                    <th>
                        <a href="<?= base_url('admin/ubah/'); ?><?= $lmb['id']; ?>" type="button" class="btn btn-warning fa-faw btn-sm">Edit</a>
                        <a href="<?= base_url('admin/hapus/'); ?><?= $lmb['id']; ?>" type="button" class="btn btn-danger fa-faw btn-sm" onclick="return confirm('Do You Want to Delete This Data')">Hapus</a>
                    </th>
                </tr>
                <?php $i++; ?>

            <?php endforeach; ?>

            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->