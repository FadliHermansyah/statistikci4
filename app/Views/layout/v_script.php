<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $(function() {
        <?php $tahun = array();
        foreach ($databar as $key => $values) {
            $item = array();
            $item['jenis'] = $values['nm_jenis_data'];
            $item['jml'] = $values['jlh_data'];
            $tahun[] = $item;
        }
        $tahun1 = json_encode($tahun); ?>
        var tahun2 = <?= $tahun1; ?>
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
        for (var key in tahun2) {
            var value = tahun2[key];
            // console.log(key, value['jenis']);

            // // console.log(tahun2);
            // return false;
            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $("#barChart").get(0).getContext("2d");
            var barChartData = {
                labels: [
                    "2015",
                    "2016",
                    "2017",
                    "2018"
                ],
                datasets: [{
                        label: "Digital Goods",
                        backgroundColor: "rgba(60,141,188,0.9)",
                        borderColor: "rgba(60,141,188,0.8)",
                        pointRadius: false,
                        pointColor: "#3b8bba",
                        pointStrokeColor: "rgba(60,141,188,1)",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(60,141,188,1)",

                        data: tahun2
                    },
                    {
                        label: "Electronics",
                        backgroundColor: "rgba(210, 214, 222, 1)",
                        borderColor: "rgba(210, 214, 222, 1)",
                        pointRadius: false,
                        pointColor: "rgba(210, 214, 222, 1)",
                        pointStrokeColor: "#c1c7d1",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [2, 3, 4, 5]
                    },
                    {
                        label: "NewData",
                        backgroundColor: "rgba(210, 214, 222, 1)",
                        borderColor: "rgba(210, 214, 222, 1)",
                        pointRadius: false,
                        pointColor: "rgba(210, 214, 222, 1)",
                        pointStrokeColor: "#c1c7d1",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [3, 4, 5, 6]
                    },
                ],
            };
            var temp0 = barChartData.datasets[0];
            var temp1 = barChartData.datasets[1];
            var temp2 = barChartData.datasets[2];
            barChartData.datasets[0] = temp1;
            barChartData.datasets[1] = temp0;
            barChartData.datasets[2] = temp2;

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false,
            };

            var barChart = new Chart(barChartCanvas, {
                type: "horizontalBar",
                data: barChartData,
                options: barChartOptions,
            });
        }
    });
</script>

</html>