<x-guest-layout>
    <div class="w-full h-screen bg-[#00008B] flex items-center justify-center">
        <div class="w-full max-w-sm bg-white rounded-xl shadow-lg px-8 py-10">
            <h1 class="text-2xl font-semibold text-center text-[#00008B] mb-6">Login Admin BPKB</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email/Username -->
                <div class="mb-4">
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        placeholder="password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Login Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-[#00008B] hover:bg-[#00006b] text-white font-semibold py-2 rounded-md transition duration-200">
                        Log In
                    </button>
                </div>

                <!-- Forgot Password -->
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-gray-800 underline"
                            href="{{ route('password.request') }}">
                            forgot password?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
