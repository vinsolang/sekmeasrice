@extends('frontend.header')
@section('title', 'News & Media')
@section('background-image', asset('frontend/assets/imges/news.png'))
@section('rice-background', asset('frontend/assets/imges/1.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', 'News & Media')

@section('section_content')
    <section class="grid grid-cols-1 gap-20">
        {{-- Section: Media --}}
        <section class="section-media relative h-auto bg-[#FFFFFF] py-16 mt-24">
            <div class="flex flex-col justify-center items-center text-center px-6 mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] tracking-wide">
                    Media
                </h2>
            </div>

            <div class="flex flex-col justify-center items-center px-4 sm:px-10 md:px-20">
                <div class="max-w-7xl w-full">
                    <div class="grid grid-cols-1 gap-x-20 gap-y-16">
                        @foreach($showMedia as $media)
                            <div class="flex flex-col md:flex-row items-center gap-10 justify-center
                                        {{ $loop->iteration % 2 == 0 ? 'md:flex-row-reverse' : '' }}">
                                <!-- Image -->
                                <div class="relative w-[90%] sm:w-[90%] md:w-[420px] lg:w-[450px] flex-shrink-0 mx-auto">
                                    <div
                                        class="absolute -top-4 {{ $loop->iteration % 2 == 0 ? '-right-4' : '-left-4' }} w-12 h-12 opacity-90">
                                        <img src="{{ asset('frontend/assets/imges/news-media/icon-star-1.png') }}" alt="">
                                    </div>

                                    <div class="w-full h-80 overflow-hidden transform transition duration-500 hover:scale-105">
                                        <img src="../../storage/local_product/{{ $media->image_media }}"
                                            class="w-full h-full object-cover {{ $loop->iteration % 2 == 0 ? 'rounded-tr-[80px] rounded-bl-[80px]' : 'rounded-tl-[80px] rounded-br-[80px]' }}"
                                            alt="{{ $media->title }}">
                                    </div>

                                    <div
                                        class="absolute -bottom-[30px] {{ $loop->iteration % 2 == 0 ? '-left-[50px]' : '-right-[50px]' }} w-[80px] h-[80px] opacity-90">
                                        <img src="{{ asset('frontend/assets/imges/news-media/icon-star-2.png') }}" alt="">
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="w-[90%] md:max-w-[550px] flex flex-col justify-center text-left md:text-left px-4">
                                    <h3 class="text-[#1E1E1E] font-normal text-3xl mb-3">{{ $media->title }}</h3>
                                    <p class="text-[#1E1E1E] text-lg mb-6">{{ $media->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Section: News --}}
        <section class="section-news relative bg-[#F4ECC8] py-16 pb-24">
            <div class="flex flex-col justify-center items-center text-center px-6 mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] tracking-wide">
                    News
                </h2>
            </div>

            <div class="flex justify-center items-center px-4 sm:px-10 md:px-20">
                <div class="max-w-7xl w-full">
                    <div class="grid grid-cols-1 gap-y-12 md:gap-y-16 gap-x-8 md:grid-cols-2">
                        @foreach ($showNews as $news)
                            <div class="block-news flex flex-col md:flex-row gap-6 md:gap-8 items-center md:items-start">
                                <!-- Image -->
                                <div class="image-news w-[90%] md:w-[420px] lg:w-[450px] mx-auto">
                                    <div
                                        class="w-full h-64 sm:h-72 lg:h-80 transform transition duration-500 hover:scale-105 overflow-hidden rounded-lg">
                                        <img src="../../storage/local_product/{{ $news->image_news }}" alt=""
                                            class="w-full h-[90%] object-cover">
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="content w-[90%] md:max-w-[550px] flex flex-col justify-center gap-4 text-left md:text-left px-4">
                                    <h3 class="text-[#1E1E1E] font-semibold text-2xl sm:text-3xl md:text-3xl mb-2">
                                        {{ $news->title }}
                                    </h3>
                                    <p class="text-[#1E1E1E] text-base sm:text-lg">
                                        {{ $news->description }}
                                    </p>
                                    <button
                                        class="relative top-[-5px] w-[125px] h-[35px] mt-4 text-white rounded-md transform transition duration-500 hover:scale-105 mx-auto md:mx-0">
                                        <img src="{{ asset('frontend/assets/imges/btn-read-more.png') }}" alt=""
                                            class="w-full h-full">
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </section>
@endsection

@section('section_footer')
    @include('frontend.footer')
@endsection
