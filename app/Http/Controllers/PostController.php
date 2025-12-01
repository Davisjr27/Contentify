<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {

        $validatedData = $request->validated();

        $post = new Post();
        $post->user_id = auth()->id();
        $post->content = $validatedData['content'];

        $image_name = null;
        $video_name = null;


        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $image_name);
            $post->image = $image_name;
        }

        if ($request->hasFile('video')) {
            $video_name = time().'.'.$request->video->extension();
            $request->video->move(public_path('videos'), $video_name);
            $post->video = $video_name;
        }

        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    public function edit($id){
        $post = Post::findOrFail($id);

        // Check if the authenticated user is the owner of the post
        if ($post->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to edit this post.');
        }

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Check if the authenticated user is the owner of the post
        if ($post->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to update this post.');
        }

        $validatedData = $request->validate([
            'content' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10240',
        ]);

        $post->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($post->image && file_exists(public_path('images/' . $post->image))) {
                unlink(public_path('images/' . $post->image));
            }
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $image_name);
            $post->image = $image_name;
        }

        if ($request->hasFile('video')) {
            // Delete old video if exists
            if ($post->video && file_exists(public_path('videos/' . $post->video))) {
                unlink(public_path('videos/' . $post->video));
            }
            $video_name = time() . '.' . $request->video->extension();
            $request->video->move(public_path('videos'), $video_name);
            $post->video = $video_name;
        }

        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post updated successfully!');
    }

    public function destroy($id){
        $post = Post::findOrFail($id);

        // Check if the authenticated user is the owner of the post
        if ($post->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to delete this post.');
        }

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully!');
    }
}
