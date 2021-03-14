@extends('dashboard.master')
@section('content')
    <div id="app">

        <div class="bg-white lg:w-11/12 w-full rounded-lg p-4 mt-10">
            <apexchart class="flex-none" type="bar" height="400" :options="options" :series="series"></apexchart>
        </div>

    </div>

@endsection

@push('scripts')
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

@endpush
