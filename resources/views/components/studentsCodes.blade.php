<div class="flex lg:flex-row flex-col justify-center items-center lg:w-8/12 w-full lg:mt-40 mt-20">

    <div class="flex flex-col bg-white lg:w-10/12 w-full rounded-lg shadow-lg p-6 mt-10">
        {{--title--}}
        <div class="flex text-3xl">
            <h1>@lang('language.nameSearch')</h1>
        </div>
        <p class="mt-4">
            يمكنك استعمال الكود عند تسجيلك بالاختبار الثاني
        </p>


        <div v-if="!result" class="flex items-center mt-6">

            <div class="flex flex-col w-full">

                <input v-model="name" name="name" type="text"
                       class="bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_name")">
                <input v-model="email" name="email" type="email"
                       class="mt-6 bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_email")">
                <input v-model="phone" name="phone"
                       class="mt-6 bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.phone")">
                <div class="4/12">
                    <button @click="getCodes()"
                            class="my-10 outline-none bg-yellow-200 hover:bg-yellow-300 rounded-2xl items-center py-4 px-6 shadow mt-10 transition duration-200 ease-in transform hover:-translate-y-1 hover:scale-110">
                        @lang("language.search")

                    </button>
                </div>
            </div>


        </div>

        <div v-if="result" class="w-full flex flex-col justify-center">

            <div v-if="code">
                <h1 class="text-2xl text-gray-800 my-4">@lang('language.name')</h1>
                <h1 class="text-5xl text-blue-600 my-4 text-center">@{{ name }}</h1>
                <h1 class="text-2xl text-gray-800 my-4">@lang('language.code')</h1>
                <h1 class="text-5xl text-blue-600 my-4 text-center">@{{ code }}</h1>
            </div>


            <h1 v-if="!code" class="text-center text-3xl my-6">
                .لا توجد لدينا هذه المعلومات، يرجى التأكد من البحث
            </h1>

            <a href="/" class="text-pink-500 text-lg">الرجوع للبحث</a>


        </div>

    </div>
</div>


