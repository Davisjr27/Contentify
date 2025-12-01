<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contentify — Share Your World</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .glass{background:rgba(255,255,255,.55);backdrop-filter:blur(10px) saturate(130%)}
  </style>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
</head>
<body class="bg-gradient-to-b from-indigo-50 via-white to-purple-50 min-h-screen text-slate-800">

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                alertify.set('notifier','position', 'top-right');
                alertify.success("{{ session('success') }}");
            });
        </script>
    @endif

<!-- NAVBAR -->
<x-dashboard-header />

<!-- MAIN LAYOUT -->
<main class="max-w-6xl mx-auto px-4 mt-6 grid grid-cols-1 md:grid-cols-4 gap-6">

  <!-- LEFT SIDEBAR -->
  <x-dashboard.sidebar />

  <!-- FEED COLUMN -->
  <section class="col-span-1 md:col-span-2 space-y-6">

    <!-- CREATE POST CARD -->
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
    <div class="p-4 bg-white rounded-xl shadow">
      <h3 class="font-semibold text-lg mb-3">Create a Post</h3>

      <textarea name="content" class="w-full p-3 border rounded-lg" rows="3" placeholder="Share what’s on your mind..."></textarea>
        @error('content')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror


      <div class="mt-3 flex items-center justify-between">
        <div class="flex items-center gap-3 text-indigo-600">
          <label class="cursor-pointer flex items-center gap-2">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 16.5V21h4.5l11-11-4.5-4.5L3 16.5z"/><path d="M14.5 6.5L17 9"/></svg>
            <input name="image" type="file" class="hidden" />
            <span class="text-sm">Image</span>

          </label>
          @error('image')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>

          @enderror

          <label class="cursor-pointer flex items-center gap-2">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0020 6.829V5.17a1 1 0 00-1.447-.894L15 6"/><path d="M4 4h6v16H4z"/></svg>
            <input name="video" type="file" class="hidden" />
            <span class="text-sm">Video</span>
          </label>
          @error('video')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="px-5 py-2 bg-indigo-600 text-white rounded-lg shadow">Post</button>
      </div>
    </div>
    </form>

    <!-- SAMPLE POSTS -->
    @foreach ($posts as $post)
    <x-post-item :post="$post" />
    @endforeach





      {{-- <p class="mt-3">Just launched my first blog using NovaSocial CMS tools! 🚀🔥</p> --}}
    {{-- </div> --}}

  </section>

  <!-- RIGHT SIDEBAR -->
  <aside class="hidden md:block col-span-1 space-y-4">
    <div class="p-4 bg-white rounded-xl shadow">
      <h3 class="font-semibold">Suggested Users</h3>
      <ul class="mt-3 space-y-3 text-sm">
        <li class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img src="https://i.pravatar.cc/32?img=15" class="w-8 h-8 rounded-full" />
            <span>Amanda</span>
          </div>
          <button class="px-3 py-1 text-xs bg-indigo-600 text-white rounded">Follow</button>
        </li>
        <li class="flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img src="https://i.pravatar.cc/32?img=20" class="w-8 h-8 rounded-full" />
            <span>David</span>
          </div>
          <button class="px-3 py-1 text-xs bg-indigo-600 text-white rounded">Follow</button>
        </li>
      </ul>
    </div>
  </aside>

</main>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

</body>
</html>
