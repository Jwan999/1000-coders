@extends('dashboard.master')
@section('content')
    <div id="app" class="flex w-full justify-center">


        <div class="bg-white lg:flex lg:w-11/12 flex-none w-full rounded-lg p-4 mt-10">
            <div class="lg:w-6/12 w-full lg:mr-6 mr-0">
                <apexchart id="countries" class="flex-none" type="bar" height="400" :options="countriesChart.options"
                           :series="countriesChart.series"></apexchart>
            </div>

            <div class="lg:w-6/12 w-full">
                <apexchart id="partners" class="flex-none" type="bar" height="400" :options="partnersChart.options"
                           :series="partnersChart.series"></apexchart>
            </div>
        </div>

    </div>





@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el: '#app',
            data: {
                countriesChart: {
                    options: {
                        colors: [
                            "#008FFB", "#00E396", "#FEB019", "#FF4560", "#775DD0",
                            "#546E7A", "#D4526E", "#8D5B4C", "#F86624",
                        ],
                        chart: {
                            type: 'bar',

                            id: 'countries',
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
                },
                partnersChart: {
                    options: {
                        chart: {
                            type: 'bar',
                            id: 'countries',
                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 10,
                                horizontal: false,
                            }
                        },
                        xaxis: {
                            categories: @json($partners->keys())
                        },

                        dataLabels: {
                            style: {
                                // fontSize: '12px',
                                // colors: ["#304758"]
                            }
                        },
                    },
                    series: [{
                        name: 'الشريك',
                        data: @json($partners->values())
                    }],
                }
            }

        });


    </script>


@endpush

{{--@include('dashboard.horizontalChart')--}}