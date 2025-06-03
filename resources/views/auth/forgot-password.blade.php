<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg px-8 py-10 text-center">
        <h2 class="text-2xl font-bold text-[#00008B] mb-2">Forgot Password</h2>
        <p class="text-gray-500 text-sm mb-6">Please enter your email to reset the password</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6 text-left">
                <label for="email" class="block text-sm text-gray-700 mb-1">Your Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                    placeholder="Enter your email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <button type="submit"
                class="w-full bg-[#00008B] hover:bg-[#00006b] text-white font-semibold py-2 rounded-md transition duration-200">
                Reset Password
            </button>
        </form>
    </div>
</x-guest-layout>
