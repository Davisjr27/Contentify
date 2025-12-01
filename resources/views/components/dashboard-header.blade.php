<header class="w-full sticky top-0 bg-white/80 backdrop-blur z-40 shadow-sm">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a class="flex items-center gap-2" href="{{ route('index') }}">
            <div
                class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-600 to-purple-600 flex items-center justify-center text-white font-bold">
                C</div>
            <span class="font-semibold text-lg hidden sm:block">Contentify</span>
        </a>

        <div class="hidden md:flex items-center gap-6 text-sm">
            <a href="#feed" class="hover:text-indigo-600">Feed</a>
            <a href="#explore" class="hover:text-indigo-600">Explore</a>
            <a href="#upload" class="hover:text-indigo-600">Upload</a>
            <a href="#messages" class="hover:text-indigo-600">Messages</a>
        </div>

        <div class="flex items-center gap-3">
            <button class="p-2 rounded-full hover:bg-slate-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                    stroke-width="1.5" viewBox="0 0 24 24">
                    <path
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11c0-3.07-1.64-5.64-4.5-6.32v-.68a1.5 1.5 0 10-3 0v.68C7.64 5.36 6 7.92 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </button>
            @if (auth()->user()->avatar !== null)
                <img src="{{ asset('images/' . $post->avatar) }}" class="w-9 h-9 rounded-full" />
            @else
                <img src="{{ asset('images/avatar.png') }}" class="w-9 h-9 rounded-full" />
            @endif
        </div>
    </div>
</header>
