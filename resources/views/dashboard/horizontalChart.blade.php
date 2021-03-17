<div id="partners">

    <div class="bg-white lg:w-11/12 w-full rounded-lg p-4 mt-10">
        <apexchart id="partners" class="flex-none" type="bar" height="400" :options="options"
                   :series="series"></apexchart>
    </div>

</div>


<script>
    var vue = new Vue({
        el: '#partners',
        data: function () {
            return {

                options: {
                    colors: [
                        "#008FFB", "#00E396", "#FEB019", "#FF4560", "#775DD0",
                        "#546E7A", "#D4526E", "#8D5B4C", "#F86624",
                    ],
                    chart: {
                        type: 'bar',

                        id: 'partners',
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 10,
                            horizontal: true,
                        }
                    },
                    xaxis: {
                        categories: @json($countries->keys())
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
                    data: @json($countries->values())
                }],

            }
        }
    });


</script>




