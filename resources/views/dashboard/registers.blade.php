@extends('dashboard.master')
@section('content')
    <div id="app" class="flex w-full justify-center lg:p-4 p-2">

        <div class="flex flex-col bg-white lg:w-10/12 w-full rounded-lg shadow-lg p-6 mt-10">
            {{--title--}}
            <div class="flex text-2xl">
                <h1>Registers from the website</h1>
            </div>

            <div class="flex items-center mt-4">
                <p class="text-gray-400 font-mono text-sm mr-2">
                    Number of registers:
                </p>
                <p class="text-sm font-mono text-black">
                    @{{total}}
                </p>
            </div>
            {{--page--}}
            <div class="flex flex-wrap justify-between mt-10">
                <div class="flex items-center">
                    <select v-model="selected" @change="getData()"
                            class="text-gray-900 font-mono rounded px-3 py-2 text-sm w-32 mr-3 border border-gray-200 focus:border-indigo-400 outline-none focus:outline-none">

                        <option selected hidden value="">Country</option>


                        <option v-for="country in countries">@{{country.name}}</option>


                    </select>

                    {{--            <span class="bg-indigo-500 text-white font-mono rounded px-3 py-2 text-sm mr-6 items-center">--}}
                    {{--                Inbox--}}
                    {{--            </span>--}}
                    <a href="students/export">
                    <span class="bg-green-300 text-gray-900 font-mono rounded px-3 py-2 text-sm">
                        Export
                    </span>
                    </a>
                </div>
                {{--paginate--}}
                <div class="flex items-center lg:mt-0">

                    <div @click="paginatePrevious()" class="bg-indigo-100 rounded px-3 py-2 cursor-pointer">
                        <svg class="fill-current text-gray-900 w-2" viewBox="0 0 10 16" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"
                               stroke-linecap="round"
                               stroke-linejoin="round">
                                <g id="Artboard" transform="translate(-587.000000, -97.000000)" stroke="#200E32"
                                   stroke-width="1.5">
                                    <g id="Arrow---Left-2" transform="translate(588.000000, 98.000000)">
                                        <polyline id="Path" points="7.5 14 0.5 7 7.5 0"></polyline>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>


                    <p class="text-base font-mono text-black mx-4 items-center">
                        Page @{{current_page}}
                    </p>

                    <div @click="paginateNext()" class="bg-indigo-100 rounded px-3 py-2 cursor-pointer">
                        <svg class="fill-current text-gray-900 w-2" viewBox="0 0 10 16" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"
                               stroke-linecap="round"
                               stroke-linejoin="round">
                                <g id="Artboard" transform="translate(-587.000000, -177.000000)" stroke="#200E32"
                                   stroke-width="1.5">
                                    <g id="Arrow---Right-2" transform="translate(588.000000, 178.000000)">
                                        <polyline id="Path" points="0.5 0 7.5 7 0.5 14"></polyline>
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </div>


                </div>
            </div>
            {{--table--}}
            <div class="overflow-x-auto">

                <div class="w-full">
                    <div class="bg-white rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                            <tr class="bg-gray-800 text-gray-100 font-mono text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Full Name</th>
                                <th class="py-3 px-6 text-left">Email Address</th>
                                <th class="py-3 px-6 text-left">Phone</th>
                                <th class="py-3 px-6 text-left">Country</th>
                                <th class="py-3 px-6 text-left">To Partner</th>
                                <th class="py-3 px-6 text-left">Age</th>
                                <th class="py-3 px-6 text-left">Date</th>
                                <th class="py-3 px-6 text-left">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                            {{--                        @foreach ($students as $student)--}}

                            <tr v-for="student in students" class="border-b border-gray-200 hover:bg-indigo-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        @{{ student.id }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        @{{ student.name }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        @{{ student.email }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        @{{ student.phone }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center w-28">
                                        @{{ student.country }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center w-28">
                                        @{{ student.partner }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center w-28">
                                        @{{ student.age }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        @{{ Date(student.created_at) }}


                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex item-center">
                                        <div class="w-4 mr-3 transform hover:text-purple-500 hover:scale-110">
                                            <svg viewBox="0 0 18 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Artboard" transform="translate(-134.000000, -491.000000)"
                                                       stroke="#6467F1" stroke-width="1.5">
                                                        <g id="Bookmark" transform="translate(135.000000, 491.000000)">
                                                            <path d="M7.6648,16.6316 L1.73341,19.881 C1.25984,20.1271 0.67641,19.9529 0.41533,19.4874 L0.41533,19.4874 C0.3398,19.3432 0.29905,19.1834 0.29634,19.0206 L0.29634,4.62244 C0.29634,1.87644 2.17277,0.77805 4.873,0.77805 L11.2162,0.77805 C13.8341,0.77805 15.7929,1.80322 15.7929,4.43937 L15.7929,19.0206 C15.7929,19.2804 15.6897,19.5295 15.506,19.7132 C15.3224,19.8968 15.0733,20 14.8135,20 C14.6478,19.9974 14.485,19.9567 14.3375,19.881 L8.3696,16.6316 C8.1497,16.5128 7.8847,16.5128 7.6648,16.6316 Z"
                                                                  id="Path"></path>
                                                            <line x1="4.36957" y1="7.32266" x2="11.6648" y2="7.32266"
                                                                  id="Path"></line>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="w-5 mr-3 transform hover:text-purple-500 hover:scale-110">
                                            <svg class="fill-current text-blue-500" viewBox="0 0 20 21" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Page-1" stroke="none" stroke-width="1" fill=""
                                                   fill-rule="evenodd"
                                                   stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Artboard" transform="translate(-664.000000, -125.000000)"
                                                       fill="#FFFFFF" stroke="#3C82F6" stroke-width="1.30434783">
                                                        <g id="Group-2" transform="translate(664.000000, 125.000000)">
                                                            <g id="Document">
                                                                <path d="M11.2248696,0.651991304 C11.2248696,0.651991304 4.54921739,0.655469565 4.53878261,0.655469565 C2.13878261,0.670252174 0.652695652,2.24938261 0.652695652,4.65807826 L0.652695652,12.6546087 C0.652695652,15.0754783 2.15008696,16.6606957 4.57095652,16.6606957 C4.57095652,16.6606957 11.2457391,16.658087 11.2570435,16.658087 C13.6570435,16.6433043 15.144,15.0633043 15.144,12.6546087 L15.144,4.65807826 C15.144,2.2372087 13.6457391,0.651991304 11.2248696,0.651991304 Z"
                                                                      id="Path"></path>
                                                            </g>
                                                            <g id="Document" transform="translate(4.000000, 3.000000)">
                                                                <path d="M11.2248696,0.651991304 C11.2248696,0.651991304 4.54921739,0.655469565 4.53878261,0.655469565 C2.13878261,0.670252174 0.652695652,2.24938261 0.652695652,4.65807826 L0.652695652,12.6546087 C0.652695652,15.0754783 2.15008696,16.6606957 4.57095652,16.6606957 C4.57095652,16.6606957 11.2457391,16.658087 11.2570435,16.658087 C13.6570435,16.6433043 15.144,15.0633043 15.144,12.6546087 L15.144,4.65807826 C15.144,2.2372087 13.6457391,0.651991304 11.2248696,0.651991304 Z"
                                                                      id="Path"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="w-5 mr-3 transform hover:text-purple-500 hover:scale-110">
                                            <svg class="fill-current text-red-500" viewBox="0 0 19 20" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">

                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                   stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Artboard" transform="translate(-556.000000, -124.000000)"
                                                       stroke="#F04445" stroke-width="1.5">
                                                        <g id="Delete" transform="translate(556.000000, 124.000000)">
                                                            <path d="M16.3249,7.4682 C16.3249,7.4682 15.7819,14.2032 15.4669,17.0402 C15.3169,18.3952 14.4799,19.1892 13.1089,19.2142 C10.4999,19.2612 7.8879,19.2642 5.2799,19.2092 C3.9609,19.1822 3.1379,18.3782 2.9909,17.0472 C2.6739,14.1852 2.1339,7.4682 2.1339,7.4682"
                                                                  id="Path"></path>
                                                            <line x1="17.7082" y1="4.23972" x2="0.7502" y2="4.23972"
                                                                  id="Path"></line>
                                                            <path d="M14.4406,4.2397 C13.6556,4.2397 12.9796,3.6847 12.8256,2.9157 L12.5826,1.6997 C12.4326,1.1387 11.9246,0.7507 11.3456,0.7507 L7.1126,0.7507 C6.5336,0.7507 6.0256,1.1387 5.8756,1.6997 L5.6326,2.9157 C5.4786,3.6847 4.8026,4.2397 4.0176,4.2397"
                                                                  id="Path"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection


@push('scripts')
    <script>
        let vue = new Vue({
            el: '#app',
            data: {
                selected: '',
                countries: [
                    {
                        name: 'قطر',
                        code: '+974'
                    }, {
                        name: 'البحرين',
                        code: '+973'
                    }, {
                        name: 'مصر',
                        code: '+20'
                    }, {
                        name: 'فلسطين',
                        code: '+970'
                    }, {
                        name: 'السودان',
                        code: '+249'
                    }, {
                        name: 'الصومال',
                        code: '+252'
                    }, {
                        name: 'السعودية',
                        code: '+966'
                    }, {
                        name: 'عمان',
                        code: '+968'
                    }, {
                        name: 'سوريا',
                        code: '+963'
                    }, {
                        name: 'الجزائر',
                        code: '+213'
                    }, {
                        name: 'العراق',
                        code: '+964'
                    }, {
                        name: 'جزر القمر',
                        code: '+269'
                    }, {
                        name: 'المغرب',
                        code: '+212'
                    }, {
                        name: 'الكويت',
                        code: '+965'
                    }, {
                        name: 'تونس',
                        code: '+216'
                    }, {
                        name: 'موريتانيا',
                        code: '+222'
                    }, {
                        name: 'اليمن',
                        code: '+967'
                    }, {
                        name: 'الإمارات',
                        code: '+971'
                    }, {
                        name: 'الاردن',
                        code: '+962'
                    }, {
                        name: 'ليبيا',
                        code: '+218'
                    }, {
                        name: 'لبنان',
                        code: '+961'
                    }, {
                        name: 'جيبوتي',
                        code: '+253'
                    },
                ],
                students: [],
                current_page: 1,
                total: null,
                last_page: null,
            },
            methods: {
                getData() {
                    encodeURI(this.selected)
                    if (this.selected == '') {
                        country = null
                    } else {
                        country = this.selected
                    }

                    axios.get('api/registers', {
                        params: {
                            country: country,
                            page: this.current_page,
                        }
                    }).then(response => {
                        this.students = response.data.students.data
                        this.current_page = response.data.students.current_page;
                        this.total = response.data.students.total;
                        this.last_page = response.data.students.last_page;
                    })
                },
                paginateNext() {
                    if (this.current_page == this.last_page) {
                        this.current_page = 0
                    }
                    this.current_page++
                    this.getData()
                },
                paginatePrevious() {
                    this.current_page > 1 ? this.current_page-- : this.current_page = 1
                    this.getData()
                },

            },
            mounted() {
                this.getData()

            }

        })
    </script>
@endpush
