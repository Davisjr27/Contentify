<header class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">
    <a href="{{ route('index') }}" class="flex items-center gap-3">
        <div
            class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-600 to-purple-500 flex items-center justify-center text-white font-bold shadow-lg">
            C</div>
        <div class="hidden sm:block">
            <h1 class="text-lg font-semibold">Contentify</h1>
            <p class="text-xs text-slate-500">Content management reimagined</p>
        </div>
    </a>

    {{ $nav ?? '' }}

    <div class="flex items-center gap-3">
        <a href="{{ route('login') }}" class="text-sm px-4 py-2 rounded-md">Log in</a>
        <a
            href="{{ route('register') }}"class="text-sm px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:shadow-lg">Get
            started</a>
        <button class="ml-3 p-2 rounded-full hover:bg-white/60 glass hidden md:inline-flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5 3a1 1 0 000 2h10a1 1 0 100-2H5zM4 7a2 2 0 012-2h8a2 2 0 012 2v7a2 2 0 01-2 2H6a2 2 0 01-2-2V7zm6 2a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</header>
