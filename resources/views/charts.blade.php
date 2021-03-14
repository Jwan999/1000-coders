<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Charts</title>
</head>
<body class="bg-dark">
<div id="app">
    <div class="bg-white rounded-lg p-4">
        <apexchart type="bar" height="350" :options="options" :series="series"></apexchart>

    </div>

</div>


<script src="js/app.js"></script>
<script>
    let vue = new Vue({
        el: '#app',
        data: function () {
            return {

                options: {
                    colors: [
                        "#008FFB", "#00E396", "#FEB019", "#FF4560", "#775DD0",
                        "#546E7A", "#D4526E", "#8D5B4C", "#F86624",
                    ],
                    chart: {
                        id: 'vuechart-example',
                    },
                    xaxis: {
                        categories: @json($students->keys())
                    },

                    dataLabels: {
                        style: {
                            // fontSize: '12px',
                            // colors: ["#304758"]
                        }
                    },
                },
                series: [{
                    name: 'الدولة',
                    data: @json($students->values())
                }],

            }
        }
    });


</script>
</body>
</html>