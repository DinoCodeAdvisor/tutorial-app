<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    /**
     * Show the homepage to the user with his respective data
     */
    public function homepage(): View
    {
        $user = Auth::user();
        $posts = Post::inRandomOrder()->limit(3)->get();

        return view('homepage',['user' => $user, 'posts' => $posts]);
    }
}
