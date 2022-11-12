<?php
header("Content-type:aplication/octet-stream/");
header("Content-Disposition:attacment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires:0");

?>

<table class="table table-hover">
    <tr class="table">
        <th>Kode Lomba</th>
        <th>Nama Lomba</th>
        <th>Jumlah Lomba</th>
        <?php foreach ($lombation as $lmb) : ?>

    </tr>

    <?php $i = 1; ?>
    <tr>
        <td><?= $lmb["id"]; ?></td>
        <td><?= $lmb["kategori_lomba"]; ?></td>
        <td><?= $lmb["jml_lomba"]; ?></td>
    </tr>
    <?php $i++; ?>

<?php endforeach; ?>

</table>