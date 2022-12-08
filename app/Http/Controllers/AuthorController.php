<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "Author",
            // "users" => User::all(),
            'posts' => Post::all()
            // ->unique('user_id')
        ]);
    }

    public function show(User $author)
    {
        return view('posts', [
            'title' => "Post by Author : $author->name",
            'posts' => $author->posts->load('category', 'author')
        ]);
    }
}
