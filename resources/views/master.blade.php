<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{--    <link rel="stylesheet" href="css/app.css">--}}
    <meta name="yandex-verification" content="6e72ede6ef2d9146"/>
    {{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link rel="icon" href="../../public/images/robotnarecolor.png">
    <title>1000 مبرمج عربي</title>
    {{--    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>--}}
    {{--    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>--}}

    {{--    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>--}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Changa', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .floating {
            animation-name: floating;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            /*margin-left: 30px;*/
            margin-top: 5px;
        }

        @keyframes floating {
            0% {
                transform: translate(0, 0px);
            }
            50% {
                transform: translate(0, 50px);
            }
            100% {
                transform: translate(0, -0px);
            }
        }

        .wiggle {
            animation-name: wiggle;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            /*margin-left: 30px;*/
            margin-top: 5px;
        }

        @keyframes wiggle {
            0% {
                transform: translate(0, 0px) rotate(0deg);;
            }
            50% {
                transform: translate(0, -30px) rotate(30deg);;
            }
            100% {
                transform: translate(0, -0px) rotate(0deg);;
            }
        }

        .text-blue {
            color: #4DA5FF;
        }

        .bg-blue {
            background-color: #4DA5FF;
        }


        .bg-pattern {
            background-image: url("/images/bg.png");
            /*object-fit: contain;*/
            background-repeat: no-repeat;
        }

        /*.bg-pattern-phone {*/
        /*    background-image: url("/images/bg-phone.png");*/
        /*    !*object-fit: contain;*!*/
        /*    background-repeat: no-repeat;*/
        /*}*/

        @media screen and (max-width: 600px) {
            .bg-pattern {
                background-image: url("/images/bg-phone.png");
                /*object-fit: contain;*/
                background-repeat: no-repeat;
            }
        }

        .bgQualify {
            background-image: url("images/bgQualify.png");
            background-repeat: no-repeat;
        }

        @media (max-width: 600px) {
            .bgQualify {
                background-image: none !important;
            }
        }

        .teal {
            color: #49C6F3
        }

        #tsparticles {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .flip-horizontal {
            transform: scale(-1, 1) rotate(-20deg);
            /*transform: ;*/
        }

    </style>
</head>
<body class="bg-gray-100">

@if(session('success'))
    <div class="flex justify-center">
        <div
            class="rounded-xl px-5 py-3 bg-pink-200 text-gray-900 text-lg lg:w-4/12 w-8/12 mt-16 fixed z-10 items-center text-center">
            {{ session()->pull('success')}}
        </div>
    </div>
@endif
{{--<div class="particles-js-canvas-el" id="particles-js"></div>--}}

<div dir="@lang("language.dir")" id="app">

    <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:justify-between lg:py-3 py-2">

        <div class="flex items-center lg:w-2/12 w-6/12">
            <div class="w-3/12">
                <a href="/">
                    <img src="/images/1000Coders.png" alt="">
                </a>
            </div>
            <div class="w-10/12 rtl:mr-4 ltr:ml-4">
                <h1 class="lg:text-2xl text-xl self-center">
                    <span class="text-pink-500">1000</span>
                    <span class="text-blue">مبرمج</span>
                    {{--                    @lang("language.contest_name")--}}
                </h1>
            </div>
        </div>

        <div class="flex justify-end lg:w-auto w-6/12">
            <label for="menu-toggle" class="cursor-pointer lg:hidden block ">

                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                     viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>

            </label>

        </div>

        <input class="hidden" type="checkbox" id="menu-toggle"/>
        <div class="hidden lg:flex lg:items-center lg:justify-center lg:w-8/12 sm:w-full w-full" id="menu">

            <scrollactive active-class="active"
                          class="lg:flex items-center justify-between text-lg text-gray-700 pt-4"
                          :offset="100" :duration="800"
                          bezier-easing-value=".5,0,.35,1">

                {{--            <a href="#vision"--}}
                {{--               class="scrollactive-itemscrollactive-item  lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-yellow-300">--}}
                {{--                الرؤية--}}
                {{--            </a>--}}

                <a href="#goals"
                   class="scrollactive-item lg:p-4 py-3 px-0 block hover:underline underline-offset-8 decoration-sky-500 decoration-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                    @lang("language.goals")
                </a>

                <a href="#stages"
                   class="scrollactive-item lg:p-4 py-3 px-0 block hover:underline underline-offset-8 decoration-sky-500 decoration-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                    @lang("language.stages")
                </a>

                <a href="#participation"
                   class="scrollactive-item lg:p-4 py-3 px-0 block hover:underline underline-offset-8 decoration-sky-500 decoration-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                    @lang("language.conditions")
                </a>

                <a href="#organizers"
                   class="scrollactive-item lg:p-4 py-3 px-0 block hover:underline underline-offset-8 decoration-sky-500 decoration-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                    @lang("language.organizers")

                </a>


                {{--                <a href="#partners"--}}
                {{--                   class="scrollactive-item lg:p-4 py-3 px-0 block hover:underline underline-offset-8 decoration-sky-500 decoration-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">--}}
                {{--                    @lang("language.partners")--}}
                {{--                </a>--}}

                <a href="#contact"
                   class="scrollactive-item lg:p-4 py-3 px-0 block hover:underline underline-offset-8 decoration-sky-500 decoration-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent">
                    @lang("language.contact_us")
                </a>

            </scrollactive>

            <div @click="translate()"
                 class="lg:hidden flex w-2/12 rtl:lg:mr-0 rtl:mr-0 justify-start lg:flex-row-reverse flex-row items-center cursor-pointer transform hover:scale-110 transition duration-300 ease-in-out pt-3">
                <img class="lg:w-14 w-8" src="/images/atoe.png" alt="">
                <h1 class="lg:me-6 rtl:ml-0 rtl:mr-6 lg:rtl:mr-0 ltr:mr-0 ltr:ml-6 lg:ltr:ml-0 text-xl text-gray-900 items-center">
                    @lang("language.language")
                </h1>
            </div>

        </div>

        <div @click="translate()"
             class="hidden lg:flex w-2/12 rtl:lg:mr-0 rtl:mr-0 justify-start lg:flex-row-reverse flex-row items-center cursor-pointer transform hover:scale-110 transition duration-300 ease-in-out pt-3">
            <img class="lg:w-16 w-8" src="/images/atoe.png" alt="">
            <h1 class="lg:me-6 rtl:ml-0 rtl:mr-6 lg:rtl:mr-0 ltr:mr-0 ltr:ml-6 lg:ltr:ml-0 text-xl text-gray-900 items-center">
{{--                @lang("language.language")--}}
            </h1>
        </div>

    </header>

    <div class="pt-28 bg-contain bg-pattern h-screen">

        <div class="lg:mx-24 mx-6 z-10 -mt-24">
            @include('components.welcoming')

        </div>
    </div>

    <div class="lg:mx-24 mx-6 z-10">


        @include('components.stageThreeSection')

        {{--    <div id="vision">--}}
        {{--        @include('components/vision')--}}
        {{--    </div>--}}

        {{--        <div class="flex justify-center" id="codes">--}}
        @include('components.champions')
        {{--        </div>--}}
        <div id="goals">
            @include('components.goals')

        </div>
        <div id="stages">
            @include('components.stages')

        </div>
        <div id="participation">
            @include('components.participation')

        </div>
        <div id="organizers">
            @include('components.organizers')
        </div>

    </div>

    {{--    <div dir="@lang("language.dir")" id="partners">--}}
    {{--        @include('components/partners')--}}

    {{--    </div>--}}

    <div id="contact" dir="@lang("language.dir")" class="lg:mx-24 mx-6 z-10">
        @include('components.contact')
    </div>

    {{--footer--}}
    <div id="footer" class="bg-blue w-full items-center text-white p-10 mt-20">
        @lang("language.footer")
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@1.34.0/tsparticles.min.js"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

{{--<script src="particles.js"></script>--}}


<script src="js/app.js"></script>
{{--<script>--}}
{{--    tsParticles.load("tsparticles",--}}
{{--      );--}}

{{--</script>--}}
<script>
    var vue = new Vue({
        el: "#app",
        data: {
            search: '',
            students: [],
            // code: 'يرجى الأنتظار قليلا اذ لم تحصل على الكود يرجى اعادة ادخال المعلومات الصحيحة'

            // complete: true,
        },
        methods: {
            translate() {
                location.href = '/?language=@lang("language.lang_code")'
            },
            getCodes() {
                axios.get('/codes', {
                    params: {
                        search: this.search,
                        stage: 'Stage 2',
                    }
                }).then(response => {
                    this.students = response.data
                })

            },

        },
        mounted() {
            // this.getCodes('Stage 2')
        }
    })
</script>
</body>
</html>
