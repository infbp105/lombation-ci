<?php
$filedata = json_decode(file_get_contents('http://localhost/bstrpci/api'));
?>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);


    function drawChart() {
        var PieChartData = '<?= $PieChartData; ?>';
        var data = new google.visualization.DataTable();
        data.addColomn('string', 'Topping');
        data.addColomn('number', 'Slices');
        data.addRows(JSON.parse(PieChartData));


        var options = {
            'title': '<?= $PieChartTitle; ?>',
            'width': 400,
            'height': 300
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options)
    }
</script> -->

<body>
    <div class="container-fluid">
        <h1 class="h3 text-gray-800" style="font-family:'Poppins'">API Document</h1>
    </div>


    <div class="card container-fluid" style="width: 60rem;margin-bottom: 40px;">
        <div class="card-body">
            <h1 class="card-text text-center" style="font-family:Poppins ;"><a href="http://localhost/bstrpci/api"></a>API DOCUMENT</h1>
        </div>
    </div>
    <div class="card container-fluid" style="width: 100rem;margin-bottom: 40px;font-family:'Poppins'">
        <div class="card-body">
            <?php
            foreach ($filedata as $value) {
                echo "Kode Lomba :" . $value->id . "<br>";
                echo "Kategori Lomba :" . $value->kategori_lomba . "<br>";
                echo "Jumlah Lomba" . $value->jml_lomba . "<br>";
                echo "<hr>";
            }

            ?></p>
        </div>
    </div>
    </div>
</body>