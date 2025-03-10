<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        
        $comment = Comment::create($data); // In this case its a string, so we need to call the array value
        return redirect()->route('posts.show',$comment->post_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        
        $comment->update($data);
        return redirect()->route('posts.show',$comment->post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        if(Auth::user()->isNot($comment->user))
        {
            return redirect()->back()->withErrors([
                'auth' => 'You cannot delete other people comments.'
            ]);
        }

        $comment->delete();

        return redirect()->route('posts.show', $comment->post);
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Comment $comment)
    {
        if(Auth::user()->isNot($comment->user))
        {
            return redirect()->back()->withErrors([
                'auth' => 'You cannot delete other people comments.'
            ]);
        }

        $comment->restore();

        return redirect()->route('posts.show', $comment->post);
    }
}
