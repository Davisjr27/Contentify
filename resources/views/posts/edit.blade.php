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

    <!-- EDIT POST CARD -->
    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="p-4 bg-white rounded-xl shadow">
      <h3 class="font-semibold text-lg mb-3">Edit Post</h3>

      <textarea name="content" class="w-full p-3 border rounded-lg" rows="3" placeholder="Share what’s on your mind...">{{ $post->content }}</textarea>
        @error('content')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        @isset($post->image)
            <img src="{{ asset('images/'.$post->image) }}" class="w-24 mt-3 rounded-lg" />
            <div>
                <label class="cursor-pointer flex items-center gap-2 text-indigo-600 mt-2">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 16.5V21h4.5l11-11-4.5-4.5L3 16.5z"/><path d="M14.5 6.5L17 9"/></svg>
                    <input name="image" type="file" class="hidden" />
                    <span class="text-sm">Change Image</span>
                </label>
                @error('image')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
        @endisset

        @isset($post->video)
            <video src="{{ asset('videos/'.$post->video) }}" controls class= "w-48 mt-3 rounded-lg"></video>
            <label class="cursor-pointer flex items-center gap-2 text-indigo-600 mt-2">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M3 16.5V21h4.5l11-11-4.5-4.5L3 16.5z"/>
                    <path d="M14.5 6.5L17 9"/>
                </svg>
                <input name="video" type="file" class="hidden" />
                <span class="text-sm">Change Video</span>
            </label>
            @error('video')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        @endisset
        <br>

        <button type="submit" class="px-5 py-2 bg-indigo-600 text-white rounded-lg shadow">Update</button>
      </div>
    </div>
    </form>




  </section>

  <!-- RIGHT SIDEBAR -->


</main>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

</body>
</html>
