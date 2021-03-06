<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

use App\Post;
use App\Draft;

class AdminController extends Controller {

  public $destinationPath = 'post-uploads/';
  public $titleParser = "title: ";
  public $abstractParser = "abstract: ";
  public $readTimeParser = "read-time: ";
  public $userIdParser = "user-id: ";
  public $contentParser = "content:";

  public function __construct() {
    $this->middleware('auth');
  }

  // I think I should get rid of this
  public function showEditPosts() {
    $posts = Post::orderBy('created_at', 'DESC')->get();
    return view('editPosts', compact('posts'));
  }

  public function showPostEdit(Request $request) {
    $post = Post::find($request->post_id);
    return view('editPost', compact('post'));
  }

  public function saveDraft(Request $request) {
    $draft = new Draft();
    $draft->title = $request->title;
    $draft->abstract = $request->abstract;
    $draft->read_time = $request->readTime;
    $draft->content = $request->content;
    $draft->user_id = $request->userId;
    $draft->save();
    return $draft;
    try {
      $draft->save();
    } catch (Exception $e) {
      return $e;
    }

    /*
    */
  //  $json = json_encode(array(status: 'ok'));

    return 'ok';
//    return json_encode(array('status': 'ok'));
  }

  public function processEdit(Request $request) {
    $post = Post::find($request->post_id);

    if ($request->submit == "delete") {
      $post->delete();
      return redirect('/');
    }

    $post->title = $request->title;
    $post->abstract = $request->abstract;
    $post->content = $request->content;
    $post->user_id = $request->user_id;
    $post->read_time = $request->read_time;
    $post->updated_at = date("Y-m-d");
    $post->save();
    return redirect('/posts/' . $post->id);
  }

  public function uploadPostForm(Request $request) {
    if (!Auth::check()) {
      return view('login');
    }
    $post = new Post();
    $post->title = $request->title;
    $post->abstract = $request->abstract;
    $post->content = $request->content;
    $post->user_id = $request->user_id;
    $post->read_time = $request->read_time;
    $post->views = 0;
    $post->created_at = date("Y-m-d");
    $post->save();
    $uploadMessage = "<p class='text-success'>Successfully published post</p>";
    return view('adminDashboard', compact('uploadMessage'));
  }

  public function uploadPost(Request $request) {
    if (!Auth::check()) {
      return view('login');
    }

    $file = $request->file('file-upload');
    $file->storeAs($this->destinationPath, $file->getClientOriginalName());
    $uploadMessage = "File successfully uploaded";
    //$destination = '../post-files';
    //$file->move($destination, $file->getClientOriginalName());
    $contents = "";
    if (Storage::disk('local')->exists($this->destinationPath . $file->getClientOriginalName())) {
      $uploadMessage = $this->parseFile($file->getClientOriginalName());
    } else {
      $uploadMessage = "Error - internal server error";
    }

    return view('adminDashboard', compact('file', 'uploadMessage', 'contents'));
  }

  public function parseFile($filename) {
    $contents = Storage::get($this->destinationPath . $filename);
    $errMessage = "";
    // first find the title - first line after <TITLE> tag
    if (strpos($contents, $this->titleParser) === false) {
      $errMessage = "Error - no title found";
    }
    $startIdx = strpos($contents, $this->titleParser) + strlen($this->titleParser);
    $len = strpos($contents, "\n") - $startIdx;
    $title = substr($contents, $startIdx, $len);

    // Get the abstract
    if (strpos($contents, $this->abstractParser) === false) {
      $errMessage = "Error - no abstract found";
    }
    $startIdx = strpos($contents, $this->abstractParser) + strlen($this->abstractParser);
    $len = strpos($contents, "\n", $startIdx) - $startIdx;
    $abstract = substr($contents, $startIdx, $len);

    // Get the read-time
    if (strpos($contents, $this->readTimeParser) === false) {
      $errMessage = "Error - no read time found";
    }
    $startIdx = strpos($contents, $this->readTimeParser) + strlen($this->readTimeParser);
    $len = strpos($contents, "\n", $startIdx) - $startIdx;
    $readTime = substr($contents, $startIdx, $len);

    // Get the user id
    if (strpos($contents, $this->userIdParser) === false) {
      $errMessage = "Error - no user id found";
    }
    $startIdx = strpos($contents, $this->userIdParser) + strlen($this->userIdParser);
    $len = strpos($contents, "\n", $startIdx) - $startIdx;
    $userId = substr($contents, $startIdx, $len);

    // Get the post content
    if (strpos($contents, $this->contentParser) === false) {
      $errMessage = "Error - no content found";
    }
    $startIdx = strpos($contents, $this->contentParser) + strlen($this->contentParser);
    $content = substr($contents, $startIdx);
    //$content = str_replace("\\\"", "\"", $content);

    if (strlen($errMessage) > 0) {
      return $errMessage;
    }

    $post = new Post();
    $post->title = $title;
    $post->abstract = $abstract;
    $post->read_time = $readTime;
    $post->user_id = $userId;
    $post->created_at = date('Y-m-d');
    $post->views = 0;
    $post->content = $content;
    $post->save();
//    $post->abstract
    return "\"" . $title . "\" successfully uploaded!";
  }

  public function logout() {
    Auth::logout();
    return redirect('/posts');
  }

}

?>
