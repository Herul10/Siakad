<x-guest-layout>

    <!-- Background -->
    <div class="fixed inset-0 -z-10">
        <img
            src="{{ asset('images/unsur.jpg') }}"
            alt="Background UNSUR"
            class="w-full h-full object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-white/75 backdrop-blur-sm"></div>

        <!-- Dekorasi -->
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-blue-400/20 rounded-full"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-blue-500/20 rounded-full"></div>

        <!-- Dot Pattern -->
        <div class="absolute top-10 right-10 grid grid-cols-6 gap-2 opacity-30">
            @for ($i = 0; $i < 36; $i++)
                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full"></div>
            @endfor
        </div>
    </div>

    <!-- Login Card -->
    <div class="w-full max-w-md">

        <div class="bg-white/95 backdrop-blur-md shadow-2xl rounded-3xl p-8 border border-white">

            <!-- Logo Fakultas Teknik -->
            <div class="text-center mb-6">

                <img
                    src="{{ asset('images/logo-ft.png') }}"
                    alt="Logo FT UNSUR"
                    class="w-28 mx-auto">

                <h1 class="mt-4 text-4xl font-bold text-slate-800">
                    SIAKAD
                </h1>

                <p class="text-slate-500">
                    Sistem Informasi Akademik
                </p>

            </div>

            <!-- Status Session -->
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
                        class="block mt-2 w-full rounded-xl border-gray-300"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Masukkan email Anda" />

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
                        class="block mt-2 w-full rounded-xl border-gray-300"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Masukkan password Anda" />

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
                            class="rounded border-gray-300 text-blue-600 shadow-sm">

                        <span class="ml-2 text-sm text-gray-600">
                            Remember Me
                        </span>

                    </label>

                </div>

                <!-- Button -->
                <div class="flex items-center justify-between mt-6">

                    @if (Route::has('password.request'))
                        <a
                            href="{{ route('password.request') }}"
                            class="text-sm text-blue-600 hover:text-blue-800">
                            Lupa Password?
                        </a>
                    @endif

                    <x-primary-button
                        class="bg-slate-800 hover:bg-slate-900 rounded-xl px-6 py-3">
                        LOGIN →
                    </x-primary-button>

                </div>

            </form>

        </div>

    </div>

</x-guest-layout>