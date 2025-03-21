<x-guest-layout>
    <!-- Login Section -->

    <h2 class="text-white text-2xl font-bold text-center mb-6">LOG IN</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-text-input id="email" class="w-full px-4 py-3 border rounded-md text-black" type="email" name="email"
                :value="old('email')" required autofocus placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-text-input id="password" class="w-full px-4 py-3 border rounded-md text-black" type="password"
                name="password" required placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Forgot Password -->
        <div class="text-right text-sm mb-4">
            @if (Route::has('password.request'))
                <a class="text-white underline" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <x-primary-button class="w-full bg-white text-black font-bold py-2 px-4 rounded-md border border-white">
                {{ __('SIGN IN') }}
            </x-primary-button>
        </div>


        <!-- Register Link -->
        <div class="text-center text-white text-sm mt-4">
            Doesn't have an account?
            <a class="underline" href="{{ route('register') }}">Register Here</a>
        </div>

        <!-- Back to Home -->
        <div class="text-center text-white text-sm mt-2">
            <a class="underline" href="{{ url('/') }}">Back to Home</a>
        </div>
    </form>

</x-guest-layout>