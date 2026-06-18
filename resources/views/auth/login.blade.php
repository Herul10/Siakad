<x-guest-layout>

    <div class="w-full max-w-md">

        <!-- Logo -->
        <div class="text-center mb-6">
            <div class="w-20 h-20 mx-auto bg-indigo-600 rounded-full flex items-center justify-center shadow-lg">
                <span class="text-white text-3xl font-bold">S</span>
            </div>

            <h1 class="mt-4 text-3xl font-bold text-gray-800">
                SIAKAD
            </h1>

            <p class="text-gray-500">
                Sistem Informasi Akademik
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white shadow-2xl rounded-2xl p-8">

            <x-auth-session-status
                class="mb-4"
                :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label
                        for="email"
                        :value="__('Email')" />

                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-xl"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus />

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-5">

                    <x-input-label
                        for="password"
                        :value="__('Password')" />

                    <x-text-input
                        id="password"
                        class="block mt-2 w-full rounded-xl"
                        type="password"
                        name="password"
                        required />

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="mt-2" />
                </div>

                <!-- Remember -->
                <div class="mt-4">
                    <label class="inline-flex items-center">
                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-gray-300 text-indigo-600">

                        <span class="ml-2 text-sm text-gray-600">
                            Remember Me
                        </span>
                    </label>
                </div>

                <!-- Button -->
                <div class="flex items-center justify-between mt-6">

                    @if (Route::has('password.request'))
                        <a
                            class="text-sm text-indigo-600 hover:text-indigo-800"
                            href="{{ route('password.request') }}">
                            Lupa Password?
                        </a>
                    @endif

                    <x-primary-button
                        class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-xl">
                        Login
                    </x-primary-button>

                </div>

            </form>

        </div>

    </div>

</x-guest-layout>