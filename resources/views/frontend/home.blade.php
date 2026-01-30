@extends('frontend.header')
@section('title', 'Home')
@section('background-image', asset('frontend/assets/imges/back-img-home.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('picture-rice', asset('frontend/assets/imges/rice.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('welcome', 'WELCOME TO')
@section('sek-meas', 'SEK MEAS RICE')
@section('rice-mall', 'RICE MILL PRODUCTION FACTORY')

@section('section_content')

    <section class="about-use relative top-[40px] md:top-[60px]">
        {{-- <img src="{{ asset('frontend/assets/imges/about-text.png') }}" alt="About Us Background"
            class="w-full object-cover"> --}}
        <img src="{{ asset('frontend/assets/imges/about__us.png') }}" alt="About Us Background" class="w-full object-cover">
        {{-- <div class="relative w-full mt-[50px]"> --}}
            <!-- Background image -->


            <!-- Overlay text -->
            <div
                class="absolute xl:top-[-50px] sm:top-[90px] inset-0 flex flex-col justify-center items-center text-center px-6">
                {{-- <div class="p-8 md:p-10 max-w-3xl">
                    <h2
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-[#4DA358] mb-4 sm:mb-6 tracking-wide drop-shadow-lg">
                        About Us
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed text-[#000000] text-left">
                        Lor Eak Heng Sek Meas Rice Co., Ltd is one of the leading rice mill production factories and rice
                        exporters
                        in Cambodia. We have operated this business since 1995, from a small rice mill with a traditional
                        rice
                        machine to a state-of-the-art rice production with a 2-processing-line system that produces 20 tons
                        per
                        hour.
                        This superb technology led to an increase in quantity and the ability to export to 16 countries,
                        ranging
                        from the European Union, the African continent, to the ASEAN Region.
                    </p>
                </div> --}}
                <div class="relative top-[-20px] md:top-[-90px] lg:top-[-100px] px-4 sm:px-6 md:px-10 py-8 sm:py-10 max-w-7xl">
                    <h2
                        class="text-[10px] sm:text-xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-[#4DA358] mb-4 sm:mb-6 tracking-wide drop-shadow-lg">
                        About Us
                    </h2>

                    <p
                        class="text-[8px] md:text-[15px] lg:text-xl xl:text-[22px] leading-relaxed text-[#000000] text-left">
                        Lor Eak Heng Sek Meas Rice Co., Ltd is one of the leading rice mill production factories and rice
                        exporters
                        in Cambodia. We have operated this business since 1995, starting from a small rice mill using
                        traditional
                        rice machines to a state-of-the-art production line with a two-processing-line system capable of
                        producing
                        20 tons per hour.
                    </p>

                    <p
                        class="mt-4 text-[8px] md:text-[15px] lg:text-xl xl:text-[22px] leading-relaxed text-[#000000] text-left">
                        With this advanced technology, our production capacity has significantly increased, allowing us to
                        export
                        high-quality rice to more than 16 countries across the European Union, Africa, and the ASEAN region.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <div class="flex flex-col gap-y-[50px]">
        {{-- Section prodcut for selling --}}
        <section class="section-products relative top-[20px] grid grid-cols-1 gap-10" id="section-products">
            <div class="relative inset-0 flex flex-col justify-center items-center text-center px-6">
                <h2
                    class="text-[10px] sm:text-xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-[#4DA358] mb-4 sm:mb-6 tracking-wide drop-shadow-lg">
                    For Local Sale
                </h2>
            </div>
            <!-- make sure Alpine is loaded in your layout -->
            <script src="//unpkg.com/alpinejs" defer></script>

            <!-- ONE Alpine root wrapping grid + modal -->
            <div x-data="{ openOrderModal: false, selectedProduct: { name:'', type:'', capacity:'', price: 0 }, quantity: 1 }"
                x-cloak>

                <div class="flex justify-center">
                    <div
                        class="grid grid-cols-1 gap-y-15 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center items-start ">
                        @foreach ($showProducrLocal as $items)
                            {{-- Product Card for Selling--}}
                            <div class="relative w-[250px] h-[500px] text-center group p-5">
                                <!-- Background -->
                                <img src="{{ asset('frontend/assets/imges/card-product.png') }}" alt="Product Background"
                                    class="absolute inset-0 w-full h-full object-contain">

                                <!-- Overlay -->
                                <div class="absolute inset-0 z-10 flex flex-col justify-between top-[-55px]">
                                    <!-- Top: Image -->
                                    <div class="flex justify-center">
                                        <img src="{{ asset('storage/local_product/' . $items->image_local) }}" alt=""
                                            class="w-[280px] h-[260px] object-contain rounded-lg mb-3 transition-transform duration-300 group-hover:scale-105">
                                    </div>

                                    <!-- Middle: Brand + Name + Type -->
                                    <div class="relative top-[-50px] flex flex-col items-center text-center">
                                        <h2 class="text-[#324A0A] font-bold text-lg md:text-xl leading-snug">
                                            {{ $items->brand }}
                                        </h2>

                                        <h2
                                            class="text-[#324A0A] font-semibold text-lg md:text-xl leading-snug max-w-[230px] break-words">
                                            {{ $items->name }}
                                            <br>
                                        </h2>
                                    </div>

                                    <!-- Bottom: Price, Capacity, Button -->
                                    <div class="relative top-[-90px] flex flex-col items-center">
                                        <span class="text-[#324A0A] font-medium text-base">{{ $items->type }}</span>
                                        <div class="w-full flex justify-center my-2">
                                            <div class="w-[100px] h-[2px] bg-[#DDCC81]"></div>
                                        </div>

                                        <p class="text-[#EF0104] text-xl font-bold">
                                            ${{ number_format($items->price, 2) }}
                                        </p>
                                        <p class="text-[#324A0A] text-sm font-medium">{{ $items->capacity }}</p>

                                        {{-- @auth('customer') --}}
                                        <button
                                            @click="openOrderModal = true; selectedProduct = {
                                                                                                                                                                                                                                                                            name: '{{ addslashes($items->name) }}',
                                                                                                                                                                                                                                                                            type: '{{ addslashes($items->type) }}',
                                                                                                                                                                                                                                                                            capacity: '{{ addslashes($items->capacity) }}',
                                                                                                                                                                                                                                                                            price: Number('{{ $items->price }}'),
                                                                                                                                                                                                                                                                            image: '../../storage/local_product/{{  $items->image_local }}'
                                                                                                                                                                                                                                                                        }; quantity = 1"
                                            class="mt-3 hover:scale-110 transition-transform">
                                            <img src="{{ asset('frontend/assets/imges/btn-buy.png') }}" alt="Buy Now Button"
                                                class="w-[140px] h-auto">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Modal -->
                <div x-show="openOrderModal" x-cloak x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm">
                    <div
                        class="relative bg-white rounded-2xl shadow-2xl w-full sm:w-[600px] max-h-[90vh] h-[600px] overflow-y-auto overflow-x-hidden p-5 sm:p-8">
                        <!-- Header -->
                        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
                            <h2 class="text-2xl font-bold text-[#324A0A]">🛒 Checkout</h2>
                            <button @click="openOrderModal = false"
                                class="relative right-[10px] text-gray-500 hover:text-red-500 transition text-2xl font-bold">
                                &times;
                            </button>
                        </div>

                        <!-- Body -->
                        <div class="p-10 space-y-10">
                            <form id="checkoutForm" class="space-y-10 space-x-10" @submit.prevent>
                                <div class="relative left-5 bg-white rounded-2xl flex flex-col md:flex-row gap-8">
                                    <!-- Left: Customer Info -->
                                    <div class="flex-1 space-y-4 m-8">
                                        <h3 class="text-xl font-semibold text-[#4DA358] mb-2">Customer Information</h3>

                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Your Name</label>
                                            <input type="text" name="customer_name" required
                                                class="w-full border border-gray-300 rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-[#4DA358] transition">
                                        </div>

                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Phone
                                                Number</label>
                                            <input type="text" name="customer_phone" required
                                                class="w-full border border-gray-300 rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-[#4DA358] transition">
                                        </div>

                                        <div>
                                            <label class="block text-sm font-semibold text-gray-700 mb-1">Address</label>
                                            <textarea name="customer_address" required rows="3"
                                                class="w-full border border-gray-300 rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-[#4DA358] transition"></textarea>
                                        </div>
                                    </div>

                                    <!-- Right: Product Image -->
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="rounded-xl overflow-hidden p-4 transition">
                                            <img :src="selectedProduct.image" alt="Product Image"
                                                class="w-60 h-60 object-contain rounded-lg transition-transform duration-300 group-hover:scale-105">
                                        </div>
                                        <p class="mt-3 text-gray-800 font-semibold text-center text-lg"
                                            x-text="selectedProduct.name"></p>
                                    </div>
                                </div>

                                <!-- Product Details -->
                                <div class="relative left-5 border-t border-gray-200 mt-6 pt-4">
                                    <h3 class="font-semibold text-xl text-[#4DA358] mb-3">Product Details</h3>

                                    <div class="space-y-1 text-gray-700 text-sm md:text-base">
                                        <p><strong class="text-[#324A0A]">Name:</strong> <span
                                                x-text="selectedProduct.name"></span></p>
                                        <p><strong class="text-[#324A0A]">Type:</strong> <span
                                                x-text="selectedProduct.type"></span></p>
                                        <p><strong class="text-[#324A0A]">Capacity:</strong> <span
                                                x-text="selectedProduct.capacity"></span></p>
                                        <p><strong class="text-[#324A0A]">Price:</strong> $<span
                                                x-text="(Number(selectedProduct.price) || 0).toFixed(2)"></span></p>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3">
                                        <label class="font-semibold text-[#324A0A]">Quantity:</label>
                                        <input type="number" x-model.number="quantity" min="1"
                                            class="w-24 border border-gray-300 rounded-lg px-2 py-1 text-center focus:ring-2 focus:ring-[#DDCC81] shadow-sm transition">
                                    </div>

                                    <p class="mt-3 font-bold text-[#B91C1C] text-lg">
                                        Total: $
                                        <span
                                            x-text="((Number(selectedProduct.price)||0) * (quantity||1))
                                                                                                                    .toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })">
                                        </span>
                                    </p>
                                </div>


                                <!-- Checkout Button -->
                                <button type="button" @click="
                                                                                                                        const form = document.getElementById('checkoutForm');
                                                                                                                        const data = new FormData(form);
                                                                                                                        if (!data.get('customer_name') || !data.get('customer_phone') || !data.get('customer_address')) {
                                                                                                                            Swal.fire({
                                                                                                                                icon: 'warning',
                                                                                                                                title: 'Missing Info',
                                                                                                                                text: 'Please fill in all customer information.',
                                                                                                                                confirmButtonColor: '#B8A34E'
                                                                                                                            });
                                                                                                                            return;
                                                                                                                        }

                                                                                                                        const message = 
                                                                                                                            '🛍 *New Order Received!*%0A%0A' +
                                                                                                                            '*Customer Name:* ' + data.get('customer_name') + '%0A' +
                                                                                                                            '*Phone:* ' + data.get('customer_phone') + '%0A' +
                                                                                                                            '*Address:* ' + data.get('customer_address') + '%0A%0A' +
                                                                                                                            '*Product:* ' + selectedProduct.name + '%0A' +
                                                                                                                            '*Type:* ' + selectedProduct.type + '%0A' +
                                                                                                                            '*Packing-Size:* ' + selectedProduct.capacity + '%0A' +
                                                                                                                            '*Price:* $' + (Number(selectedProduct.price) || 0).toFixed(2) + '%0A' +
                                                                                                                            '*Quantity:* ' + (quantity || 1) + '%0A' +
                                                                                                                            '*Total:* $' + (((Number(selectedProduct.price)||0) * (quantity||1)).toFixed(2));

                                                                                                                        fetch('{{ route('telegram.notify') }}', {
                                                                                                                            method: 'POST',
                                                                                                                            headers: {
                                                                                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                                                                                'Content-Type': 'application/x-www-form-urlencoded',
                                                                                                                                'Accept': 'application/json'
                                                                                                                            },
                                                                                                                            body: new URLSearchParams({ message: decodeURIComponent(message.replace(/%0A/g, '\n')) })
                                                                                                                        })
                                                                                                                        .then(res => res.json())
                                                                                                                        .then(() => {
                                                                                                                            Swal.fire({
                                                                                                                                title: 'Thank You!',
                                                                                                                                html: '<p>Your order has been sent successfully.<br>We’ll contact you soon!</p>',
                                                                                                                                imageUrl: 'frontend/assets/icon/1.png',
                                                                                                                                imageWidth: 120,
                                                                                                                                imageHeight: 120,
                                                                                                                                confirmButtonText: 'Close',
                                                                                                                                confirmButtonColor: '#B8A34E'
                                                                                                                            }).then(() => {
                                                                                                                                openOrderModal = false;
                                                                                                                            });
                                                                                                                        })
                                                                                                                        .catch((err) => {
                                                                                                                            console.error(err);
                                                                                                                            Swal.fire({
                                                                                                                                icon: 'error',
                                                                                                                                title: 'Oops...',
                                                                                                                                text: 'Something went wrong. Please try again.',
                                                                                                                                confirmButtonColor: '#B8A34E'
                                                                                                                            });
                                                                                                                        });
                                                                                                                    "
                                    class="flex justify-center relative left-[60px] top-[25px] mx-auto items-center w-[80%] h-[45px] bg-gradient-to-r from-[#DDCC81] to-[#B8A34E] text-[#324A0A] font-bold py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.02] transition-transform duration-200">
                                    Confirm Checkout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        {{-- Section: Awards Credibility Certificates--}}
        <section class="relative w-full mb-[40px]">
            <div class="grid grid-cols-1 gap-10 bg-[#F4ECC8] w-full h-auto">
                <!-- Background Image -->
                <div class="back-image">
                    <img src="{{ asset('frontend/assets/imges/21.png') }}" alt="Background Image"
                        class="w-full h-full object-cover">
                </div>

                <div class="relative w-full min-h-[600px] sm:min-h-[700px] md:min-h-[800px] lg:min-h-[900px]">
                    <!-- Overlay: Awards + Certificates -->
                    <div
                        class="flex flex-col items-center justify-end text-center pb-10 sm:pb-16 md:pb-20 px-4 sm:px-8 md:px-12 lg:px-20 gap-y-35">

                        <!-- Awards Section -->
                        <div
                            class="mb-10 sm:mb-14 md:mb-16 relative top-[-20px] sm:top-[-30px] flex flex-col items-center gap-y-10">
                            <h1 class="text-[#D6B157] font-bold text-2xl sm:text-3xl md:text-4xl drop-shadow-lg">
                                Awards Winning
                            </h1>

                            <!-- Responsive grid layout -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 
                                                                gap-4 sm:gap-6 md:gap-8 justify-items-center items-end">
                                @foreach ($showWining as $items)
                                    <img src="../../storage/local_product/{{ $items->thumbnail }}"
                                        class="w-[100px] sm:w-[120px] md:w-[140px] lg:w-[160px] xl:w-[180px]
                                                                                            h-auto object-contain transition-transform duration-300 hover:scale-105">
                                @endforeach
                            </div>
                        </div>


                        <!-- Certificates Section -->
                        <div class="relative flex flex-col items-center text-center gap-y-10 mb-10 sm:mb-14 md:mb-16">
                            <!-- Title -->
                            <h1 class="text-[#D6B157] font-bold text-2xl sm:text-3xl md:text-4xl drop-shadow-lg">
                                Credibility Certificates
                            </h1>

                            <!-- Responsive Images Grid -->
                            <div
                                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8 justify-items-center items-start">
                                @foreach ($showCredibility as $items)
                                    <img src="../../storage/local_product/{{ $items->thumbnail }}"
                                        class="w-[140px] sm:w-[180px] md:w-[200px] lg:w-[220px] h-[200px] sm:h-[240px] md:h-[260px] lg:h-[300px] 
                                                                                            object-contain transition-transform duration-300 hover:scale-105">
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
    {{-- Section: Why Us --}}
    <section
        class="relative bg-[#4DA358] w-full h-[500px] flex flex-col items-center justify-between py-10 sm:py-14 md:py-16 lg:py-20 mt-5 md:mt-10">
        <!-- Title -->
        <div class="flex justify-center mb-8 sm:mb-10">
            <h1 class="relative top-[30px] text-white text-center text-2xl sm:text-3xl md:text-4xl font-bold">Why Us</h1>
        </div>

        <!-- Certificate Icons -->
        <div class="w-full flex justify-center">
            <div
                class="grid grid-cols-2 sm:grid-cols-4 gap-10 sm:gap-8 px-6 sm:px-10 lg:px-20 w-full max-w-6xl relative top-[40px]">
                <!-- Item 1 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('frontend/assets/certificate/6.png') }}" alt="20 Years on the Market"
                        class="w-[120px] sm:w-[80px] md:w-[130px] lg:w-[220px] h-auto object-contain transition-transform duration-300 hover:scale-105">
                    {{-- <p class="text-white text-sm mt-3 sm:text-base font-medium">20 Years Experience</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('frontend/assets/certificate/7.png') }}" alt="Affordable Price"
                        class="w-[120px] sm:w-120] md:w-[130px] lg:w-[220px] object-contain transition-transform duration-300 hover:scale-105">
                    {{-- <p class="text-white text-sm mt-3 sm:text-base font-medium">Affordable Price</p> --}}
                </div>
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('frontend/assets/certificate/4.png') }}" alt="Free Delivery"
                        class="w-[120px] sm:w-[80px] md:w-[130px] lg:w-[220px] object-contain transition-transform duration-300 hover:scale-105">
                    {{-- <p class="text-white text-sm mt-3 sm:text-base font-medium">Free Delivery</p> --}}
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('frontend/assets/certificate/5.png') }}" alt="Home Grown Rice"
                        class="w-[120px] sm:w-[80px] md:w-[130px] lg:w-[220px] object-contain transition-transform duration-300 hover:scale-105">
                    {{-- <p class="text-white text-sm mt-3 sm:text-base font-medium">Home Grown Rice</p> --}}
                </div>
            </div>
        </div>

        <!-- Buy Now Button -->
        <div
            class="btn-buy-now relative top-[30px] md:top-[45px] sm:top-[40px] xl:top-[50px] lg:to-[50px] mt-10 sm:mt-12 md:mt-14">
            <button class="focus:outline-none hover:scale-105 transition-transform" id="btn-buy-now">
                <img src="{{ asset('frontend/assets/certificate/8.png') }}" alt="Buy Now Button"
                    class="w-[220px] sm:w-[280px] md:w-[340px] lg:w-[380px] h-auto object-contain">
            </button>
        </div>
    </section>


    {{-- Section: Customer Testimonials --}}
    <section class="customer relative w-full h-[600px] flex flex-col items-center justify-center">
        <!-- Title -->
        <div class="text-center mb-10 relative top-[-30px]">
            <h1 class="text-3xl font-semibold text-green-600">Comments</h1>
        </div>

        <!-- Comments -->
        <div x-data="commentApp()" class="w-full flex flex-col items-center justify-center">
            <div class="w-[90%] md:w-[60%] grid grid-cols-1 gap-8 text-center">

                <!-- Comment Form -->
                {{-- @auth('customer')
                <!-- Show form when user is logged in -->
                <div class="relative w-full">
                    <input type="text" placeholder="💬 Add your comment..." x-model="text"
                        class="w-full h-[60px] bg-[#f8f1d0] px-6 pr-[60px] rounded-full shadow-sm text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />

                    <button @click.prevent="submitComment()"
                        class="absolute right-3 top-1/2 -translate-y-1/2 bg-[#F1C119] p-3 rounded-full hover:bg-[#e0b617] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4l16 8-16 8V4z" />
                        </svg>
                    </button>
                </div>
                @else
                <!-- Show disabled input for guests -->
                <div class="relative w-full">
                    <input type="text" placeholder="💬 Add Your Comments"
                        class="w-full h-[60px] bg-gray-200 px-6 rounded-full shadow-sm text-gray-500 cursor-pointer focus:outline-none" />
                </div>
                @endauth --}}

                <!-- Comments Container -->
                <div id="commentsContainer" class="grid grid-cols-1 gap-y-5 max-h-[250px] overflow-y-auto px-2 mt-4">
                    @foreach ($showComment as $comment)
                        <div class="mx-auto w-full max-w-[700px]">
                            <div class="flex items-start gap-4 p-4 rounded-lg comment-item transition">
                                <div class="flex-shrink-0">
                                    <img src="../../assets/comments/profile/{{ $comment->profile }}" alt="Profile"
                                        class="w-[55px] h-[55px] rounded-full object-cover">
                                </div>
                                <div class="flex-1 text-left">
                                    <span class="font-semibold text-gray-800 block">{{ $comment->name }}</span>
                                    <p class="text-gray-600 text-sm mt-1">{{ $comment->comment }}</p>
                                    {{-- <span class="text-[#324A0A] text-xs mt-1 block">{{
                                        $comment->created_at->diffForHumans() }}</span> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>
    <script>
        document.querySelectorAll('.btn-buy-now').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('section-products').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    {{--
    <script>
        function commentApp() {
            return {
                text: '',

                submitComment() {
                    if (!this.text.trim()) {
                        alert('Please write something before submitting.');
                        return;
                    }

                    fetch("{{ route('comments.submit') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Accept": "application/json"
                        },
                        body: JSON.stringify({ comment: this.text })
                    })
                        .then(res => {
                            if (!res.ok) throw new Error("Network response was not ok");
                            return res.json();
                        })
                        .then(data => {
                            const comment = data.comment;
                            const user = comment.user;

                            // Determine image path
                            const imageUrl = user?.avatar
                                ? (user.avatar.startsWith('http') ? user.avatar : `/${user.avatar}`)
                                : (user?.profile
                                    ? `/storage/profiles/${user.profile}`
                                    : `/frontend/assets/imges/profile.png`
                                );
                            const container = document.getElementById('commentsContainer');

                            // New comment HTML
                            const newComment = `
                                                <div class="mx-auto w-full max-w-[600px]">
                                                    <div class="flex items-start gap-4 p-4 rounded-lg comment-item transition">
                                                        <div class="flex-shrink-0">
                                                            <img src="${imageUrl}" alt="Profile" class="w-[55px] h-[55px] rounded-full object-cover">
                                                        </div>
                                                        <div class="flex-1 text-left">
                                                            <span class="font-semibold text-gray-800 block">
                                                                ${user?.username ?? 'Deleted User'}
                                                            </span>
                                                            <p class="text-gray-600 text-sm mt-1">${comment.comment}</p>
                                                            <span class="text-[#324A0A] text-xs mt-1 block">Just now</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;

                            // Insert at top
                            container.insertAdjacentHTML('afterbegin', newComment);

                            this.text = ''; // clear input
                        })
                        .catch(err => {
                            console.error(err);
                            alert('Something went wrong while submitting your comment.');
                        });
                },

                alertLogin() {
                    Swal.fire({
                        title: 'Login Required',
                        text: 'You must log in to comment on this post.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#2563EB',
                        cancelButtonColor: '#6B7280',
                        confirmButtonText: 'Go to Login',
                        cancelButtonText: 'Cancel',
                        background: '#fff',
                        color: '#1F2937',
                        backdrop: `rgba(0,0,0,0.4)`,
                        customClass: {
                            popup: 'rounded-2xl shadow-lg',
                            title: 'text-xl font-semibold',
                            confirmButton: 'px-4 py-2 rounded-lg text-white font-medium',
                            cancelButton: 'px-4 py-2 rounded-lg font-medium',
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('client.login') }}";
                        }
                    });
                }
            }
        }
        container.scrollTop = container.scrollHeight;
    </script> --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
@section('section_footer')
    {{-- Section: Footer --}}
    <section class="relative">
        @include('frontend.footer')
    </section>
@endsection