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
<div id="app" class="flex justify-center items-center w-full">
    <div class="w-full lg:w-4/12 w-8/12 bg-white rounded-xl shadow-lg lg:p-8 p-4 lg:mt-20 mt-10">
        <h1 class="text-3xl text-pink-400">
            للتسجيل في المسابقة يرجي ملئ الحقول التالي
        </h1>
        <p class="text-lg mt-3">
            ملاحظة يرجى استعمال رقم هاف مربوط بتطبيق واتساب لكي نتواصل معكم مستقبلا.
        </p>

        <form method="POST" action="/signup">
            @csrf
            <div class="flex flex-col mt-10">

                <input v-model="name" name="name" type="text"
                       class="bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="الأسم الكامل">
                @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                <input v-model="email" name="email" type="email"
                       class="mt-6 bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="العنوان البريدي">
                @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
                <h1 class="text-base text-gray-700 mt-6 mb-2">
                    ملاحظة: يرجى اضافة رمز الدولة قبل رقم الهاتف
                </h1>
                <input v-model="phone" name="phone" type="number"
                       class=" bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="رقم الهاتف">

                @if($errors->has('phone'))
                    <div class="error">{{ $errors->first('phone') }}</div>
                @endif
                <input v-model="age" name="age" type="number"
                       class="mt-6 bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="العمر">
                @if($errors->has('age'))
                    <div class="error">{{ $errors->first('age') }}</div>
                @endif

                <select name="country" v-model="selected"
                        class="mt-6 focus:outline-none bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-12 rounded-xl outline-none">

                    <option>الأردن</option>
                    <option>الكويت</option>
                    <option>العراق</option>
                    <option>الجزائر</option>
                    <option>السودان</option>
                    <option>المغرب</option>
                    <option>السعودية</option>
                    <option>اليمن</option>
                    <option>سوريا</option>
                    <option>الصومال</option>
                    <option>تونس</option>
                    <option>الأمارات العربية المتحدة</option>
                    <option>ليبيا</option>
                    <option>فلسطين</option>
                    <option>مصر</option>

                    <option>عمان</option>
                    <option>موريتانيا</option>
                    <option>قطر</option>
                    <option>البحرين</option>
                    <option>جيبوتي</option>
                    <option>جزر القمر</option>
                    <option>لبنان</option>


                </select>
                @if($errors->has('country'))
                    <div class="error">{{ $errors->first('country') }}</div>
                @endif

                <div class="4/12">
                    <button type="submit" @click="submit()"
                            class="my-10 outline-none bg-yellow-200 hover:bg-yellow-300 rounded-2xl items-center py-4 px-6 shadow mt-10 transition duration-200 ease-in transform hover:-translate-y-1 hover:scale-110">
                        @lang("language.form_button")

                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    let vue = new Vue({
        el: '#app',
        data: {
            selected: 'الدولة',
            name: null,
            email: null,
            phone: null,
            age: null,
        },
        methods: {
            submit() {
                axios.post('/signup', {
                    name: this.name,
                    email: this.email,
                    phone: this.phone,
                    age: this.age,
                    country: 'hello',
                })
            }
        }
    })


</script>


</body>
</html>