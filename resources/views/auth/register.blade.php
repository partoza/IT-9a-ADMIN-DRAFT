<x-guest-layout>
    <header class="text-white text-4xl font-bold text-center mb-6">Register</header>

    <form method="POST" action="{{ route('register') }}">
        @csrf
       
        <!-- Column 1-->
        <div class="grid grid-cols-3 gap-4">
            <!-- First Name -->
            <div class="mb-4">
                <x-text-input id="firstname" class="w-full px-4 py-3 border rounded-md text-black" type="email"
                    name="email" :value="old('email')" required autofocus placeholder="First Name" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Middle Name -->
            <div class="mb-4">
                <x-text-input id="middlename" class="w-full px-4 py-3 border rounded-md text-black" type="email"
                    name="email" :value="old('email')" required autofocus placeholder="Middle Name" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="mb-4">
                <x-text-input id="lastname" class="w-full px-4 py-3 border rounded-md text-black" type="password"
                    name="password" required placeholder="Last Name" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Column 2-->
        <div class="grid grid-cols-3 gap-4">
            <!-- Province -->
            <div class="mb-4">
                <x-text-input id="province" class="w-full px-4 py-3 border rounded-md text-black" type="email"
                    name="email" :value="old('email')" required autofocus placeholder="Province" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- City -->
            <div class="mb-4">
                <x-text-input id="city" class="w-full px-4 py-3 border rounded-md text-black" type="email" name="email"
                    :value="old('email')" required autofocus placeholder="City" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Zip Code -->
            <div class="mb-4">
                <x-text-input id="zipcode" class="w-full px-4 py-3 border rounded-md text-black" type="password"
                    name="password" required placeholder="Zip Code" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Column 3-->
        <div class="grid grid-cols-2 gap-4">
            <!-- Barangay -->
            <div class="mb-4">
                <x-text-input id="province" class="w-full px-4 py-3 border rounded-md text-black" type="email"
                    name="email" :value="old('email')" required autofocus placeholder="Barangay" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="mb-4">
                <x-text-input id="city" class="w-full px-4 py-3 border rounded-md text-black" type="email" name="email"
                    :value="old('email')" required autofocus placeholder="Address" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>


        <!-- Column 4-->
        <div class="grid grid-cols-1 gap-4">
            <!-- Phone Number -->
            <div class="mb-4">
                <x-text-input id="phonenumber" class="w-full px-4 py-3 border rounded-md text-black" type="number"
                    name="phonenumber" :value="old('email')" required autofocus placeholder="+639" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>


        <!-- Column 5-->
        <div class="grid grid-cols-3 gap-4">
            <!-- Driver License Number -->
            <div class="mb-4">
                <x-text-input id="driverlicense" class="w-full px-4 py-3 border rounded-md text-black" type="number"
                    name="phonenumber" :value="old('email')" required autofocus placeholder="Driver License No." />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Licence Expiration Date -->
            <div class="mb-4">
                <x-text-input id="driverlicense" class="w-full px-4 py-3 border rounded-md text-black" type="date"
                    name="phonenumber" :value="old('email')" required autofocus placeholder="Driver License No." />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Upload License -->
            <div class="mb-4">
                <x-text-input id="driverlicense" class="w-full px-4 py-3 border rounded-md text-black bg-white"
                    type="file" name="phonenumber" :value="old('email')" required autofocus
                    placeholder="Upload License" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Column 6-->
        <div class="grid grid-cols-3 gap-4">
            <!-- Email -->
            <div class="mb-4">
                <x-text-input id="email" class="w-full px-4 py-3 border rounded-md text-black" type="email"
                    name="email" :value="old('email')" required autofocus placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mb-4">
                <x-text-input id="password" class="w-full px-4 py-3 border rounded-md text-black" type="password"
                    name="password" :value="old('email')" required autofocus placeholder="Password" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-text-input id="confirmpasword" class="w-full px-4 py-3 border rounded-md text-black bg-white"
                    type="password" name="confirmpassword" :value="old('email')" required autofocus
                    placeholder="Confirm Password" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 !text-white"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 bg-white py-2 px-4 rounded-md border  flex items-center justify-center !text-black hover:!text-white">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>