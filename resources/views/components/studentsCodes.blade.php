<div class="flex flex-col bg-white lg:w-10/12 w-full rounded-lg shadow-lg p-6 mt-10 lg:mt-52">
    <div class="text-2xl">
        <h1>@lang('language.nameSearch')</h1>
    </div>
    <p class="text-base mb-6">يمكنك البحث اما عن طريق الاسم ،الرقم، والايميل.</p>

    {{--page--}}
    <div class="flex flex-wrap w-full items-center mb-4">
        <div class="flex lg:w-6/12 w-full">
            <input v-model="search" name="search" type="text"
                   class="bg-gray-200 lg:w-6/12 w-full border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-base py-3 px-4 rounded-xl outline-none"
                   placeholder="@lang("language.form_name")">
            <button type="submit" @click="getCodes()"
                    class="outline-none mx-3 focus:outline-none bg-yellow-200 hover:bg-yellow-300 rounded-2xl items-center py-3 px-6 shadow">
                ابحث
            </button>
        </div>
{{--        <div class="flex flex-wrap lg:justify-end lg:w-6/12 w-full mt-4 lg:mt-0">--}}
            {{--            <button type="submit" @click="stages('Stage 1')"--}}
            {{--                    :class="{'bg-blue-500 text-white ' : stage == 'Stage 1', 'text-blue-600' : stage !== 'Stage 1'}"--}}
            {{--                    class="outline-none mx-3 focus:outline-none bg-blue-100 hover:bg-blue-500 hover:text-white rounded-2xl items-center py-3 px-6 shadow">--}}
            {{--                نتائج المرحلة الاولي--}}
            {{--            </button>--}}

{{--            <button type="submit" @click="stages('Stage 2')"--}}
{{--                    :class="{'bg-blue-500 text-white ' : stage == 'Stage 2', 'text-blue-600' : stage !== 'Stage 2'}"--}}
{{--                    class="outline-none mx-3 lg:mt-0 mt-2 focus:outline-none bg-blue-100 hover:bg-blue-500 hover:text-white rounded-2xl items-center py-3 px-6 shadow">--}}
{{--                نتائج المرحلة الثانية--}}
{{--            </button>--}}
{{--        </div>--}}

    </div>

    {{--table--}}
    <div class="overflow-x-auto h-96">

        <div class="w-full">
            <div class="bg-white rounded my-6">
                <table class="min-w-max w-full table-auto relative">
                    <thead>
                    <tr class="text-gray-100 text-base leading-normal">
                        <th class="py-3 px-6 sticky top-0 bg-gray-800 mt-4 text-right">الاسم</th>
                        <th class="py-3 px-6 sticky top-0 bg-gray-800 mt-4 text-right">عن طريق احد الشركاء</th>
                        <th class="py-3 px-6 sticky top-0 bg-gray-800 mt-4 text-right">الكود</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-lg">
                    {{--@foreach ($emails as $email)--}}

                    <tr v-for="student in students" class="border-b border-gray-200 hover:bg-yellow-50">
                        <td class="py-3 px-6 whitespace-nowrap">
                            <div class="flex">
                                @{{ student.name }}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex">
                                @{{ student.partner }}
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex">
                                @{{ student.code }}
                            </div>
                        </td>

                    </tr>

                    {{--                    @endforeach--}}


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


