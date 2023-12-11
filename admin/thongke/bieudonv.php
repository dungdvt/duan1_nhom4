<div id="myChart" style="width:100%; max-width:1000px; height:650px;">
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Đặt lịch', 'Nhân viên'],
            <?php
            $tongloai=count($listthongkenv);
            $i=1;
                foreach($listthongkenv as $thongke){
                    extract($thongke);
                    if($i==$tongloai) $dauphay=""; else $dauphay=",";
                    echo "['".$thongke['tennv']."', ".$thongke['countnv']."]".$dauphay;
                    $i+=1;
                }
            ?>
        ]);

        // Set Options
        const options = {
            title: 'Biểu đồ',
            is3D: true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

    }
</script>