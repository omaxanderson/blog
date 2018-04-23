@extends('layouts.app')

@section('content')
<h3 class='d-flex justify-content-center'>Admin Dashboard</h3>

<form action='/uploadPost' method='POST' enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class='form-group'>
    <label for='file-upload'>File</label><br>
    <input class='form-control col-sm-4' type='file' name='file-upload' accept='.html,.txt'>
    <button type='submit' class='btn btn-primary mt-2' value='submit'>Submit</button>
  </div>

</form>

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
    <textarea class='form-control' name='content' rows='10' placeholder='Content'></textarea>
  </div>
  <button type='submit' class='btn btn-primary' value='submit'>Publish</button>
</form>


@endsection
