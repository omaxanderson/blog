<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showPostPage() {
      $posts = Post::all();
      return view('posts', compact('posts'));
    }

    public function displayPost($post_id) {
      $post = Post::find($post_id)->get()[0];
      return view('post', compact('post'));
    }
}
