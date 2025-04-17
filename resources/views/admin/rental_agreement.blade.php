@extends('layouts.administration')

@section('content')

<section class="max-w-4xl mx-auto mt-5 bg-white dark:bg-gray-900 rounded-xl shadow-md p-6 print:p-0 print:shadow-none print:rounded-none print:bg-white print:dark:bg-white print:text-black">
    
    <!-- Logo -->
    <div class="flex justify-center mb-3">
    <img src="{{ asset('assets/logowithtext.png') }}" alt="BMP Logo" class="w-50 h-14 mb-2">
    </div>

    <!-- Title -->
    <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-6 border-b pb-3 print:text-black print:mb-4">Rental Agreement & Policies</h2>

    <!-- Two Columns -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-20 text-sm leading-relaxed print:grid-cols-2">
        
        <!-- Rental Policies -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white print:text-black">Rental Policies</h3>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 print:text-black">
                <li>Renter must be at least 21 years old with a valid driver’s license.</li>
                <li>Vehicles must be returned with the same fuel level to avoid extra charges.</li>
                <li>Smoking is strictly prohibited in all rental vehicles.</li>
                <li>All rentals require a security deposit via valid credit/debit card.</li>
                <li>Late returns incur additional hourly charges after a 1-hour grace period.</li>
                <li>Only authorized drivers listed in the agreement may operate the vehicle.</li>
                <li>No pets allowed unless prior approval is given.</li>
                <li>Renter is responsible for any traffic violations or toll fees during rental.</li>
                <li>Any damage to the vehicle must be reported immediately to the rental company.</li>
                <li>Rental extensions must be requested 24 hours in advance and are subject to availability.</li>
            </ul>
        </div>

        <!-- Rental Agreement -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 print:text-black">Rental Agreement</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-4 print:text-black text-justify">
                I, the undersigned renter, agree to the terms and confirm that I have read and understood the rental policies stated by the rental company. I acknowledge full responsibility for the vehicle during the rental period and accept liability for any damage, loss, or traffic violations incurred.
            </p>
            
            <form class="space-y-4 print:space-y-2">
                <div>
                    <label class="block text-sm text-gray-600 dark:text-gray-400 print:text-black">Renter's Full Name:</label>
                    <input type="text" class="w-full p-2 border rounded-md dark:bg-gray-800 dark:text-white mt-1 print:bg-transparent print:border-black print:text-black">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 dark:text-gray-400 print:text-black">Date:</label>
                    <input type="date" class="w-full p-2 border rounded-md dark:bg-gray-800 dark:text-white mt-1 print:bg-transparent print:border-black print:text-black">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 dark:text-gray-400 print:text-black">Signature:</label>
                    <input type="text" class="w-full p-2 border rounded-md dark:bg-gray-800 dark:text-white mt-1 print:bg-transparent print:border-black print:text-black">
                </div>
            </form>
        </div>
    </div>

    <div class="mt-12 border-t pt-6 text-sm text-gray-700 dark:text-gray-300 print:text-black print:border-t-black">
        <p>
            This document confirms the agreement between the renter and the rental company. BMP Car Rental affirms that the vehicle was released in good condition and all policies have been explained to the renter.
        </p>
    </div>

    <!-- Print Button Only (hidden in print) -->
    <div class="mt-10 flex justify-center print:hidden">
        <button onclick="window.print()" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow">
            Print Agreement
        </button>
    </div>
</section>

@endsection