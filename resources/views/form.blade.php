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
    </style>
</head>
<body dir="rtl" class="bg-gray-100">
<div class="flex justify-center items-center w-full">
    <div class="w-full md:w-5/12 w-8/12 bg-white rounded-xl shadow-lg md:p-8 p-4 mt-40">
        <h1 class="text-2xl">
            سجل حسابك لتبدأ بالمسابقة
        </h1>
        <div class="">
            <input type="text"
                   class="py-3 px-4 rounded-md border border-gray-100 focus:border-yellow-300 shadow bg-gray-100 w-full outline-none mt-6"
                   placeholder="اسم الطالب الكامل">
            <input type="text"
                   class="py-3 px-4 rounded-md border border-gray-100 focus:border-yellow-300 shadow bg-gray-100 w-full outline-none mt-6"
                   placeholder="اسم الطالب">
            <input type="text"
                   class="py-3 px-4 rounded-md border border-gray-100 focus:border-yellow-300 shadow bg-gray-100 w-full outline-none mt-6"
                   placeholder="اسم الطالب">
            <div class="flex w-full justify-end">
                <button class="py-3 px-4 outline-none bg-yellow-400 rounded-lg mt-6">
                    ارسال
                </button>
            </div>

        </div>

    </div>
</div>
</body>
</html>