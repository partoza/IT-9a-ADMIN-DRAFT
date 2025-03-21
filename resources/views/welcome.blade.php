<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="font-sans h-screen w-full">
    <div class="bg-white-100 text-black/100 h-screen w-full flex flex-col">
        <!-- Header -->
        <header class="fixed top-0 w-full bg-white text-black py-2 mt-2">
            <div class="container mx-auto flex justify-between items-center px-6">
                <!-- Logo -->
                <a href="#" class="flex items-center">
                    <img src="path/to/logo.png" alt="BMP Logo" class="h-8"> <!-- Update with actual logo path -->
                </a>

                <!-- Navigation Menu -->
                @if (Route::has('login'))
                <nav class="flex space-x-8 uppercase font-semibold tracking-wide">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Dashboard</a>
                    @else
                    <a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Home</a>
                    <a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Cars</a>
                    <a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Booking</a>
                    <a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Contacts</a>
                    <a href="{{ route('login') }}" class="hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fa-solid fa-user text-lg"></i>
                    </a>
                    @endif
                </nav>
                @endif
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 mt-16">
            <!-- Hero Section -->
            <!-- Hero Section -->
            <section class="relative bg-[#0f1021] text-white py-50 text-center flex flex-col justify-center">
                <div class="absolute inset-0 flex justify-between">
                    <img src="path/to/car-left.png" class="w-[28%] max-w-md" alt="Car Left">
                    <img src="path/to/car-right.png" class="w-[28%] max-w-md" alt="Car Right">
                </div>
                <div class="relative z-10 container mx-auto px-6">
                    <h1 class="text-5xl font-bold uppercase">RENT A CAR <span class="text-[#ff335f] italic">TODAY</span>
                    </h1>
                    <p class="mt-2 text-lg uppercase font-semibold tracking-wide">EXCLUSIVE & LOW COST CAR RENTAL</p>
                    <p class="mt-2 text-sm max-w-2xl mx-auto">
                        Find the perfect rental car for your family and enjoy a smooth, stress-free journey wherever you
                        go.
                        With a wide range of comfortable and reliable vehicles, you get the freedom to travel on your
                        terms!
                    </p>
                    <a href="#"
                        class="mt-6 inline-block bg-white text-black px-6 py-3 rounded-md text-lg font-semibold hover:bg-gray-200 transition">
                        BOOK NOW
                    </a>
                </div>
            </section>
            <!-- Main Section -->
            <section class="py-12 bg-white text-black text-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 items-start max-w-6xl mx-auto">

                    <!-- Locations Section -->
                    <div class="pb-8 md:pb-0">
                        <h2 class="text-2xl font-bold mb-6">VISIT ANY OF OUR LOCATIONS</h2>
                        <div class="grid grid-cols-2 gap-6 text-lg font-medium text-[#0f294c]">
                            <span class="flex items-center gap-2 justify-center">
                                <i class="fa-solid fa-map-marker-alt text-[#0f294c] text-2xl"></i> Davao, Mintal
                            </span>
                            <span class="flex items-center gap-2 justify-center">
                                <i class="fa-solid fa-map-marker-alt text-[#0f294c] text-2xl"></i> Davao, Mudiang
                            </span>
                            <span class="flex items-center gap-2 justify-center">
                                <i class="fa-solid fa-map-marker-alt text-[#0f294c] text-2xl"></i> Samal, Babak
                            </span>
                            <span class="flex items-center gap-2 justify-center">
                                <i class="fa-solid fa-map-marker-alt text-[#0f294c] text-2xl"></i> Davao, Ula
                            </span>
                        </div>
                    </div>

                    <!-- Services Section -->
                    <div class="pb-8 md:pb-0">
                        <h2 class="text-2xl font-bold mb-6">OUR SERVICES</h2>
                        <ul class="text-left text-[#0f294c] text-lg font-medium space-y-6">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check-circle text-[#0f294c] text-xl"></i>
                                <div>
                                    <span class="font-bold">Daily and Long-Term Rentals</span><br>
                                    <span class="text-gray-600 text-sm">
                                        Flexible rental options, whether you need a car for a day, a week, or longer.
                                    </span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check-circle text-[#0f294c] text-xl"></i>
                                <div>
                                    <span class="font-bold">Wide Vehicle Selection</span><br>
                                    <span class="text-gray-600 text-sm">
                                        Choose from economy cars, SUVs, luxury vehicles, and more to match your needs.
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Car Brands Section -->
                    <div>
                        <h2 class="text-2xl font-bold mb-6">OUR CAR BRANDS</h2>
                        <div class="grid grid-cols-3 gap-8 justify-center items-center">
                            <img src="path/to/toyota-logo.png" alt="Toyota" class="h-12 mx-auto">
                            <img src="path/to/honda-logo.png" alt="Honda" class="h-12 mx-auto">
                            <img src="path/to/ford-logo.png" alt="Ford" class="h-12 mx-auto">
                            <img src="path/to/mitsubishi-logo.png" alt="Mitsubishi" class="h-12 mx-auto">
                            <img src="path/to/suzuki-logo.png" alt="Suzuki" class="h-12 mx-auto">
                            <img src="path/to/nissan-logo.png" alt="Nissan" class="h-12 mx-auto">
                        </div>
                    </div>

                </div>
            </section>



            <!-- Services -->
            <section
                class="py-10 text-center bg-gray-100 dark:bg-gray-900 text-black dark:text-white min-h-screen flex flex-col justify-center">
                <h2 class="text-2xl font-bold">Our Services</h2>
                <div class="mt-6 flex flex-wrap justify-center gap-8">
                    <div class="max-w-xs bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Daily and Long-Term Rentals</h3>
                        <p class="mt-2 text-sm">Flexible rental options, whether you need a car for a day, a week, or
                            longer.</p>
                    </div>
                    <div class="max-w-xs bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Wide Vehicle Selection</h3>
                        <p class="mt-2 text-sm">Choose from economy cars, SUVs, luxury vehicles, and more to match your
                            needs.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>