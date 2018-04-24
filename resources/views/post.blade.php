@extends('layouts.app')

@section('content')

<div class='d-flex justify-content-between'>
  <h3 class='col-sm-6 offset-sm-3 mb-5 d-flex justify-content-center'>
    {{ $post->title }}
  </h3>
  @php
    if (Auth::check()) {
      echo "<div class='col-sm-3 d-flex justify-content-end'><form action='/editPost' method='GET'>";
      echo csrf_field();
      echo "<input name='post_id' value='" . $post->id . "' hidden>";
      echo "<a href='/editPost'><button class='btn btn-primary'>Edit Post</button></a>";
      echo "</form></div>";
    }
  @endphp
</div>

  @php
    if (isset($uploadMsg)) {
      echo $uploadMsg;
    }
  @endphp

  @php
  // Don't use the blade shorthand, it doesn't work for this
  echo $post->content;
  @endphp

  <span style='display:inline-block; width: 30px;'></span> <!-- Tab spacer -->
  <span>- Max</span>
  <div style='display:block; height:20px'></div>
  <hr class='mt-3 mb-2'></hr>

  <h3 id="commentSection" class='mt-2'>Comments</h3>
  <!-- I have no idea why but without this form the comment form won't submit -->
  <form></form>

  <form action="/submitComment" method='post'>
    {{ csrf_field() }}
    <input type='text' name='post_id' value='{{ $post->id }}' hidden>
    <div class='form-group'>
      <label for='name'>Name (leave this blank for a random, anonymous name)</label>
      <input type='text' class='form-control' name='name' placeholder='Name'>
    </div>
    <div class='form-group'>
      <label for='comment'>Comment</label>
      <textarea class='form-control' name='comment' rows='2' placeholder='Comment'></textarea>
    </div>
    <button class='btn btn-primary' type='submit'>Submit</button>
  </form>

  <!-- Comment Section -->
  @php
    foreach ($comments as $comment) {
      echo "<hr><p>";
      echo $comment->author;
      echo " - <span class='text-secondary'>";
      $comment_date = strtotime($comment->date);
      $formattedDate = date("F j, g:i a", $comment_date);
      echo $formattedDate;
      echo "</span></p><p>";
      echo $comment->content;
      echo "</p>";
    }
  @endphp

  <!-- bottom buffer -->
  <div style='display:block; height:30px'></div>
@endsection
