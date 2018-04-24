@extends('layouts.app')

@section('content')

<!--  // display a pre-filled form for the post
  // just lifted this off the adminDashboard page
-->
  <form action='/editPostSubmit' method='POST'>
    {{ csrf_field() }}

    <input name='post_id' value='{{ $post->id }}' hidden>

    <div class='form-group'>
      <label for='title'>Title</label>
      <input class='form-control' type='text' name='title' value='{{ $post->title }}'>
    </div>
    <div class='form-group'>
      <label for='abstract'>Abstract</label>
      <textarea class='form-control' name='abstract' rows='2'>{{ $post->abstract }}</textarea>
    </div>
    <div class='form-row'>
      <div class='col-sm-2'>
        <label for='read_time'>Read Time</label>
        <input class='form-control' name='read_time' type='number' value='{{ $post->read_time }}'>
      </div>

      <div class='col-sm-2'>
        <label for='user_id'>User ID</label>
        <input class='form-control' name='user_id' type='number' value='{{ $post->user_id }}'>
      </div>
    </div>
    <div class='form-group mt-2'>
      <label for='content'>Content (note: must include tags)</label>
      <textarea class='form-control' name='content' rows='25' >{{ $post->content }}</textarea>
    </div>
    <button type='submit' class='btn btn-primary' value='submit'>Save Changes</button>
  </form>

  <div style='height:20px'></div>

@endsection
