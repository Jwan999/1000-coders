<div id="contact"
     class="flex lg:flex-row flex-col justify-between items-center w-full lg:mt-52 mt-20">

    <div class="lg:w-5/12 w-full lg:mt-0 mt-14">
        <img class="lg:hidden block lg:-mr-8 -mr-2" src="/images/email.png" alt="">

        <div class="">
            <h1 class="lg:text-6xl text-5xl text-gray-900 mt-20 lg:mt-0 ">
                @lang('language.contact_us')

            </h1>
            <svg class="mt-10 lg:w-7/12 w-full" viewBox="0 0 934 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Group-21" transform="translate(0.500000, 0.000000)">
                        <path d="M130,-116 C137.455844,-116 143.5,-109.955844 143.5,-102.5 L143.5,130.5 C143.5,137.955844 137.455844,144 130,144 C122.544156,144 116.5,137.955844 116.5,130.5 L116.5,-102.5 C116.5,-109.955844 122.544156,-116 130,-116 Z" id="Rectangle" fill="#F071A8" transform="translate(130.000000, 14.000000) rotate(90.000000) translate(-130.000000, -14.000000) "></path>
                        <path d="M406,-98 C413.455844,-98 419.5,-91.9558441 419.5,-84.5 L419.5,111.5 C419.5,118.955844 413.455844,125 406,125 C398.544156,125 392.5,118.955844 392.5,111.5 L392.5,-84.5 C392.5,-91.9558441 398.544156,-98 406,-98 Z" id="Rectangle" fill="#EE89B5" transform="translate(406.000000, 13.500000) rotate(90.000000) translate(-406.000000, -13.500000) "></path>
                        <path d="M646,-81 C653.455844,-81 659.5,-74.9558441 659.5,-67.5 L659.5,95.5 C659.5,102.955844 653.455844,109 646,109 C638.544156,109 632.5,102.955844 632.5,95.5 L632.5,-67.5 C632.5,-74.9558441 638.544156,-81 646,-81 Z" id="Rectangle" fill="#71B3FF" transform="translate(646.000000, 14.000000) rotate(90.000000) translate(-646.000000, -14.000000) "></path>
                        <path d="M854,-65 C861.455844,-65 867.5,-58.9558441 867.5,-51.5 L867.5,79.5 C867.5,86.9558441 861.455844,93 854,93 C846.544156,93 840.5,86.9558441 840.5,79.5 L840.5,-51.5 C840.5,-58.9558441 846.544156,-65 854,-65 Z" id="Rectangle" fill="#7DC3EE" transform="translate(854.000000, 14.000000) rotate(90.000000) translate(-854.000000, -14.000000) "></path>
                    </g>
                </g>
            </svg>
        </div>

        <form method="POST" action="/emails">
            @csrf
            <div class="flex flex-col mt-10">

                <input name="name" type="text"
                       class="bg-gray-200 border-2 border-gray-300 focus:border-cyan-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_name")">
                <input name="email" type="email"
                       class="mt-6 bg-gray-200 border-2 border-gray-300 focus:border-cyan-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_email")">
                <input name="message" textarea
                       class="mt-6 bg-gray-200 border-2 border-gray-300 focus:border-cyan-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_message")">
                <div class="4/12">
                    <button type="submit"
                            class="my-10 outline-none bg-pink-400 hover:bg-pink-300 text-white font-bold rounded-2xl items-center py-4 px-6 shadow mt-10 transition duration-200 ease-in transform hover:-translate-y-1 hover:scale-110">
                        @lang("language.form_button")

                    </button>
                </div>
            </div>
        </form>


    </div>
    <div class="lg:w-5/12 w-full">
        <img class="hidden lg:block lg:-mr-8 -mr-2" src="/images/email.png" alt="">
        <div class="flex lg:flex-col flex-row justify-center lg:justify-start mt-10">
            <div class="flex items-center transform cursor-pointer hover:scale-110">
                <a class="flex flex-row items-center" href="https://www.instagram.com/iotkids/">
                    <img class="w-12 rtl:ml-3" src="/images/instagram.png" alt="">
                    <h1 class="hidden lg:block text-gray-800 text-lg">
                        instagram
                    </h1>
                </a>

            </div>
            <div class="flex items-center transform cursor-pointer hover:scale-110 lg:mt-6 mt-0">
                <a class="flex flex-row items-center" href="https://www.facebook.com/IoTKIDS">
                    <img class="w-12 rtl:ml-3" src="/images/facebook.png" alt="">
                    <h1 class="hidden items-center lg:block text-gray-800 text-lg">
                        facebook
                    </h1>
                </a>
            </div>
            {{--            <div class="flex items-center">--}}
            {{--                <svg class="w-14" viewBox="0 0 82 82" version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
            {{--                     xmlns:xlink="http://www.w3.org/1999/xlink">--}}
            {{--                    <defs>--}}
            {{--                        <filter x="-26.7%" y="-26.7%" width="153.4%" height="153.4%" filterUnits="objectBoundingBox"--}}
            {{--                                id="filter-1">--}}
            {{--                            <feOffset dx="1" dy="1" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>--}}
            {{--                            <feGaussianBlur stdDeviation="3" in="shadowOffsetOuter1"--}}
            {{--                                            result="shadowBlurOuter1"></feGaussianBlur>--}}
            {{--                            <feColorMatrix--}}
            {{--                                    values="0 0 0 0 0.525490196   0 0 0 0 0.756862745   0 0 0 0 0.325490196  0 0 0 0.8 0"--}}
            {{--                                    type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>--}}
            {{--                            <feMerge>--}}
            {{--                                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>--}}
            {{--                                <feMergeNode in="SourceGraphic"></feMergeNode>--}}
            {{--                            </feMerge>--}}
            {{--                        </filter>--}}
            {{--                    </defs>--}}
            {{--                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
            {{--                        <g id="Artboard" transform="translate(-1302.000000, -1249.000000)">--}}
            {{--                            <g id="Group-8" filter="url(#filter-1)" transform="translate(1314.000000, 1261.000000)">--}}
            {{--                                <g id="More-Square" fill="#86C153" stroke="#323232" stroke-linecap="round"--}}
            {{--                                   stroke-linejoin="round" stroke-width="3">--}}
            {{--                                    <path d="M42.5459375,0.09440625 L15.4552187,0.09440625 C6.01459375,0.09440625 0.09584375,6.77878125 0.09584375,16.2381562 L0.09584375,41.763125 C0.09584375,51.2225 5.98334375,57.906875 15.4552187,57.906875 L42.5428125,57.906875 C52.0146875,57.906875 57.9084375,51.2225 57.9084375,41.763125 L57.9084375,16.2381562 C57.9084375,6.77878125 52.0146875,0.09440625 42.5459375,0.09440625 Z"--}}
            {{--                                          id="Path"></path>--}}
            {{--                                </g>--}}
            {{--                                <g id="Group" transform="translate(9.000000, 9.000000)">--}}
            {{--                                    <polygon id="Path" points="0 0 40 0 40 40 0 40"></polygon>--}}
            {{--                                    <path d="M7.75,28.6666667 C3.39696969,22.4873553 4.32172469,14.0344861 9.90784638,8.94253104 C15.4939681,3.85057594 23.9961172,3.71047567 29.7469732,8.61561758 C35.4978293,13.5207595 36.700583,21.9385711 32.5535089,28.257949 C28.4064347,34.577327 20.2052529,36.8238321 13.4166667,33.5 L5,35 L7.75,28.6666667 Z"--}}
            {{--                                          id="Path" stroke="#323232" stroke-width="2.5" fill="#FFFFFF"--}}
            {{--                                          stroke-linecap="round" stroke-linejoin="round"></path>--}}
            {{--                                    <path d="M15,16.6666667 C15,17.126904 15.373096,17.5 15.8333333,17.5 C16.2935706,17.5 16.6666667,17.126904 16.6666667,16.6666667 L16.6666667,15 C16.6666667,14.5397627 16.2935706,14.1666667 15.8333333,14.1666667 C15.373096,14.1666667 15,14.5397627 15,15 L15,16.6666667 C15,21.2690396 18.7309604,25 23.3333333,25 L25,25 C25.4602373,25 25.8333333,24.626904 25.8333333,24.1666667 C25.8333333,23.7064294 25.4602373,23.3333333 25,23.3333333 L23.3333333,23.3333333 C22.873096,23.3333333 22.5,23.7064294 22.5,24.1666667 C22.5,24.626904 22.873096,25 23.3333333,25"--}}
            {{--                                          id="Path" stroke="#323232" stroke-width="2.5" stroke-linecap="round"--}}
            {{--                                          stroke-linejoin="round"></path>--}}
            {{--                                </g>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                    </g>--}}
            {{--                </svg>--}}
            {{--                <h1 class="hidden lg:block text-gray-800 text-lg">--}}
            {{--                    whatsapp--}}
            {{--                </h1>--}}
            {{--            </div>--}}
        </div>
    </div>

</div>
