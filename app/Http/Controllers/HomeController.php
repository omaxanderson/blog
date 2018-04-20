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

    public function showPostPage(Request $request) {
      $query = "";
      $posts = "";
      $searchMessage = "";
      $num = 0;
      if (isset($request['q'])) {
        // get all relevant posts
        $query = $request['q'];
        // NEED TO PROTECT FROM SQL INJECTION
        $posts = Post::where('title', 'like', "%" . $query . "%")->
            orWhere('abstract', 'like', "%" . $query . "%")->
            orWhere('content', 'like', "%" . $query . "%")
            ->orderBy('created_at')->get();
        $searchMessage = "Showing " . count($posts) .
            (count($posts) == 1 ? " result " : " results ") . " for '" . $query . "': ";
      } else {
        $posts = Post::orderBy('created_at')->get();
        $num = count($posts);
      }
      return view('posts', compact('posts', 'searchMessage'));
    }

    public function displayPost($post_id) {
      $post = Post::find($post_id)->get()[0];
      return view('post', compact('post'));
    }
}
