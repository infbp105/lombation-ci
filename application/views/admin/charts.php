<?php
$this->db->select('kategori_lomba,jml_lomba');
$dataLombaChart = $this->db->get('lombation')->result();
foreach ($dataLombaChart as $dlc => $v) {
    $arrHp[] = ['label' => $v->kategori_lomba, 'y' => $v->jml_lomba];
}

?>

<html>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="font-family:'Poppins'">Chart Data Kategori Lombation</h1>

    <head>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
                    title: {
                        text: "Lombation Chart"
                    },
                    data: [{
                        // Change type to "doughnut", "line", "splineArea", etc.
                        type: "column",
                        dataPoints: <?= json_encode($arrHp, JSON_NUMERIC_CHECK); ?>

                    }]

                });
                chart.render();
            }
        </script>
    </head>

    <body>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </body>

</div>
<!-- /.container-fluid -->

</html>
</div>

<!-- End of Main Content -->