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
            margin-left: 30px;
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

@include('components/navbar')
{{--<div id="code" class=" h-72 w-full z-0 absolute static top-0 left-0 lg:mt-60 mt-32">--}}

{{--</div>--}}
<div class="lg:mx-24 mx-6 z-10">
    @include('components/welcoming')
    @include('components/vision')
    @include('components/goals')
    @include('components/stages')
    @include('components/participation')
    @include('components/organizers')

</div>
@include('components/partners')

{{--footer--}}
<div class="bg-yellow-300 w-full items-center p-8 mt-20">
    هلاوو
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="js/app.js"></script>


</body>
</html>