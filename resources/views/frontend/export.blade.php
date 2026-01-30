@extends('frontend.header')
@section('title', 'Export')
@section('background-image', asset('frontend/assets/imges/eport.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', 'Export')

@section('section_content')

    {{-- Section prodcut for selling --}}
    <section class="section-product relative top-[50px]">
        <div class="inset-0 flex flex-col justify-center items-center text-center px-6">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] mb-6 tracking-wide drop-shadow-lg">
                For Export
            </h2>
        </div>

        <!-- make sure Alpine is loaded in your layout -->
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- ONE Alpine root wrapping grid + modal -->
        <div x-data="{ openOrderModal: false, selectedProduct: { name:'', type:'', capacity:'', price: 0 }, quantity: 1 }"
            x-cloak>

            <div class="relative top-[30px] flex justify-center">
                <div
                    class="grid grid-cols-1 gap-y-15 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center items-start ">
                    @foreach ($showExport as $items)
                        {{-- Product Card for Selling--}}
                        <div class="relative w-[250px] h-[500px] text-center group p-5">
                            <!-- Background -->
                            <img src="{{ asset('frontend/assets/imges/card-product.png') }}" alt="Product Background"
                                class="absolute inset-0 w-full h-full object-contain">

                            <!-- Overlay -->
                            <div class="absolute inset-0 z-10 flex flex-col justify-between top-[-20px]">
                                <!-- Top: Image -->
                                <div class="flex justify-center">
                                    <img src="{{ asset('storage/local_product/' . $items->image_export) }}" alt=""
                                        class="w-[240px] h-[240px] object-contain rounded-lg mb-3 transition-transform duration-300 group-hover:scale-105">
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

                                    {{-- <button class="btn-buy-now mt-3 hover:scale-110 transition-transform" id="btn-buy-now">
                                        <img src="{{ asset('frontend/assets/imges/quotation_request.png') }}"
                                            alt="Buy Now Button" class="w-[140px] h-auto">
                                    </button> --}}
                                    <button class="btn-buy-now mt-3 hover:scale-110 transition-transform"
                                        data-name="{{ $items->name }}" data-type="{{ $items->type }}"
                                        data-price="{{ $items->price }}" data-capacity="{{ $items->capacity }}">
                                        <img src="{{ asset('frontend/assets/imges/quotation_request.png') }}"
                                            alt="Quotation Request Button" class="w-[140px] h-auto">
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <div class="grid grid-cols-1 gap-y-15">
        {{-- Section: International Destination--}}
        <section class="relative w-full">
            <!-- Background Image -->
            <div class="relative w-full h-full">
                <img src="{{ asset('frontend/assets/imges/international.png') }}" alt="Background Image"
                    class="w-full h-full object-cover">

                <!-- Overlay Content -->
                {{-- <div
                    class="absolute inset-0 flex flex-col justify-center items-center text-white px-6 overflow-y-auto text-center">

                    <!-- Title -->
                    <div class="mb-6">
                        <p class="relative top-[-80px] text-[#D6B157] text-xl md:text-xl font-bold leading-tight">
                            International <br> Destination
                        </p>
                    </div>

                    <!-- Destination Details -->
                    <div
                        class="relative right-[450px] top-[200px] max-w-4xl space-y-2 mb-10 text-left justify-start items-start">
                        <p class="text-[#D6B157] text-[14px] font-semibold">International Destination</p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">Europe:</strong>
                            <span class="text-[#1E1E1E] text-[14px]"> Germany, Sweden, France, United Kingdom, Italy, <br>
                                Switzerland,
                                Hungary, Lithuania, The Netherlands, Poland, Norway, <br> Reunion Island, etc.</span>
                        </p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">Asian Market:</strong>
                            <span class="text-[#1E1E1E] text-[14px]">China, Hong Kong SAR, Singapore, Malaysia, Thailand,
                                <br> Vietnam,
                                etc.</span>
                        </p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">Oceanian Markets:</strong>
                            <span class="text-[#1E1E1E] text-[14px]">Australia, New Zealand, Republic of Maldives,
                                etc.</span><br>
                            <span class="text-[#1E1E1E] text-[14px]">Middle East: Israel, United Arab Emirates, etc.</span>
                        </p>

                        <p><strong class="text-[#D6B157] text-[14px] font-semibold">Other</strong></p>
                        <p class="text-[#1E1E1E] text-[14px]">Russian Federation</p>
                    </div>

                    <!-- Why Partner With Us -->
                    <div class="max-w-5xl w-full">
                        <h2 class="text-3xl font-bold mb-6 text-[#4DA358]">Why Partner With Us?</h2>

                        <!-- Icon Block 1 -->
                        <div class="flex flex-wrap justify-center items-start gap-10 mb-10">
                            <div class="w-60">
                                <img src="{{ asset('frontend/assets/icon/f.png') }}" class="mx-auto mb-3" alt="">
                                <h2 class="text-xl font-semibold text-[#324A0A]">Letter of Credit</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    We offer a full range of accounting, tax, and business advisory services.
                                </span>
                            </div>

                            <div class="w-60">
                                <img src="{{ asset('frontend/assets/icon/f.png') }}" class="mx-auto mb-3" alt="">
                                <h2 class="text-xl font-semibold text-[#324A0A]">Lower Tariff Export</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    Competitive export advantages with lower tariff fees.
                                </span>
                            </div>

                            <div class="w-60">
                                <img src="{{ asset('frontend/assets/icon/f.png') }}" class="mx-auto mb-3" alt="">
                                <h2 class="text-xl font-semibold text-[#324A0A]">Decades of Experience</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    Professional global operations with years of experience.
                                </span>
                            </div>
                        </div>

                        <!-- Icon Block 2 -->
                        <div class="flex flex-wrap justify-center items-start gap-10">
                            <div class="w-60">
                                <img src="{{ asset('frontend/assets/icon/f.png') }}" alt="">
                                <h2 class="text-xl font-semibold text-[#324A0A]">Capable Production Output</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    Strong production capacity for high-volume supply.
                                </span>
                            </div>

                            <div class="w-60">
                                <img src="{{ asset('frontend/assets/icon/f.png') }}" class="mx-auto mb-3" alt="">
                                <h2 class="text-xl font-semibold text-[#324A0A]">FDA Certified Quality</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    Consistent quality under FDA standards.
                                </span>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </section>

        {{-- Section: Input Information --}}
        <section class="flex justify-center bg-white py-[70px] px-4" id="section-products">
            <div class="flex flex-col lg:flex-row justify-between w-full max-w-[1200px] h-auto gap-8 lg:gap-4 pt-10 pb-10"
                style="padding-left: 70px; padding-right: 70px;">
                <div class="w-full lg:w-[25%] flex flex-col items-center p-4">
                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Enquiry Form</h2>
                    <form class="flex flex-col gap-4 items-center w-full">
                        <input type="text" placeholder="Name"
                            class="w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <input type="text" placeholder="Company Name "
                            class="w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <input type="text" placeholder="Email"
                            class="w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <input type="text" placeholder="Address"
                            class="w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <input type="text" placeholder="Contact Person"
                            class="w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                    </form>
                </div>

                <div class="w-full lg:w-[45%] flex flex-col items-center p-4">
                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Product Enquiry</h2>
                    <form class="flex flex-col gap-4 items-center w-full">
                        <input type="text" id="input-name" placeholder="Name Product"
                            class="form-input w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />
                        <!-- Product Multi Select -->
                        <div x-data="{ open:false, selected: [] }" class="relative w-[90%]">

                            <!-- Dropdown Button -->
                            <div @click="open = !open" class="bg-[#FFF9E6] px-3 py-2 h-auto min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                            flex flex-wrap items-center gap-2 justify-between">

                                <!-- Tags or Placeholder -->
                                <div class="flex flex-wrap items-center gap-1 flex-1">
                                    <template x-if="selected.length === 0">
                                        <span class="text-gray-500">More Product</span>
                                    </template>

                                    <template x-for="(item, index) in selected" :key="index">
                                        <div
                                            class="flex items-center bg-[#DDCC81] text-[#324A0A] px-2 py-1 rounded-full text-sm">
                                            <span x-text="item"></span>
                                            <button type="button" class="ml-1" @click.stop="selected.splice(index, 1)">
                                                <svg class="w-3 h-3 text-[#324A0A]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </template>
                                </div>

                                <!-- Dropdown Icon -->
                                <svg x-bind:class="open ? 'rotate-180' : ''"
                                    class="w-5 h-5 text-gray-600 transition-transform duration-300 ml-2" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>

                            <!-- Dropdown List -->
                            <div x-show="open" @click.outside="open=false"
                                class="absolute z-50 bg-white border rounded-md w-full mt-1 max-h-48 overflow-y-auto shadow">

                                @foreach($showExport as $item)
                                    <label class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100">
                                        <input type="checkbox" value="{{ $item->name }}-{{ $item->capacity }}" @change="
                                                           if ($event.target.checked) {
                                                               selected.push($event.target.value);
                                                           } else {
                                                               selected = selected.filter(v => v !== $event.target.value);
                                                           }
                                                       " :checked="selected.includes('{{ $item->name }}-{{ $item->capacity }}')">
                                        <span>{{ $item->name }}-{{ $item->capacity }}</span>
                                    </label>
                                @endforeach
                            </div>

                            <!-- Hidden input to submit -->
                            <input type="hidden" name="products" :value="selected.join(', ')">

                        </div>

                        <input type="text" id="input-capacity" placeholder="Packing Size"
                            class="form-input w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />

                        <input type="number" id="input-quantity" placeholder="Quantity(Package)"
                            class="form-input w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400" />

                        <input type="text" id="input-price" placeholder="Price"
                            class="form-input w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />

                        <input type="text" id="input-total" placeholder="Total"
                            class="form-input w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />
                    </form>
                </div>

                <div class="w-full lg:w-[35%] flex flex-col justify-between items-center p-4">

                   <div x-data="{
                        open: false,
                        items: ['Plastic Bag', 'Laminated PP', 'BOPP', 'Normal PP'],
                        selected: []
                    }" class="relative w-full">

                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Bag Type</h2>

                    <!-- Dropdown Button -->
                    <div @click="open = !open"
                        class="bg-[#FFF9E6] px-3 py-2 min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                            flex flex-wrap items-center gap-2 justify-between">

                        <!-- Tags or Placeholder -->
                        <div class="flex flex-wrap items-center gap-1 flex-1">

                            <!-- Placeholder -->
                            <template x-if="selected.length === 0">
                                <span class="text-gray-500">Select Bag Types</span>
                            </template>

                            <!-- Selected Tags -->
                            <template x-for="(item, index) in selected" :key="index">
                                <div class="flex items-center bg-[#DDCC81] text-[#324A0A] px-2 py-1 rounded-full text-sm">
                                    <span x-text="item"></span>

                                    <!-- X Button -->
                                    <button type="button" class="ml-1"
                                            @click.stop="selected.splice(index, 1)">
                                        <svg class="w-3 h-3 text-[#324A0A]" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>

                        <!-- Dropdown Icon -->
                        <svg x-bind:class="open ? 'rotate-180' : ''"
                            class="w-5 h-5 text-gray-600 transition-transform duration-300 ml-2"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>

                    <!-- Dropdown List -->
                    <div x-show="open" @click.outside="open = false"
                        class="absolute z-50 bg-white border rounded-md w-full mt-1 max-h-48 overflow-y-auto shadow">

                        <template x-for="(item, index) in items" :key="index">
                            <label class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100">

                                <!-- Checkbox -->
                                <input type="checkbox"
                                    :value="item"
                                    @change="
                                            if ($event.target.checked) {
                                                selected.push(item)
                                            } else {
                                                selected = selected.filter(v => v !== item)
                                            }
                                            open = false
                                    "
                                    :checked="selected.includes(item)">

                                <span x-text="item"></span>
                            </label>
                        </template>
                    </div>

                    <!-- Hidden input for form submit -->
                    <input type="hidden" name="bag_types" :value="selected.join(',')">
                </div>


                <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>



                    <div class="w-full flex justify-center mt-6">
                        <button id="btn-send-telegram" class="w-[90%] h-[55px] bg-gradient-to-r from-[#DDCC81] to-[#B8A34E] 
                                    text-[#324A0A] font-bold rounded-lg shadow-md 
                                    hover:shadow-lg hover:scale-105 transition-all duration-300">
                            Submit
                        </button>
                    </div>

                </div>

            </div>
        </section>
        @section('section_footer')
            {{-- Section: Footer --}}
            <section class="relative top-[20px]">
                @include('frontend.footer')
            </section>
        @endsection
    </div>
    <script>
document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll('.btn-buy-now').forEach(button => {
        button.addEventListener('click', function () {

            // Scroll to Enquiry Form
            document.getElementById('section-products')
                .scrollIntoView({ behavior: 'smooth' });

            // Extract product data
            const name = this.dataset.name;
            const price = parseFloat(this.dataset.price);
            const capacity = this.dataset.capacity;

            // SET MAIN PRODUCT VALUES
            document.getElementById('input-name').value = name;
            document.getElementById('input-capacity').value = capacity;
            document.getElementById('input-price').value = "$" + formatNumber(price);

            // Automatically add to multi-product dropdown list
            const multiSelect = document.querySelector("[x-data] input[type='hidden'][name='products']");
            addSelectedProduct(name, capacity, multiSelect);
        });
    });

});

// ADD product to Alpine multi-product dropdown
function addSelectedProduct(name, capacity, hiddenInput) {
    const value = `${name}-${capacity}`;
    let selected = hiddenInput.value ? hiddenInput.value.split(",") : [];

    if (!selected.includes(value)) {
        selected.push(value);
        hiddenInput.value = selected.join(",");
    }
}
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const qtyInput = document.getElementById("input-quantity");
    const priceInput = document.getElementById("input-price");
    const totalInput = document.getElementById("input-total");

    qtyInput.addEventListener("input", () => {
        const qty = parseFloat(qtyInput.value) || 0;
        const price = parseFloat(priceInput.value.replace("$", "")) || 0;

        totalInput.value = "$" + formatNumber(qty * price);
    });

});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    document.getElementById("btn-send-telegram").addEventListener("click", function () {

        // Customer Info
        const customerName = document.querySelector("input[placeholder='Name']").value.trim();
        const companyName = document.querySelector("input[placeholder='Company Name ']").value.trim();
        const email = document.querySelector("input[placeholder='Email']").value.trim();
        const address = document.querySelector("input[placeholder='Address']").value.trim();
        const contactPerson = document.querySelector("input[placeholder='Contact Person']").value.trim();

        // Main Product
        const name = document.getElementById("input-name").value.trim();
        const capacity = document.getElementById("input-capacity").value.trim();
        const qty = document.getElementById("input-quantity").value.trim();
        const price = document.getElementById("input-price").value.trim();
        const total = document.getElementById("input-total").value.trim();
        // Format values
        const formattedPrice = price; // already formatted earlier
        const numericTotal = parseFloat(total.replace("$", "").replace(/,/g, "")) || 0;
        const formattedTotal = "$" + formatNumber(numericTotal);

        // Multi products
        const multiProducts = document.querySelector("input[name='products']").value.trim();

        // Bag types
        const bagTypes = document.querySelector("input[name='bag_types']").value.trim();


        // ============================
        // VALIDATION
        // ============================

        if (!customerName || !email || !name || !qty || !price) {
            alert("❗ Please fill out all required fields.");
            return;
        }

        if (!bagTypes) {
            alert("❗ Please select at least one Bag Type.");
            return;
        }


        // ============================
        // Build Telegram Message
        // ============================

        let message = `📦 *New Export Enquiry*\n\n`;

        message += `👤 *Customer Information:*\n`;
        message += `• Name: ${customerName}\n`;
        message += `• Company: ${companyName}\n`;
        message += `• Email: ${email}\n`;
        message += `• Address: ${address}\n`;
        message += `• Contact: ${contactPerson}\n\n`;

        message += `🛒 *Main Product:*\n`;
        message += `• Product: ${name}\n`;
        message += `• Packaging Size: ${capacity} \n`;
        message += `• Quantity Needed: ${qty} KG\n`;
        message += `• Price per KG: ${formattedPrice}\n`;
        message += `• Total Price: ${formattedTotal}\n\n`;

        message += `📦 *More Products:*\n`;
        message += (multiProducts ? multiProducts : "None") + "\n\n";

        message += `🛍 *Bag Types:* ${bagTypes}\n`;


        // ============================
        // Telegram API Send
        // ============================
        fetch(`https://api.telegram.org/bot7587916418:AAEzLlsLWCnIYlo0TPEPm0TRIRpcaP0VEyg/sendMessage`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                chat_id: "-4819861863",
                text: message,
                parse_mode: "Markdown"
            })
        })
            .then(() => {
                alert("✔ Enquiry Sent Successfully!");

                // ============================
                // CLEAR FORM AFTER SEND
                // ============================
                document.querySelectorAll("input").forEach(input => input.value = "");
                
                // Reset Alpine.js dropdowns
                document.querySelectorAll("[x-data]").forEach(el => {
                    if (el.__x) {
                        if (el.__x.$data.selected) el.__x.$data.selected = [];
                        if (el.__x.$data.open) el.__x.$data.open = false;
                    }
                });

            })
            .catch(() => alert("❌ Failed to Send!"));
    });

});

function formatNumber(num) {
    return num.toLocaleString("en-US", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });
}
</script>

@endsection