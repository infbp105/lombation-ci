<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="font-family:'Poppins'">Add New Data Table</h1>

    <div class="container">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="kategori_lomba" class="form-label">Kategori Lomba</label>
                <input type="text" class="form-control" id="kategori_lomba" name="kategori_lomba">
            </div>
            <div class="mb-3">
                <label for="jml_lomba" class="form-label">Jumlah Lomba</label>
                <input type="text" class="form-control" id="jml_lomba" name="jml_lomba">
            </div>
            <a href="<?= base_url('admin/table') ?>" type="submit" class="btn btn-warning">Back</a>
            <button type="submit" class="btn btn-success">Submit</button>

            <hr style="margin-bottom: 395px">

        </form>
    </div>
</div>