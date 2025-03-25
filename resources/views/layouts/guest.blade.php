<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="flex flex-col min-h-screen bg-white">
        <!-- Logo -->
        <div class="py-8 text-center">
            <img src="{{ asset('assets/logowithtext.png') }}" alt="BMP Logo" class="mx-auto h-24">
        </div>
        <div class="flex-grow flex items-center justify-center bg-[#0f294c]">
            <div class="w-[50%] bg-[#0f294c] py-10 rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <!-- Footer Section -->
        <footer class="bg-white py-10 text-[#0f294c] text-sm text-center">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-base">QUICK LINKS</h3>
                    <ul class="space-y-2 mt-2">
                        <li><a href="#" class="hover:underline text-sm">Home</a></li>
                        <li><a href="#" class="hover:underline text-sm">Cars</a></li>
                        <li><a href="#" class="hover:underline text-sm">Bookings</a></li>
                        <li><a href="#" class="hover:underline text-sm">Contacts</a></li>
                    </ul>
                </div>

                <!-- About Us -->
                <div>
                    <h3 class="font-bold text-base">ABOUT US</h3>
                    <ul class="space-y-2 mt-2">
                        <li><a href="#" class="hover:underline text-sm">Services</a></li>
                        <li><a href="#" class="hover:underline text-sm">Rental Deals</a></li>
                        <li><a href="#" class="hover:underline text-sm">Car Brands</a></li>
                        <li><a href="#" class="hover:underline text-sm">Branches</a></li>
                    </ul>
                </div>

                <!-- Customer Support -->
                <div>
                    <h3 class="font-bold text-base">CUSTOMER SUPPORT</h3>
                    <ul class="space-y-2 mt-2">
                        <li><a href="#" class="hover:underline text-sm">Help Center</a></li>
                        <li><a href="#" class="hover:underline text-sm">Terms and Conditions</a></li>
                        <li><a href="#" class="hover:underline text-sm">Privacy Policy</a></li>
                        <li><a href="#" class="hover:underline text-sm">Damage & Return Policy</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Media and Copyright -->
            <div class="mt-10">
                <img src="{{ asset('assets/bmp_logo.png') }}" alt="BMP Footer Logo" class="mx-auto h-14">
                <div class="flex justify-center space-x-6 mt-4">
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-x-twitter text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-facebook text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-tiktok text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-github text-2xl"></i></a>
                </div>
                <p class="mt-5 text-sm">© 2025, BMP Car Rental. All Rights Reserved</p>
            </div>
        </footer>

    </div>

</body>

</html>