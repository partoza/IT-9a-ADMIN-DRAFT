    <x-guest-layout>
        <header class="text-white text-4xl font-bold text-center mb-6">Register</header>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Column 1-->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- First Name -->
                <div class="md:mb-4">
                    <x-text-input id="firstname" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        name="firstname" :value="old('firstname')" required autofocus placeholder="First Name"
                        style="background-color:white !important; color: black !important" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <!-- Middle Name -->
                <div class="md:mb-4">
                    <x-text-input id="middlename" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        style="background-color:white !important; color: black !important" name="middlename"
                        :value="old('middlename')" required autofocus placeholder="Middle Name" />
                    <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="md:mb-4">
                    <x-text-input id="lastname" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        style="background-color:white !important; color: black !important" name="lastname" required
                        :value="old('lastname')" placeholder="Last Name" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
            </div>

            <!-- Column 2-->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Province -->
                <div class="md:mb-4">
                    <x-text-input id="province" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        style="background-color:white !important; color: black !important" name="province"
                        :value="old('province')" required autofocus placeholder="Province" />
                    <x-input-error :messages="$errors->get('province')" class="mt-2" />
                </div>

                <!-- City -->
                <div class="md:mb-4 sm:mb-4 md:mb-0">
                    <x-text-input id="city" class="w-full px-4 py-3 border rounded-md text-black" type="text" name="city"
                        style="background-color:white !important; color: black !important" :value="old('city')" required
                        autofocus placeholder="City" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

                <!-- Zip Code -->
                <div class="md:mb-4 sm:mb-4 md:mb-0">
                    <x-text-input id="zipcode" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        style="background-color:white !important; color: black !important" :value="old('zipcode')"
                        name="zipcode" required placeholder="Zip Code" />
                    <x-input-error :messages="$errors->get('zipcode')" class="mt-2" />
                </div>
            </div>

            <!-- Column 3-->
            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4 mb-4 ">
                <!-- Barangay -->
                <div class="md:mb-4">
                    <x-text-input id="barangay" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        style="background-color:white !important; color: black !important" name="barangay"
                        :value="old('barangay')" required autofocus placeholder="Barangay" />
                    <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                </div>

                <!-- Address -->
                <div class="md:mb-4 sm:mb-4 md:mb-0">
                    <x-text-input id="address" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        name="address" style="background-color:white !important; color: black !important"
                        :value="old('address')" required autofocus placeholder="Address" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
            </div>


            <!-- Column 4-->
            <div class="grid grid-cols-1 gap-4 mb-4 ">
                <!-- Phone Number -->
                <div class="md:mb-4 flex items-center rounded-md bg-white w-full px-3">
                    <span class="mr-2">
                        <img src="{{ asset('assets/phflag.svg') }}" alt="PH Flag" class="w-8 h-14">
                    </span>
                    <span class="mr-1 text-black text-md">+639</span>
                    <x-text-input id="phonenumber" class="w-full text-black text-md" type="text"
                        style="background-color:white !important; color: black !important; border: none !important; border-radius: 0 !important;"
                        required autofocus placeholder="Enter phone number" maxlength="9" pattern="\d{9}"
                        title="Enter exactly 9 digits" />
                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                </div>

            </div>

            <!-- Column 5-->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Driver License Number -->
                <div class="md:mb-4">
                    <x-text-input id="driverlicense" class="w-full px-4 py-3 border rounded-md text-black" type="number"
                        style="background-color:white !important; color: black !important" name="phonenumber"
                        :value="old('driverlicense')" required autofocus placeholder="Driver License No." />
                    <x-input-error :messages="$errors->get('driverlicense')" class="mt-2" />
                </div>
                <!-- Licence Expiration Date -->
                <div class="md:mb-4">
                    <x-text-input id="licenceexpiration" class="w-full px-4 py-3 border rounded-md text-black" type="date"
                        style="background-color:white !important; color: black !important" name="phonenumber"
                        :value="old('licenceexpiration')" required autofocus placeholder="Driver License No." />
                    <x-input-error :messages="$errors->get('licenceexpiration')" class="mt-2" />
                </div>

                <!-- Upload License -->
                <div class="md:mb-4">

                    <x-text-input id="licenceimage" class="w-full px-4 py-3 border rounded-md text-black bg-white"
                        style="background-color:white !important; color: black !important" type="file" name="licenceimage"
                        :value="old('licenceimage')" required autofocus />
                    <x-input-error :messages="$errors->get('licenceimage')" class="mt-2" />
                </div>
            </div>

            <!-- Column 6-->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Email -->
                <div class="md:mb-4">
                    <x-text-input id="email" class="w-full px-4 py-3 border rounded-md text-black" type="email"
                        style="background-color:white !important; color: black !important" name="email"
                        :value="old('email')" required autofocus placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="md:mb-4">
                    <x-text-input id="password" class="w-full px-4 py-3 border rounded-md text-black" type="password"
                        style="background-color:white !important; color: black !important" name="password" required
                        autofocus placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="md:mb-4">
                    <x-text-input id="confirmpasword" class="w-full px-4 py-3 border rounded-md text-black bg-white"
                        style="background-color:white !important; color: black !important" type="password"
                        name="password_confirmation" required autofocus placeholder="Confirm Password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>



            <!-- Name -->
            {{-- <div>
                <x-input-label for="name" :value="__('Name')" class="!text-white" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="!text-white" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="!text-white" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:!text-[#6e7e91] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button
                    class="ms-4 !bg-white hover:!bg-[#123e78] py-2 px-4 rounded-md border  flex items-center justify-center !text-black hover:!text-white">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>