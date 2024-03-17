<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <link rel="stylesheet" href="/my.css">
    <form method="POST" action="{{ route('login') }}">
        <h1>ورود</h1>
        @csrf

        <!-- Email Address -->
        <div>
           
            <x-text-input id="email" class="block mt-1 w-full my" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="ایمیل خود را وارد کنید" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            

            <x-text-input id="password" class="block mt-1 w-full" placeholder="رمز عبور را وارد کنید"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('منو به خاطر بسپار') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('فراموشی پسورد') }}
                </a>
            @endif
             <br>
            <x-primary-button class="ms-3">
                {{ __('ورود') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
