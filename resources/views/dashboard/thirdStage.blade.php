@extends('dashboard.master')
@section('content')
    <div id="app" class="flex w-full justify-center lg:p-4 p-2">

        <div class="flex flex-col bg-white lg:w-10/12 w-full rounded-lg shadow-lg p-6 mt-10">
            {{--title--}}
            <div class="flex text-2xl">
                <h1>Third stage applicants</h1>
            </div>

            <div class="flex items-center mt-4">
                <p class="text-gray-400 font-mono text-sm mr-2">
                    Received applications:
                </p>
                <p class="text-sm font-mono text-black">
                    {{$applicants->total()}}
                </p>
            </div>
            {{--page--}}
            <div class="flex flex-wrap justify-between mt-10">
                <div class="flex items-center">

                </div>
                {{--paginate--}}
                <div class="flex items-center lg:mt-0">

                    <a href="{{$applicants->previousPageUrl()}}">
                        <div class="bg-indigo-100 rounded px-3 py-2 cursor-pointer">
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
                    </a>

                    <p class="text-base font-mono text-black mx-4 items-center">
                        Page {{$applicants->currentPage()}}
                    </p>
                    <a href="{{$applicants->nextPageUrl()}}">
                        <div class="bg-indigo-100 rounded px-3 py-2 cursor-pointer">
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
                    </a>


                    @if(Auth::user()->name === 'jwan')

                        <a href="applicants/export">
                    <span class="bg-green-300 text-gray-900 font-mono rounded px-3 py-2 text-sm">
                        Export
                    </span>
                        </a>
                    @endif


                </div>

            </div>

            {{--table--}}
            <div class="overflow-x-auto">

                <div class="w-full">
                    <div class="bg-white rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                            <tr class="bg-gray-800 text-gray-100 font-mono text-sm leading-normal">
                                @if(Auth::user()->name === 'jwan')
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Email Address</th>
                                    <th class="py-3 px-6 text-left">Phone</th>
                                    <th class="py-3 px-6 text-left">Age</th>
                                    <th class="py-3 px-6 text-left">Partner</th>
                                    <th class="py-3 px-6 text-left">Country</th>
                                @endif
                                <th class="py-3 px-6 text-left">Code</th>

                                <th class="py-3 px-6 text-left">Video</th>


                            </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($applicants as $applicant)
                                @if(Auth::user()->name === 'jwan')
                                    <tr class="border-b border-gray-200 hover:bg-indigo-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $applicant->id }}
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $applicant->name }}
                                            </div>
                                        </td>

                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                {{ $applicant->email }}
                                            </div>
                                        </td>

                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center justify-center w-28">
                                                {{ $applicant->phone }}
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                {{ $applicant->age }}
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                {{ $applicant->partner }}
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                {{ $applicant->country }}
                                            </div>
                                        </td>
                                        @endif

                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                {{ $applicant->test_code }}
                                            </div>
                                        </td>

                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                <a @click="toggleModal('{{$applicant->video}}','{{$applicant->name}}')"
                                                   class=" text-blue-500 cursor-pointer">{{ $applicant->video }}</a>
                                            </div>
                                        </td>


                                    </tr>

                                    <!-- This example requires Tailwind CSS v2.0+ -->
                                    <div v-if="open" class="fixed z-10 inset-0 overflow-y-auto"
                                         aria-labelledby="modal-title"
                                         role="dialog" aria-modal="true">
                                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <!--
                                              Background overlay, show/hide based on modal state.

                                              Entering: "ease-out duration-300"
                                                From: "opacity-0"
                                                To: "opacity-100"
                                              Leaving: "ease-in duration-200"
                                                From: "opacity-100"
                                                To: "opacity-0"
                                            -->
                                            <div @click="toggleModal()"
                                                 class="fixed inset-0 bg-gray-500 bg-opacity-20 transition-opacity"
                                                 aria-hidden="true"></div>

                                            <!-- This element is to trick the browser into centering the modal contents. -->
                                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                  aria-hidden="true">&#8203;</span>

                                            <!--
                                                  Modal panel, show/hide based on modal state.

                                                  Entering: "ease-out duration-300"
                                                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    To: "opacity-100 translate-y-0 sm:scale-100"
                                                  Leaving: "ease-in duration-200"
                                                    From: "opacity-100 translate-y-0 sm:scale-100"
                                                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                -->
                                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle w-8/12">
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                id="modal-title">
                                                                Student Name: @{{ studentName }}
                                                            </h3>
                                                            <div class="mt-6 flex justify-center">
                                                                <video class="w-10/12" controls>
                                                                    <source :src="'/storage/videos/' + videoSrc">
                                                                </video>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                    <button @click="toggleModal()" type="button"
                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Back to dashboard
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


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
        var vue = new Vue({
            el: '#app',
            data: {
                open: false,
                videoSrc: '',
                studentName: '',
            },
            methods: {
                toggleModal(video, studentName) {
                    if (video) {
                        this.videoSrc = video
                        this.studentName = studentName
                    }
                    this.open = !this.open
                }
            }


        })
    </script>

@endpush
