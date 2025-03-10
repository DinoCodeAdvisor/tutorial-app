<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * -- We'll use it for our Random Post, since the listing of the Posts is already kinda done by the HomePage (even tho its 3)
     */
    public function index()
    {
        $post = Post::inRandomOrder()->first();

        return redirect()->route('posts.show', $post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // If this validations fails, it returns the user back to the last page with errors
        $validated = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|max:250'
        ]);
        

        //If success, complete the process
        $validated['user_id'] = Auth::user()->id;

        $post = Post::create($validated);
        return redirect()->route('posts.show', $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if(Auth::user()->isNot($post->user))
        {
            return redirect()->back()->withErrors([
                'auth' => 'You cannot edit other people posts.'
            ]);
        }

        return view('edit_post', ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|max:250'
        ]);
        

        //If success, complete the process
        $validated['user_id'] = Auth::user()->id;

        $post->update($validated);
        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(Auth::user()->isNot($post->user))
        {
            return redirect()->back()->withErrors([
                'auth' => 'You cannot edit other people posts.'
            ]);
        }

        $post->delete();
        return redirect()->route('posts.show', $post);
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Post $post)
    {
        if(Auth::user()->isNot($post->user))
        {
            return redirect()->back()->withErrors([
                'auth' => 'You cannot edit other people posts.'
            ]);
        }

        $post->restore();
        return redirect()->route('posts.show', $post);
    }
}
