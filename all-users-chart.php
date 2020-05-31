
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>

    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("charts/data-chart-all.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].user_username);
                        marks.push(data[i].marks);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Users Activity',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
