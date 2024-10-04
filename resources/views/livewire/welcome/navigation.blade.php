<nav class="flex justify-center items-center py-4 bg-gray-800 shadow-lg">
    <div class="flex space-x-8">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-6 py-3 text-lg font-semibold text-white bg-blue-600 transition hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-6 py-3 text-lg font-semibold text-white bg-blue-600 transition hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-6 py-3 text-lg font-semibold text-white bg-blue-600 transition hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                >
                    Register
                </a>
            @endif
        @endauth
    </div>
</nav>

