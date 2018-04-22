@extends('layouts.app')

@section('content')
<div class='col-sm-8 offset-sm-2'>
  <h3 class='my-5'>Posts</h3>
  <p id='searchMessage'>{{ $searchMessage }}</p>

  @php
    // good lord there has to be a better way
    foreach ($posts as $post) {
      echo "<a class='post_link' href='/posts/";
      echo $post->id;
      echo "'><div class='card mb-4 blog_post'>";
      echo "<div class='card-header'><div class='row'><h5 class='col-sm-9 mb-0'>";
      echo $post->title;
      echo "</h5><span class='d-flex justify-content-end text-secondary col-sm-3'>";
      $post_date = strtotime($post->created_at);
      $formattedDate = date("F j, Y", $post_date);
      echo $formattedDate;
      echo "</span></div><div class='row col-sm-12 text-secondary'>";
      echo App\User::find($post->user_id)->get()[0]->name;
      echo "</div></div>";

      echo "<div class='card-body'>";
      echo "<p class='mb-0'>";
      echo $post->abstract;
//      echo "</p></div><ul class='list-group list-group-flush'><li class='list-group-item'>";
      echo "</p><hr class='mt-4 mb-1'>";
      echo $post->read_time;
      echo $post->read_time == 1 ? " min" : " mins";
      echo " | ";
      echo $post->views;
      echo $post->views == 1 ? " view" : " views";
      echo " | ";
      echo count(App\Comment::where('post_id', $post->id)->get());
      echo (count(App\Comment::where('post_id', $post->id)->get()) == 1 ? " comment" : " comments") . "</div></div>";
      echo "</a>";
    }

  @endphp
</div>
@endsection
