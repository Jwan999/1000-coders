<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" href="robotnarecolor.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>كإس العرب</title>

    <style>
        body {
            font-family: 'Tajawal', sans-serif;

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


    </style>
</head>
<body dir="rtl" class="bg-gray-100 relative">

<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:justify-between lg:py-3 py-2">
    <div class="flex-1 lg:flex-none flex justify-between items-center">
        <a class="w-16" href="#">
            <img src="robotnarecolor.png" alt="">
        </a>
        <h1 class="lg:mr-6 mr-0 ml-12 lg:ml-0 lg:text-2xl text-xl">
            مسابقة كأس العرب
        </h1>
    </div>

    <label for="menu-toggle" class="pointer-cursor lg:hidden block">

        <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
             viewBox="0 0 20 20">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>

    </label>
    <input class="hidden" type="checkbox" id="menu-toggle"/>
    <div class="hidden lg:flex lg:items-center lg:justify-around lg:w-auto w-full" id="menu">
        <scrollactive active-class="active"
                      class="lg:flex items-center justify-between text-lg text-gray-700 pt-4 lg:pt-0"
                      :offset="400" :duration="800"
                      bezier-easing-value=".5,0,.35,1">

            {{--            <a href="#vision"--}}
            {{--               class="scrollactive-itemscrollactive-item  lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-yellow-300">--}}
            {{--                الرؤية--}}
            {{--            </a>--}}

            <a href="#goals"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                الاهداف</a>

            <a href="#stages"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                المراحل</a>

            <a href="#participation"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                شروط الاشتراك</a>

            <a href="#organizers"
               class="collective-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                المنظمين
            </a>


            <a href="#partners"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                الشركاء</a>

            <a href="#contact"
               class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">تواصل
                معنا</a>

        </scrollactive>
        {{--        <a href="#"--}}
        {{--           class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor text-yellow-400 text-2xl">--}}
        {{--            ٢٠١٩ </a>--}}

    </div>

</header>

{{--@include('components/navbar')--}}

<div class="lg:mx-24 mx-6 z-10">

    @include('components/welcoming')
    {{--    <div id="vision">--}}
    {{--        @include('components/vision')--}}
    {{--    </div>--}}
    <div id="goals">
        @include('components/goals')

    </div>
    <div id="stages">
        @include('components/stages')

    </div>
    <div id="participation">
        @include('components/participation')

    </div>
    <div id="organizers">
        @include('components/organizers')
    </div>

</div>
@include('components/partners')
<div class="lg:mx-24 mx-6 z-10">
@include('components/contact')
</div>

{{--footer--}}
<div id="partners" class="bg-yellow-300 w-full items-center p-10 mt-20">
    كأس العرب 2020
</div>

<script src="js/app.js"></script>

</body>
</html>