<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="font-family:'Poppins'">Update Data Table</h1>

    <div class="container">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $lombation['id'] ?>"></input>
            <div class="mb-3">
                <label for="kategori_lomba" class="form-label">Kategori_Lomba</label>
                <input type="text" class="form-control" id="kategori_lomba" name="kategori_lomba" value="<?= $lombation['kategori_lomba'] ?>">
            </div>
            <div class=" mb-3">
                <label for="jml_lomba" class="form-label">Jumlah Lomba</label>
                <input type="text" class="form-control" id="jml_lomba" name="jml_lomba" value="<?= $lombation['jml_lomba'] ?>">
            </div>
            <a href="<?= base_url('admin/table') ?>" type="submit" class="btn btn-warning">Back</a>
            <button type="submit" name="ubah " class="btn btn-success">Update Data</button>

            <hr style="margin-bottom: 395px">

        </form>
    </div>
</div>