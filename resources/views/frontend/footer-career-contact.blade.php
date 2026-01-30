<section class="contents relative w-full">

    <!-- Main Footer -->
    <footer
        class="relative sm:top-[150px] xl:top-[-5px] lg:top-[-5phpx] bg-white text-black w-full flex items-center justify-center py-16 px-6 md:px-10 lg:px-24">
        <div class="relative top-[10px] left-[10px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 w-full max-w-7xl">

            <!-- Column 1: About -->
            <div class="flex flex-col gap-3">
                <h4 class="font-bold text-sm text-[#499D56]">Lor Eak Heng Sek Meas Rice Co., Ltd</h4>
                <p class="text-sm leading-relaxed">
                    is one of the leading rice mill production factories and rice exporters in Cambodia. We have
                    operated this business since 1995, from a small rice mill with a traditional rice machine to a
                    state-of-the-art rice production system producing 20 tons per hour and exporting to 16 countries.
                </p>

                <h5 class="font-bold mt-5 text-sm">Follow Us</h5>
                <div class="flex items-center gap-4 mt-2">
                    <!-- Social Icons -->
                    <a href="#" class="hover:scale-110 transition-transform">
                        <img src="{{ asset('frontend/assets/icon/f.png') }}" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="#" class="hover:scale-110 transition-transform">
                        <img src="{{ asset('frontend/assets/icon/t.png') }}" alt="Twitter" class="w-6 h-6">
                    </a>
                    <a href="#" class="hover:scale-110 transition-transform">
                        <img src="{{ asset('frontend/assets/icon/ch.png') }}" alt="WhatsApp" class="w-6 h-6">
                    </a>
                    <a href="#" class="hover:scale-110 transition-transform">
                        <img src="{{ asset('frontend/assets/icon/ig.png') }}" alt="Instagram" class="w-6 h-6">
                    </a>
                </div>
            </div>

            <!-- Column 2: Information -->
            <div class="sm:pl-5">
                <h4 class="font-bold text-sm text-[#499D56] mb-2">Information</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('export') }}" class="hover:underline">Export</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
                    <li><a href="{{ route('news') }}" class="hover:underline">Activities</a></li>
                    <li><a href="{{ route('career') }}" class="hover:underline">Career</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact -->
            <div class="grid grid-cols-1 gap-2">
                <h4 class="font-bold text-sm mb-1 text-[#499D56]">Lor Eak Heng Sek Meas Company</h4>

                <!-- Factory Location -->
                <p class="text-sm leading-relaxed flex items-start gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mt-[2px] flex-shrink-0 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 2.25c4.556 0 8.25 3.694 8.25 8.25 0 3.713-2.528 7.56-7.456 11.366a.75.75 0 0 1-.838 0C6.278 18.06 3.75 14.213 3.75 10.5 3.75 5.944 7.444 2.25 12 2.25z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 12.75a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5z" />
                    </svg>
                    Our Factory is located in Kompong Cham Province
                </p>

                <!-- Office Address -->
                <p class="text-sm leading-relaxed flex items-start gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mt-[2px] flex-shrink-0 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.44 1.152-.44 1.592 0L21.75 12M4.5 9.75v9.75A1.5 1.5 0 0 0 6 21h12a1.5 1.5 0 0 0 1.5-1.5V9.75" />
                    </svg>
                    <span>
                        <strong>Office Address:</strong> #70, St.70,<br>
                        Sangkat Srah Chrok, Khan Daun Penh,<br>
                        Phnom Penh, Cambodia
                    </span>
                </p>

                <!-- Phone -->
                <p class="text-sm mt-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3.75l5.25 1.5L9 8.25l-3 3a15.75 15.75 0 0 0 6.75 6.75l3-3 3 1.5 1.5 5.25a.75.75 0 0 1-.75.75A18.75 18.75 0 0 1 2.25 4.5a.75.75 0 0 1 .75-.75z" />
                    </svg>
                    <strong>Tel:</strong> 855 (0) 87 68 67 68
                </p>

                <!-- Email -->
                <p class="text-sm flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5A2.25 2.25 0 0 1 2.25 17.25V6.75m19.5 0L12 12.75 2.25 6.75" />
                    </svg>
                    <a href="mailto:info@lehsekmeasrice.com" class="underline">info@lehsekmeasrice.com</a>
                </p>

                <!-- Website -->
                <p class="text-sm flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c4.97 0 9 4.03 9 9 0 1.74-.5 3.37-1.36 4.76L12 21l-7.64-4.24A8.97 8.97 0 0 1 3 12c0-4.97 4.03-9 9-9z" />
                    </svg>
                    <a href="http://www.lehsekmeasrice.com" class="hover:underline">www.lehsekmeasrice.com</a>
                </p>
            </div>

            <!-- Column 4: Working Time -->
            <div class="relative xl:top-0 top-[-30px]">
                <h4 class="font-bold text-sm text-[#499D56] mb-2">Working Time</h4>
                <p class="text-sm mb-1">Monday – Sunday</p>
                <p class="text-sm mb-4">8am – 5pm</p>

                <h4 class="font-bold text-sm text-[#499D56] mb-2">Map</h4>
                <div class="w-full h-64 bg-gray-300 rounded-md overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.089502260989!2d104.9132125!3d11.5854499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095160523ca91b%3A0xd9c51e2d57b148ad!2sLor%20Eak%20Heng%20Sek%20Meas%20Rice%20Co.%2CLtd!5e0!3m2!1sen!2skh!4v1698325030000!5m2!1sen!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-md">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bottom Green Bar + Banner Image -->
    <div class="relative w-full mt-10 sm:top-[200px] xl:top-[40px]">
        <!-- Green Background -->
        <div class="absolute inset-0 h-[80px] bg-[#4DA358]"></div>

        <!-- Image + Text -->
        <div class="relative w-full flex justify-center items-center h-[80px] px-4">
            <div class="relative w-[95%] sm:w-[90%] md:w-[85%] h-[50px] flex items-center justify-center">
                <!-- Banner Image -->
                <img src="{{ asset('frontend/assets/imges/header-image.png') }}" alt="Header Image"
                    class="absolute inset-0 top-[-40px] xl:top-[-40px] sm:top-[-40px] w-full h-full">

                <!-- Overlay Text -->
                <div
                    class="relative z-10 top-[-40px] xl:top-[-40px] sm:top-[-40px] text-center text-[#1E3E0F] text-xs sm:text-sm md:text-base font-bold">
                    All rights reserved 2025
                </div>
            </div>
        </div>
    </div>

</section>