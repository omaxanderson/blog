@extends('layouts.app')

@section('content')

<div class='col-sm-8 offset-sm-2'>

  <h3 class='d-flex justify-content-center my-5'>
    {{ $post->title }}
  </h3>

  @php
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
      <label for='name'>Name</label>
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

</div>
@endsection
