<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="font-family:'Poppins'">Laporan Lomba</h1>
    <div class="row mt-3">
        <div class="col-md-6">
            <table class="table table-hover">
                <tr class="table">
                    <th style="font-size: 23px">Kode Lomba</th>
                    <th style="font-size: 23px">Nama Lomba</th>
                    <th style="font-size: 23px">Jumlah Lomba</th>
                    <?php foreach ($lombation as $lmb) : ?>

                </tr>

                <?php $i = 1; ?>
                <tr>
                    <td style="font-size: 20px;font-family:'Poppins'"><?= $lmb["id"]; ?></td>
                    <td style="font-size: 20px;font-family:'Poppins'"><?= $lmb["kategori_lomba"]; ?></td>
                    <td style="font-size: 20px;font-family:'Poppins'"><?= $lmb["jml_lomba"]; ?></td>
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