$(document).ready(function(){

                var LineChartData = {
                                labels: <?php json_encode($date);?>,
                                datasets: [
                                        {
                                                 label: 'Event Guards Yearly Income',                                                                                                    backgroundColor: 'rgba(253, 102, 105, 0.2)',
                        borderColor: 'rgba(253, 102, 105, 1)',
                        borderWidth: 1,
                        pointHoverBackgroundColor: "rgba(253, 102, 105, 1)",
                        pointHoverBorderColor: "rgba(253, 102, 105, 1)",
                        data : <?php echo json_encode($total);?>

                                        }
                                ]
                        };

                        var ctx = $("#canvas");

                        var myLine = new Chart(ctx, {
                                type: 'line',
                                data: LineChartData,
                                options: {
                                        scales: {
                                                yAxes: [{
                                                        ticks: {
                                                                beginAtZero:true
                                                        }
                                                }]
                                        }
                                }
                        });

}

});
