@extends('layouts.administration')

@section('content')

    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Car Modifications</h2>
                </div>
            </div>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @for ($i = 0; $i < 8; $i++)
                    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-full">
                            <a href="#">
                                <img class="mx-auto h-full dark:hidden" src="https://via.placeholder.com/150" alt="Car Image" />
                                <img class="mx-auto hidden h-full dark:block" src="https://via.placeholder.com/150"
                                    alt="Car Image" />
                            </a>
                        </div>
                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <span
                                    class="px-2 py-1 text-xs font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Active
                                </span>
                                <button id="dropdownMenuButton{{ $i }}" data-dropdown-toggle="dropdownMenu{{ $i }}"
                                    class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v.01M12 12v.01M12 18v.01" />
                                    </svg>
                                </button>
                                <div id="dropdownMenu{{ $i }}"
                                    class="hidden z-10 w-44 bg-white rounded-lg shadow dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <button onclick="openDrawer('Car Model XYZ', 'ABC-1234', 'Active', '03/31/2025')"
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Edit
                                            </button>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                Car Model XYZ
                            </a>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">License Plate: ABC-1234</p>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Last Updated: 03/31/2025</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Drawer -->
    <div id="carDetailsDrawer"
        class="fixed top-0 right-0 z-50 hidden h-full w-full max-w-2xl bg-white shadow-lg dark:bg-gray-800 transform translate-x-full transition-transform duration-300 overflow-y-auto">
        <div class="relative p-8">
            <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Edit Car Details</h3>

            <!-- Close Button -->
            <button onclick="closeDrawer()"
                class="absolute top-6 right-6 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Form -->
            <form class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="carModel" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car
                        Model</label>
                    <input type="text" id="carModel"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5" />
                </div>

                <div>
                    <label for="licensePlate" class="block text-sm font-medium text-gray-700 dark:text-gray-300">License
                        Plate</label>
                    <input type="text" id="licensePlate"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5" />
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                    <select id="status"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5">
                        <option value="Active">Active</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                        <option value="Damaged">Damaged</option>
                    </select>
                </div>

                <div>
                    <label for="lastUpdated" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Last
                        Updated</label>
                    <input type="date" id="lastUpdated"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5" />
                </div>

                <div>
                    <label for="wheels" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Wheels</label>
                    <input type="text" id="wheels"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5" />
                </div>

                <div>
                    <label for="odometer"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Odometer</label>
                    <input type="text" id="odometer"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5" />
                </div>

                <div>
                    <label for="engineType" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Engine
                        Type</label>
                    <input type="text" id="engineType"
                        class="mt-2 w-full rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 focus:outline-none p-2.5" />
                </div>

                <div>
                    <label for="carImage" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car
                        Image</label>
                    <div
                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-300 dark:border-gray-600 overflow-hidden h-40">
                        <img id="carImagePreview" src="https://via.placeholder.com/150" alt="Car Image"
                            class="object-cover w-full h-full">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="sm:col-span-2 flex justify-end gap-4 mt-6">
                    <button type="button" onclick="closeDrawer()"
                        class="px-5 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-600 dark:text-gray-200 dark:hover:bg-gray-700">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>



    <script>
        function openDrawer(carModel, licensePlate, status, lastUpdated, wheels, odometer, engineType, carImage) {
            document.getElementById('carModel').value = carModel;
            document.getElementById('licensePlate').value = licensePlate;
            document.getElementById('status').value = status;
            document.getElementById('lastUpdated').value = lastUpdated;
            document.getElementById('wheels').value = wheels;
            document.getElementById('odometer').value = odometer;
            document.getElementById('engineType').value = engineType;
            document.getElementById('carImagePreview').src = carImage || 'https://via.placeholder.com/150';
            const drawer = document.getElementById('carDetailsDrawer');
            drawer.classList.remove('hidden');
            drawer.classList.remove('translate-x-full');
        }

        function closeDrawer() {
            const drawer = document.getElementById('carDetailsDrawer');
            drawer.classList.add('translate-x-full');
            setTimeout(() => drawer.classList.add('hidden'), 300);
        }
    </script>

@endsection