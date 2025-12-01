<div class="p-4 bg-white rounded-xl shadow">
      <div class="flex items-center gap-3">

        @if ($post->avatar !== null)
        <img src="{{ asset('images/'.$post->avatar) }}" class="w-9 h-9 rounded-full" />
        @else
        <img src="{{ asset('images/avatar.png') }}" class="w-9 h-9 rounded-full" />
        @endif

        <div>
          <div class="font-semibold">{{ $post->user->name }}</div>
          <div class="text-xs text-slate-400">{{ $post->created_at->diffForHumans()}}</div>
        </div>
      </div>

      <p class="mt-3">{{ $post->content }}</p>

      @isset($post->image)
      <img src="{{ asset('images/'.$post->image) }}" class="w-24 mt-3 rounded-lg" />
      @endisset

      @isset($post->video)
      <video src="{{ asset('videos/'.$post->video) }}" controls class= "w-48 mt-3 rounded-lg"></video>
      @endisset

      <div class="mt-4 flex items-center gap-6 text-slate-500 text-sm">
        <button class="flex items-center gap-1 hover:text-indigo-600">❤️ 120</button>
        <button class="flex items-center gap-1 hover:text-indigo-600">💬 32</button>
        <button class="flex items-center gap-1 hover:text-indigo-600">↗️ Share</button>
        @if ($post->user_id === Auth::id())
            <a href="{{ route('posts.edit', $post->id) }}">✒️ Edit</a>
            <form method="POST" action="{{ route('posts.destroy', $post->id) }}"
                onsubmit="return confirm('Are you sure to delete this post?')">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️ Delete</button>
            </form>
        @endif
      </div>
    </div>
