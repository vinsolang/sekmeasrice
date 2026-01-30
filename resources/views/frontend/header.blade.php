<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Nokora:wght@100..900&family=Siemreap&display=swap"
        rel="stylesheet">
    {{-- Icon --}}
    <link rel="stylesheet" href="{{asset('vendor/fonts/boxicons.css')}}" />
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('frontend/assets/logo/logo_rice.png') }}">
    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            /* Applies Inter to all text in the <body>, with fallbacks */
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="font-[Battambang] overflow-x-hidden p-0 m-0">

    <!-- HERO SECTION -->
    <section class="relative w-full max-w-full z-30">

        <!-- Background Image -->
        <div class="absolute inset-0 w-full">
            <img src="@yield('background-image')" alt="Background"
                class="w-full h-full max-w-full object-cover object-center max-w-full">
        </div>
        @if(View::hasSection('background-career'))
            <div class="absolute inset-0 w-full">
                <img src="@yield('background-career')" alt="Career" class="w-full h-full max-w-full object-cover">
            </div>
        @endif
        <!-- HEADER -->
        <header
            class="relative w-full flex flex-col items-center fixed top-0 left-0 z-50 p-0 m-0 sm:p-0 sm:m-0 md:p-0 md:m-0 lg:p-4 lg:mt-2">
            <!-- WRAPPER to control overlap -->
            <div class="relative w-full flex flex-col items-center"> <!-- TOP GOLD BAR -->
                <div class="relative xl:top-[34px] lg:top-[34px] sm:top-0 w-[80%] h-[65px] flex items-center justify-between px-10 z-20"
                    style=" background-image: url('{{ asset('frontend/assets/imges/vector-img.png') }}'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; ">

                    <!-- Contact Info + Logo Section -->
                    <div class="relative left-10 flex flex-wrap items-center gap-4 text-sm text-black font-medium">
                        <!-- This section is visible only on large screens -->
                        <div class="hidden lg:flex items-center gap-4">
                            <span class="flex items-center gap-2">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4C2.89 4 2 4.9 2 6v12c0 1.09.89 2 2 2h16c1.1 0 2-.91 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zM4 18V8l8 7 8-7v10H4z" />
                                </svg>
                                info@lehsekmeasrice.com
                            </span>

                            <span class="flex items-center gap-2">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M6.62 10.79a15.055 15.055 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 5c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                                855 (0) 87 68 67 68
                            </span>
                        </div>

                        <!-- This logo only shows on tablets and mobile -->
                        <div class="lg:hidden relative top-[20px] transform -translate-y-1/2">
                            <img src="{{ asset('frontend/assets/logo/logo_rice.png') }}" alt="Logo" class="h-12 w-auto">
                        </div>
                    </div>

                    <!-- Centered Logo (show on desktop only) -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-[50%] hidden lg:block">
                        <img src="{{ asset('frontend/assets/logo/logo_rice.png') }}" alt="Logo" class="h-14" />
                    </div>
                    <!-- Right: Social Icons -->
                    <div class="relative -left-10 flex items-center gap-2">
                        <div class="hidden md:flex gap-3">
                            <a href="#" class="hover:scale-110 transition-transform"> <svg width="21" height="21"
                                    viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                        fill="#007BFF" />
                                </svg>
                            </a>
                            <a href="#" class="hover:scale-110 transition-transform"> <svg width="22" height="21"
                                    viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.1513 20.7117C16.8706 20.7117 21.5071 16.0752 21.5071 10.3559C21.5071 4.63648 16.8706 0 11.1513 0C5.43189 0 0.79541 4.63648 0.79541 10.3559C0.79541 16.0752 5.43189 20.7117 11.1513 20.7117Z"
                                        fill="#039BE5" />
                                    <path
                                        d="M5.53401 10.1315L15.5188 6.28174C15.9822 6.11432 16.3869 6.3948 16.2368 7.09554L16.2376 7.09468L14.5376 15.1041C14.4116 15.6719 14.0741 15.81 13.6021 15.5425L11.0131 13.6344L9.76437 14.8374C9.6263 14.9755 9.50979 15.092 9.24227 15.092L9.42608 12.4573L14.2243 8.1225C14.4331 7.93868 14.1777 7.83512 13.9024 8.01808L7.97281 11.7514L5.41664 10.954C4.86174 10.7779 4.84966 10.3991 5.53401 10.1315Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="hover:scale-110 transition-transform"> <svg width="22" height="21"
                                    viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9468 20.7117C16.6662 20.7117 21.3027 16.0752 21.3027 10.3559C21.3027 4.63648 16.6662 0 10.9468 0C5.22742 0 0.590942 4.63648 0.590942 10.3559C0.590942 16.0752 5.22742 20.7117 10.9468 20.7117Z"
                                        fill="#29A71A" />
                                    <path
                                        d="M15.5128 5.79041C14.4354 4.70222 13.0045 4.03486 11.4784 3.90873C9.95223 3.78259 8.43124 4.20597 7.18976 5.1025C5.94828 5.99903 5.06804 7.30969 4.70781 8.79806C4.34757 10.2864 4.53107 11.8546 5.22519 13.2196L4.54382 16.5275C4.53675 16.5605 4.53655 16.5945 4.54324 16.6275C4.54992 16.6605 4.56334 16.6918 4.58266 16.7194C4.61096 16.7612 4.65136 16.7935 4.69846 16.8117C4.74556 16.83 4.79713 16.8335 4.84626 16.8217L8.08835 16.0533C9.44952 16.7298 11.0066 16.9015 12.4824 16.5378C13.9583 16.1741 15.2573 15.2986 16.1482 14.067C17.0392 12.8355 17.4643 11.3278 17.3479 9.81223C17.2316 8.29666 16.5813 6.87153 15.5128 5.79041ZM14.5019 13.8586C13.7564 14.6019 12.7965 15.0927 11.7573 15.2616C10.7182 15.4305 9.65224 15.269 8.7097 14.8L8.25781 14.5764L6.27019 15.0471L6.27608 15.0224L6.68796 13.0219L6.46672 12.5853C5.98512 11.6394 5.81524 10.5654 5.98139 9.51715C6.14754 8.46886 6.64122 7.50005 7.39169 6.7495C8.33466 5.80681 9.61344 5.27724 10.9468 5.27724C12.2802 5.27724 13.5589 5.80681 14.5019 6.7495C14.51 6.75871 14.5186 6.76736 14.5278 6.77539C15.4591 7.72051 15.979 8.99547 15.9741 10.3223C15.9693 11.6492 15.4401 12.9203 14.5019 13.8586Z"
                                        fill="white" />
                                    <path
                                        d="M14.3254 12.3909C14.0818 12.7745 13.697 13.244 13.2133 13.3605C12.366 13.5653 11.0657 13.3676 9.44756 11.8589L9.42756 11.8413C8.0048 10.5221 7.63529 9.42414 7.72473 8.5533C7.77415 8.05905 8.18603 7.61186 8.53319 7.32002C8.58807 7.27317 8.65316 7.23982 8.72324 7.22263C8.79332 7.20544 8.86644 7.20488 8.93678 7.22101C9.00711 7.23713 9.07269 7.26949 9.12828 7.31549C9.18387 7.3615 9.22793 7.41987 9.25692 7.48594L9.7806 8.66275C9.81463 8.73905 9.82724 8.82318 9.81708 8.90611C9.80692 8.98904 9.77438 9.06763 9.72294 9.13347L9.45816 9.47709C9.40134 9.54805 9.36706 9.63438 9.35972 9.72498C9.35238 9.81558 9.37232 9.9063 9.41697 9.98547C9.56524 10.2455 9.92064 10.628 10.3149 10.9822C10.7573 11.3823 11.2481 11.7483 11.5587 11.8731C11.6419 11.907 11.7333 11.9153 11.8212 11.8969C11.909 11.8784 11.9894 11.834 12.0518 11.7695L12.359 11.46C12.4182 11.4016 12.4919 11.3599 12.5726 11.3392C12.6532 11.3185 12.7379 11.3196 12.8179 11.3423L14.0618 11.6954C14.1304 11.7164 14.1933 11.7529 14.2457 11.802C14.298 11.851 14.3385 11.9114 14.3639 11.9786C14.3894 12.0457 14.3991 12.1177 14.3924 12.1892C14.3858 12.2606 14.3628 12.3296 14.3254 12.3909Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="hover:scale-110 transition-transform"> <svg width="22" height="21"
                                    viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.096 10.4169C21.096 4.73136 16.487 0.122311 10.8014 0.122311C5.11588 0.122311 0.506836 4.73136 0.506836 10.4169C0.506836 16.1025 5.11588 20.7115 10.8014 20.7115C16.487 20.7115 21.096 16.1025 21.096 10.4169Z"
                                        fill="url(#paint0_linear_104_3472)" />
                                    <path opacity="0.1"
                                        d="M18.5495 3.64436C17.0487 6.39952 14.9261 9.24137 12.2739 11.8936C9.62166 14.5458 6.77981 16.6643 4.02871 18.1652C3.85623 18.0153 3.68872 17.859 3.52617 17.6965C2.54366 16.7468 1.76005 15.6109 1.22105 14.3553C0.68204 13.0996 0.398422 11.7491 0.386729 10.3827C0.375037 9.01624 0.635503 7.66115 1.15294 6.39642C1.67038 5.13168 2.43443 3.98262 3.40055 3.01623C4.36667 2.04984 5.51552 1.28547 6.78011 0.767678C8.0447 0.249886 9.39972 -0.0109585 10.7662 0.000352722C12.1326 0.011664 13.4831 0.294905 14.739 0.83356C15.9948 1.37222 17.1308 2.15551 18.0808 3.13776C18.2434 3.3003 18.3996 3.46917 18.5495 3.64436Z"
                                        fill="white" />
                                    <path
                                        d="M13.2397 4.99915H8.36332C7.57297 4.99915 6.81499 5.31312 6.25613 5.87198C5.69727 6.43084 5.3833 7.18882 5.3833 7.97917V12.8556C5.3833 13.6459 5.69727 14.4039 6.25613 14.9627C6.81499 15.5216 7.57297 15.8356 8.36332 15.8356H13.2397C14.0301 15.8356 14.788 15.5216 15.3469 14.9627C15.9058 14.4039 16.2197 13.6459 16.2197 12.8556V7.97917C16.2197 7.18882 15.9058 6.43084 15.3469 5.87198C14.788 5.31312 14.0301 4.99915 13.2397 4.99915ZM15.2715 12.4275C15.2715 13.0799 15.0124 13.7056 14.5511 14.1669C14.0897 14.6282 13.4641 14.8874 12.8117 14.8874H8.79135C8.13896 14.8874 7.51328 14.6282 7.05197 14.1669C6.59065 13.7056 6.33149 13.0799 6.33149 12.4275V8.40721C6.33149 7.75481 6.59065 7.12913 7.05197 6.66782C7.51328 6.2065 8.13896 5.94734 8.79135 5.94734H12.8117C13.4641 5.94734 14.0897 6.2065 14.5511 6.66782C15.0124 7.12913 15.2715 7.75481 15.2715 8.40721V12.4275Z"
                                        fill="white" />
                                    <path
                                        d="M12.7777 8.46129L12.752 8.43555L12.7303 8.41388C12.2181 7.90349 11.5245 7.61706 10.8014 7.6174C10.4363 7.61988 10.0752 7.69428 9.73886 7.83635C9.40249 7.97842 9.09741 8.18537 8.84104 8.44538C8.58468 8.70539 8.38206 9.01336 8.24476 9.35171C8.10746 9.69005 8.03817 10.0521 8.04085 10.4173C8.04029 11.1583 8.33239 11.8695 8.85358 12.3963C9.10887 12.6547 9.41307 12.8596 9.74844 12.9991C10.0838 13.1387 10.4436 13.21 10.8068 13.209C11.3517 13.1976 11.8814 13.0278 12.3315 12.7205C12.7815 12.4132 13.1324 11.9815 13.3414 11.4782C13.5503 10.9749 13.6083 10.4216 13.5082 9.88592C13.4081 9.35022 13.1543 8.85522 12.7777 8.46129ZM10.8014 12.254C10.4371 12.2591 10.0795 12.1558 9.77405 11.9571C9.46863 11.7584 9.2292 11.4733 9.08623 11.1382C8.94325 10.803 8.90319 10.4329 8.97113 10.075C9.03906 9.71698 9.21194 9.3873 9.46776 9.12784C9.72358 8.86838 10.0508 8.69087 10.4078 8.61789C10.7648 8.54491 11.1354 8.57975 11.4725 8.71798C11.8096 8.85621 12.098 9.09159 12.301 9.39418C12.504 9.69677 12.6124 10.0529 12.6125 10.4173C12.6142 10.6568 12.5688 10.8944 12.4787 11.1163C12.3887 11.3383 12.2558 11.5404 12.0876 11.7109C11.9194 11.8815 11.7192 12.0173 11.4985 12.1105C11.2779 12.2037 11.041 12.2524 10.8014 12.254Z"
                                        fill="white" />
                                    <path
                                        d="M14.3816 7.48898C14.3823 7.5759 14.3659 7.66211 14.3332 7.74267C14.3006 7.82323 14.2524 7.89656 14.1914 7.95846C14.1303 8.02036 14.0577 8.06962 13.9776 8.10342C13.8975 8.13722 13.8116 8.15489 13.7247 8.15542C13.6385 8.15538 13.5531 8.13824 13.4736 8.10499C13.3941 8.07174 13.322 8.02304 13.2614 7.96172C13.1696 7.86861 13.1072 7.75062 13.0819 7.62237C13.0565 7.49412 13.0694 7.36125 13.1189 7.24025C13.1683 7.11924 13.2522 7.01542 13.3602 6.94164C13.4681 6.86787 13.5953 6.8274 13.726 6.82525C13.879 6.82522 14.0271 6.87891 14.1446 6.97696L14.1581 6.9905C14.18 7.00829 14.1999 7.02826 14.2177 7.0501L14.2326 7.06636C14.3296 7.18581 14.3822 7.33513 14.3816 7.48898Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_104_3472" x1="3.52207" y1="3.13754"
                                            x2="18.0808" y2="17.6963" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FAE100" />
                                            <stop offset="0.15" stop-color="#FCB720" />
                                            <stop offset="0.3" stop-color="#FF7950" />
                                            <stop offset="0.5" stop-color="#FF1C74" />
                                            <stop offset="1" stop-color="#6C1CD1" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        {{-- User dropdown --}}
                        {{-- @auth('customer')
                        <li x-data="{ open: false }" class="relative left-5">
                            <button @click="open = !open"
                                class="flex items-center gap-2 px-3 py-2 rounded-full hover:bg-gray-100">
                                <i class="tf-icons bx bx-user text-xl"></i>
                                <span>{{ Auth::guard('customer')->user()->username }}</span>
                                <i class="bx bx-chevron-down"></i>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-lg p-4">
                                <ul>
                                    <li class="flex items-center gap-2">
                                        <img src="{{ 
                                                                        Auth::guard('customer')->user()->avatar
                            ?? (Auth::guard('customer')->user()->profile
                                ? 'storage/profiles/' . Auth::guard('customer')->user()->profile
                                : asset('frontend/assets/imges/profile.png')
                            )
                                                                    }}" alt="Profile"
                                            class="w-10 h-10 rounded-full object-cover">
                                        <div>
                                            <p class="font-semibold">{{ Auth::guard('customer')->user()->username }}</p>
                                            <p class="text-sm text-gray-500">
                                                {{ Auth::guard('customer')->user()->email }}
                                            </p>
                                        </div>
                                    </li>
                                    <li class="mt-2 border-t pt-2">
                                        <form method="POST" action="{{ route('client.logout.submit') }}">
                                            @csrf
                                            <button type="submit"
                                                class="w-full text-left text-red-600 flex items-center gap-2">
                                                <i class="bx bx-log-out"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endauth --}}

                    </div>
                </div>
                <!-- BOTTOM WHITE BAR -->
                <div class="relative w-[65%] h-[130px] top-[-65px] lg:top-[-30px] flex justify-center items-center overflow-hidden z-10"
                    style="
                    background-image: url('{{ asset('frontend/assets/imges/header-white.png') }}'); 
                    background-size: 100% 100%; background-repeat: 
                    no-repeat;background-position: center;">

                    <!--  Mobile Menu Button (LEFT SIDE) -->
                    <div class="absolute left-[20px] top-[90px] -translate-y-1/2 block lg:hidden z-50">
                        <button id="menuButton"
                            class="text-[#1E3E0F] text-3xl focus:outline-none w-[50px] h-[50px] flex items-center justify-center">
                            <!-- Menu Icon -->
                            <img id="menuIcon" src="{{ asset('image/icon/button-mobail.png') }}" alt="menu"
                                class="w-[25px] h-[25px]" />
                            <!-- Close Icon -->
                            <img id="closeIcon" src="{{ asset('image/icon/close.png') }}" alt="close"
                                class="w-[25px] h-[25px] hidden" />
                        </button>
                    </div>

                    <!--  Navbar -->
                    <nav class="relative">
                        <ul
                            class="relative top-[20px] sm:top-[25px] lg:top-[30px] flex flex-wrap justify-center gap-4 sm:gap-6 lg:gap-8 text-green-700 font-medium text-sm sm:text-base mt-4 sm:mt-8">

                            <!-- Desktop Menu -->
                            <div class="hidden lg:flex gap-6">
                                <li><a href="{{ route('home') }}" class="hover:text-yellow-600 transition">Home</a></li>
                                <li><a href="{{ route('export') }}" class="hover:text-yellow-600 transition">Export</a>
                                </li>
                                <li><a href="{{ route('about') }}" class="hover:text-yellow-600 transition">About Us</a>
                                </li>
                                <li><a href="{{ route('news') }}"
                                        class="hover:text-yellow-600 transition">Activities</a></li>
                                <li><a href="{{ route('career') }}" class="hover:text-yellow-600 transition">Career</a>
                                </li>
                                <li><a href="{{ route('contact') }}" class="hover:text-yellow-600 transition">Contact
                                        Us</a></li>
                            </div>
                        </ul>

                        <!--  Mobile Slide Menu -->
                        <div id="mobileMenu"
                            class="fixed mt-[65px] h-full left-0 h-[calc(100%-98px)] w-[70%] max-w-[300px] bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-40 p-6 lg:hidden">
                            <ul
                                class="relative left-[30px] top-[30px] flex flex-col gap-6 text-green-700 font-medium text-base">
                                <li><a href="{{ route('home') }}" class="hover:text-yellow-600 transition">Home</a></li>
                                <li><a href="{{ route('export') }}" class="hover:text-yellow-600 transition">Export</a>
                                </li>
                                <li><a href="{{ route('about') }}" class="hover:text-yellow-600 transition">About Us</a>
                                </li>
                                <li><a href="{{ route('news') }}"
                                        class="hover:text-yellow-600 transition">Activities</a></li>
                                <li><a href="{{ route('career') }}" class="hover:text-yellow-600 transition">Career</a>
                                </li>
                                <li><a href="{{ route('contact') }}" class="hover:text-yellow-600 transition">Contact
                                        Us</a></li>

                                <li class="relative top-[50px]">
                                    <span class="flex items-center gap-2"> <svg width="14" height="14"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20 4H4C2.89 4 2 4.9 2 6v12c0 1.09.89 2 2 2h16c1.1 0 2-.91 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zM4 18V8l8 7 8-7v10H4z" />
                                        </svg> info@lehsekmeasrice.com
                                    </span>
                                    <span class="flex items-center gap-2">
                                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M6.62 10.79a15.055 15.055 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 5c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                        </svg>855 (0) 87 68 67 68
                                    </span>
                                </li>
                                <li class="relative top-[50px] flex gap-4">
                                    <a href="#" class="hover:scale-110 transition-transform"> <svg width="21"
                                            height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                                fill="#007BFF" />
                                        </svg>
                                    </a>
                                    <a href="#" class="hover:scale-110 transition-transform"> <svg width="22"
                                            height="21" viewBox="0 0 22 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.1513 20.7117C16.8706 20.7117 21.5071 16.0752 21.5071 10.3559C21.5071 4.63648 16.8706 0 11.1513 0C5.43189 0 0.79541 4.63648 0.79541 10.3559C0.79541 16.0752 5.43189 20.7117 11.1513 20.7117Z"
                                                fill="#039BE5" />
                                            <path
                                                d="M5.53401 10.1315L15.5188 6.28174C15.9822 6.11432 16.3869 6.3948 16.2368 7.09554L16.2376 7.09468L14.5376 15.1041C14.4116 15.6719 14.0741 15.81 13.6021 15.5425L11.0131 13.6344L9.76437 14.8374C9.6263 14.9755 9.50979 15.092 9.24227 15.092L9.42608 12.4573L14.2243 8.1225C14.4331 7.93868 14.1777 7.83512 13.9024 8.01808L7.97281 11.7514L5.41664 10.954C4.86174 10.7779 4.84966 10.3991 5.53401 10.1315Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    <a href="#" class="hover:scale-110 transition-transform"> <svg width="22"
                                            height="21" viewBox="0 0 22 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9468 20.7117C16.6662 20.7117 21.3027 16.0752 21.3027 10.3559C21.3027 4.63648 16.6662 0 10.9468 0C5.22742 0 0.590942 4.63648 0.590942 10.3559C0.590942 16.0752 5.22742 20.7117 10.9468 20.7117Z"
                                                fill="#29A71A" />
                                            <path
                                                d="M15.5128 5.79041C14.4354 4.70222 13.0045 4.03486 11.4784 3.90873C9.95223 3.78259 8.43124 4.20597 7.18976 5.1025C5.94828 5.99903 5.06804 7.30969 4.70781 8.79806C4.34757 10.2864 4.53107 11.8546 5.22519 13.2196L4.54382 16.5275C4.53675 16.5605 4.53655 16.5945 4.54324 16.6275C4.54992 16.6605 4.56334 16.6918 4.58266 16.7194C4.61096 16.7612 4.65136 16.7935 4.69846 16.8117C4.74556 16.83 4.79713 16.8335 4.84626 16.8217L8.08835 16.0533C9.44952 16.7298 11.0066 16.9015 12.4824 16.5378C13.9583 16.1741 15.2573 15.2986 16.1482 14.067C17.0392 12.8355 17.4643 11.3278 17.3479 9.81223C17.2316 8.29666 16.5813 6.87153 15.5128 5.79041ZM14.5019 13.8586C13.7564 14.6019 12.7965 15.0927 11.7573 15.2616C10.7182 15.4305 9.65224 15.269 8.7097 14.8L8.25781 14.5764L6.27019 15.0471L6.27608 15.0224L6.68796 13.0219L6.46672 12.5853C5.98512 11.6394 5.81524 10.5654 5.98139 9.51715C6.14754 8.46886 6.64122 7.50005 7.39169 6.7495C8.33466 5.80681 9.61344 5.27724 10.9468 5.27724C12.2802 5.27724 13.5589 5.80681 14.5019 6.7495C14.51 6.75871 14.5186 6.76736 14.5278 6.77539C15.4591 7.72051 15.979 8.99547 15.9741 10.3223C15.9693 11.6492 15.4401 12.9203 14.5019 13.8586Z"
                                                fill="white" />
                                            <path
                                                d="M14.3254 12.3909C14.0818 12.7745 13.697 13.244 13.2133 13.3605C12.366 13.5653 11.0657 13.3676 9.44756 11.8589L9.42756 11.8413C8.0048 10.5221 7.63529 9.42414 7.72473 8.5533C7.77415 8.05905 8.18603 7.61186 8.53319 7.32002C8.58807 7.27317 8.65316 7.23982 8.72324 7.22263C8.79332 7.20544 8.86644 7.20488 8.93678 7.22101C9.00711 7.23713 9.07269 7.26949 9.12828 7.31549C9.18387 7.3615 9.22793 7.41987 9.25692 7.48594L9.7806 8.66275C9.81463 8.73905 9.82724 8.82318 9.81708 8.90611C9.80692 8.98904 9.77438 9.06763 9.72294 9.13347L9.45816 9.47709C9.40134 9.54805 9.36706 9.63438 9.35972 9.72498C9.35238 9.81558 9.37232 9.9063 9.41697 9.98547C9.56524 10.2455 9.92064 10.628 10.3149 10.9822C10.7573 11.3823 11.2481 11.7483 11.5587 11.8731C11.6419 11.907 11.7333 11.9153 11.8212 11.8969C11.909 11.8784 11.9894 11.834 12.0518 11.7695L12.359 11.46C12.4182 11.4016 12.4919 11.3599 12.5726 11.3392C12.6532 11.3185 12.7379 11.3196 12.8179 11.3423L14.0618 11.6954C14.1304 11.7164 14.1933 11.7529 14.2457 11.802C14.298 11.851 14.3385 11.9114 14.3639 11.9786C14.3894 12.0457 14.3991 12.1177 14.3924 12.1892C14.3858 12.2606 14.3628 12.3296 14.3254 12.3909Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="hover:scale-110 transition-transform inline-flex items-center justify-center min-w-[24px] min-h-[24px]">
                                        <img src="{{ asset('frontend/assets/icon/ig.png') }}" alt="instagram"
                                            class="w-[22px] h-[22px]">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </header>




        <!-- @@@ HERO TEXT (Centered on screen) -->
        {{-- Text Career --}}
        <div
            class="absolute xl:top-[-180px] left-[20px] lg:top-[-100px] inset-0 flex justify-start items-center pl-10 md:pl-20 lg:pl-32 ">
            <div class="">
                <!-- Title -->
                <h1
                    class="text-3xl sm:text-3xl md:text-5xl lg:text-[100px] font-extrabold text-white leading-tight mb-6">
                    @yield('title-career')
                </h1>

                <!-- Centered Email Box -->
                @yield('gmail-career')
            </div>
        </div>
        {{-- Text Home, Export, About Us, Activity, and Contact Us --}}
        <div
            class="absolute inset-0 flex flex-col justify-center items-center text-center lg:top-[-200px] sm:top-[20px] top-[30px]">
            <div class="bg-white/3">
                <h4 class="text-3xl sm:text-4xl text-[#1E3E0F] font-semibold tracking-wide">
                    @yield('welcome')
                </h4>

                <!-- Centered White Line -->
                <div class="flex justify-center w-full">
                    @yield('white-line')
                </div>
                <h1
                    class="text-5xl sm:text-6xl md:text-7xl lg:text-[100px] font-extrabold text-[#1E3E0F] leading-tight">
                    @yield('sek-meas')
                </h1>
                <h1
                    class="text-5xl sm:text-6xl md:text-7xl lg:text-[100px] font-extrabold text-[#FFFFFF] leading-tight">
                    @yield('text-title')
                </h1>



                <p
                    class="text-lg sm:text-xl md:text-2xl lg:text-[20px] leading-relaxed text-[#F1C119] mt-4 font-bold tracking-wide">
                    @yield('rice-mall')
                </p>


                <!-- Centered White Line -->
                <div class="flex justify-center w-full">
                    @yield('white-line')
                </div>
            </div>
        </div>
        <!-- FULL-WIDTH RICE IMAGE AT BOTTOM -->
        <div class="relative w-full z-10 overflow-hidden top-[80px] sm:top-[100px] md:top-[120px]">
            <div class="relative w-full sm:top-[-30px]">
                <!-- Background image -->
                <img src="@yield('rice-background')" alt="" class="relative top-[-70px] md:top-[-90px] w-full h-auto object-cover block">

                <img src="@yield('picture-rice')" alt=""
                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[70%] md:w-[45%] lg:w-[35%] max-w-[700px] md:translate-y-4 sm:translate-y-6">
            </div>
            <!-- Background rice texture -->
            {{-- <img src="@yield('rice-background')" alt="" class="relative w-full h-auto object-cover block"> --}}
            <img src="@yield('img-background-contact')" alt="" class="w-full h-auto object-cover block">

            <!-- Center rice picture overlay -->
            {{-- <img src="@yield('picture-rice')" alt=""
                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[70%] md:w-[45%] lg:w-[35%] max-w-[700px]"> --}}
        </div>
    </section>
    <!-- PAGE CONTENT -->
    <section class="relative z-[999] w-full">
        @yield('section_content')
    </section>
    <section class="relative z-10 w-full">
        @yield('section_footer')
    </section>
</body>
<script src="{{ asset('frontend/js/theme.js') }}"></script>
<!-- Include Alpine.js once in your layout (if not already included) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
{{-- Drop down --}}
<script src="//unpkg.com/alpinejs" defer></script>
{{-- Alert for comment of customer --}}
{{--
<script src="{{ asset('js/alercomment.js') }}"></script> --}}
{{-- Sweet Alert 2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    fetch('/telegram-notify', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            message: '🛒 New order from VIN SOLANG!'
        })
    })
        .then(res => res.json())
        .then(data => console.log('Sent to Telegram:', data))
        .catch(err => console.error('Error:', err));

</script>
<!-- JS to toggle menu -->
{{--
<script>
    const menuButton = document.getElementById('menuButton');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        const isMenuHidden = mobileMenu.classList.contains('-translate-x-full');

        if (isMenuHidden) {
            // Show menu
            mobileMenu.classList.remove('-translate-x-full');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // disable scroll
        } else {
            // Hide menu
            mobileMenu.classList.add('-translate-x-full');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = ''; // enable scroll
        }
    });
</script> --}}
<script>
    const menuButton = document.getElementById('menuButton');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.contains('-translate-x-full');

        if (isHidden) {
            // Show menu
            mobileMenu.classList.remove('-translate-x-full');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden'; // also stop html scroll
        } else {
            // Hide menu
            mobileMenu.classList.add('-translate-x-full');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = '';
            document.documentElement.style.overflow = ''; // re-enable scroll
        }
    });
</script>


</html>