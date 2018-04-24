@extends('layouts.app')

@section('content')
<h3 class='d-flex justify-content-center'>Admin Dashboard</h3>

<div class='row'>
  <div class='col-sm-6'>
    <form action='/uploadPost' method='POST' enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class='form-group'>
        <label for='file-upload'>File</label><br>
        <input class='form-control' type='file' name='file-upload' accept='.html,.txt'>
        <button type='submit' class='btn btn-primary mt-2' value='submit'>Submit</button>
      </div>

    </form>
  </div>
  <div class='col-sm-6 d-flex justify-content-end'>
    <a href='/editPosts'>
      <button class='btn btn-primary'>Edit Posts</button>
    </a>
  </div>
</div>

@php
  if (isset($uploadMessage)) {
    echo "<p class='text-success'>" . $uploadMessage . "</p>";
  }
@endphp

<form action='/uploadPostForm' method='POST'>
  {{ csrf_field() }}
  <div class='form-group'>
    <label for='title'>Title</label>
    <input class='form-control' type='text' name='title' placeholder='Title'>
  </div>
  <div class='form-group'>
    <label for='abstract'>Abstract</label>
    <textarea class='form-control' name='abstract' rows='2' placeholder='Abstract'></textarea>
  </div>
  <div class='form-row'>
    <div class='col-sm-2'>
      <label for='read_time'>Read Time</label>
      <input class='form-control' name='read_time' type='number'>
    </div>

    <div class='col-sm-2'>
      <label for='user_id'>User ID</label>
      <input class='form-control' name='user_id' type='number' value='1'>
    </div>
  </div>
  <div class='form-group mt-2'>
    <label for='content'>Content (note: must include tags)</label>
    <textarea class='form-control' name='content' rows='25' placeholder='Content'></textarea>
  </div>
  <button type='submit' class='btn btn-primary' value='submit'>Publish</button>
</form>

<div style='height: 20px'></div>


@endsection
