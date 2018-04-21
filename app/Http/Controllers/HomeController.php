<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

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
            ->orderBy('created_at', 'DESC')->get();
        $searchMessage = "Showing " . count($posts) .
            (count($posts) == 1 ? " result " : " results ") . " for '" . $query . "': ";
      } else {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $num = count($posts);
      }
      return view('posts', compact('posts', 'searchMessage'));
    }

    public function displayPost($post_id) {
      $post = Post::find($post_id);
      // update views
      $post->views += 1;
      $post->save();

      // retrieve comments
      $comments = Comment::where('post_id', $post_id)->get();
      return view('post', compact('post', 'comments'));
    }

    public function submitComment(Request $request) {
      date_default_timezone_set('America/Indiana/Indianapolis');
      $comment = new Comment();
      $comment->author = "";
      if (strlen($request->name) > 0) {
        $comment->author = $request->name;
      }
      $comment->content = $request->comment;
      $comment->post_id = $request->post_id;
      $comment->date = date('Y:m:d H:i:s');
      $comment->save();
      //return $this->displayPost($request->post_id);
      return redirect('/posts/' . $request->post_id . "#commentSection");
    }
}
