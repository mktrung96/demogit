<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <script src="http://localhost:8080/lorawebphp/asset/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost:8080/lorawebphp/asset/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost:8080/lorawebphp/asset/js/bootstrap.min.js"></script>
    <script src="http://localhost:8080/lorawebphp/asset/js/datatables.bootstrap.js"></script>
    <script src="http://localhost:8080/lorawebphp/asset/js/chartJS/Chart.bundle.js"></script>
<script src="http://localhost:8080/lorawebphp/asset/js/chartJS/utils.js"></script>
<script src="http://localhost:8080/lorawebphp/asset/js/leaflet.js"></script>
<script src="http://localhost:8080/lorawebphp/asset/js/bootstrap-datepicker.js"></script>

<body>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</body>
</html>